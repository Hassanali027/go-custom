{{--
    Anti-bot fields for the public quote forms. Include right after @csrf inside any
    <form> that posts to a route protected by the `spam.guard` middleware.

    @include('components.spam-guard-fields')                     honeypot + timing token
    @include('components.spam-guard-fields', ['captcha' => true]) also seeds the "a + b =" question
        shown by components/human-check (include that before the submit button).
--}}
@php
    $fsg = !empty($captcha) ? \App\Support\SpamGuard::captcha() : ['token' => \App\Support\SpamGuard::token()];
@endphp
<input type="hidden" name="{{ \App\Support\SpamGuard::TOKEN_FIELD }}" class="fsg-token" value="{{ $fsg['token'] }}"@if(!empty($captcha)) data-a="{{ $fsg['a'] }}" data-b="{{ $fsg['b'] }}"@endif>
{{-- display:none (not just off-screen) so browser autofill and form-filler extensions never fill the trap;
     a filled trap makes the server treat a real visitor as a bot and silently skip the email. --}}
<div style="display:none;" aria-hidden="true">
    <label>Leave this field empty <input type="text" name="{{ \App\Support\SpamGuard::HONEYPOT_FIELD }}" value="" tabindex="-1" autocomplete="off"></label>
</div>
@once
    <script>
    /* Gets a fresh anti-bot token (and captcha numbers) for a form, e.g. after it was submitted and reset. */
    window.fsgRefresh = window.fsgRefresh || function (form, onNumbers) {
        if (!form) return;
        var token = form.querySelector('.fsg-token');
        var wantCaptcha = !!(token && token.dataset.a);
        fetch('{{ url('/spam-guard/token') }}/?captcha=' + (wantCaptcha ? 1 : 0), { headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }, credentials: 'same-origin', cache: 'no-store' })
            .then(function (r) { return r.json(); })
            .then(function (d) {
                if (!token || !d.token) return;
                token.value = d.token;
                var csrf = form.querySelector('input[name="_token"]');
                if (csrf && d.csrf) csrf.value = d.csrf;
                if (d.a) { token.dataset.a = d.a; token.dataset.b = d.b; }
                if (onNumbers && d.a) onNumbers(Number(d.a), Number(d.b));
            })
            .catch(function () {});
    };

    // A real visitor's browser runs this script, so clear the trap field right before sending:
    // even if autofill or an extension filled it, a real person is never treated as a bot.
    // Simple bots post straight to the server without running it, so they still get caught.
    document.addEventListener('submit', function (e) {
        var trap = e.target && e.target.querySelector && e.target.querySelector('input[name="{{ \App\Support\SpamGuard::HONEYPOT_FIELD }}"]');
        if (trap) trap.value = '';
    }, true);

    // Every guarded form gets a fresh token after it is reset (the AJAX handler resets it after a successful submit).
    document.addEventListener('reset', function (e) {
        var form = e.target;
        if (form && form.querySelector && form.querySelector('.fsg-token') && !form.querySelector('.human-check')) {
            window.fsgRefresh(form);
        }
    }, true);
    </script>
@endonce
