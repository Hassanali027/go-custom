{{--
    "Are you a human?" addition check. Use inside a form that also has
    @include('components.spam-guard-fields', ['captcha' => true]); the numbers come from that token,
    and the answer is checked again on the server by the spam.guard middleware.
--}}
<div class="human-check">
    <div class="human-check-header">
        <span class="human-check-title">Are you a human?</span>
        {{-- The status takes the place of the hint line, so the box never changes size. --}}
        <p class="human-check-copy">Solve this quick addition before continuing.</p>
        <span class="human-check-status" aria-live="polite"></span>
    </div>
    <div class="human-check-control">
        <span class="human-check-question">0 + 0 =</span>
        <input type="text" class="human-check-answer" name="{{ \App\Support\SpamGuard::ANSWER_FIELD }}" inputmode="numeric" maxlength="2" placeholder="Answer" aria-label="Human verification answer" autocomplete="off">
        <button type="button" class="human-check-btn">Verify</button>
    </div>
</div>

@once
    <style>
        .human-check {
            width: 100%;
            padding: 0.75rem 1.25rem;
            background-color: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 180, 0, 0.35);
            border-radius: 0.5rem;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 0.75rem 1rem;
            font-family: 'DM Sans', sans-serif;
        }
        .human-check-header {
            display: flex;
            flex-direction: column;
            gap: 0.125rem;
        }
        .human-check-title {
            color: #FFFFFF;
            font-size: 0.9375rem;
            font-weight: 700;
        }
        .human-check-copy {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.8125rem;
            margin: 0;
        }
        .human-check-control {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-wrap: wrap;
        }
        .human-check-question {
            color: var(--secondary-color, #FFB400);
            font-size: 0.9375rem;
            font-weight: 700;
            white-space: nowrap;
        }
        .human-check .human-check-answer {
            width: 6.5rem;
            height: 2.75rem;
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0.375rem;
            color: #FFFFFF;
            -webkit-text-fill-color: #FFFFFF;
            caret-color: #FFFFFF;
            text-align: center;
            font-family: inherit;
            font-size: 0.875rem;
            padding: 0 0.75rem;
            box-sizing: border-box;
            outline: none;
        }
        .human-check .human-check-answer::placeholder {
            color: #4B5563;
            -webkit-text-fill-color: #4B5563;
            opacity: 1;
        }
        .human-check .human-check-answer:focus { border-color: var(--secondary-color, #FFB400); }
        .human-check .human-check-answer.is-invalid { border-color: #ff6b6b; }
        .human-check-btn {
            height: 2.75rem;
            border: 0;
            border-radius: 999px;
            background-color: var(--secondary-color, #FFB400);
            color: var(--primary-color, #0B2240);
            font-family: inherit;
            font-size: 0.875rem;
            font-weight: 700;
            padding: 0 1.5rem;
            cursor: pointer;
        }
        .human-check-copy,
        .human-check-status {
            line-height: 1.35;
        }
        .human-check-status {
            display: none;
            margin: 0;
            font-size: 0.8125rem;
            font-weight: 500;
        }
        .human-check-header.has-status .human-check-copy { display: none; }
        .human-check-header.has-status .human-check-status { display: block; }
        .human-check-status.is-error { color: #ff6b6b; }
        .human-check-status.is-success { color: #72d17f; }
        @media (max-width: 48rem) {
            .human-check { padding: 1rem; }
            .human-check-title { font-size: 0.875rem; }
            .human-check-copy,
            .human-check-status { font-size: 0.75rem; }
            .human-check-control { width: 100%; }
            .human-check .human-check-answer { flex: 1 1 5.5rem; min-width: 5.5rem; }
        }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.human-check').forEach(function (box) {
            var form = box.closest('form');
            var token = form ? form.querySelector('.fsg-token') : null;
            var question = box.querySelector('.human-check-question');
            var answer = box.querySelector('.human-check-answer');
            var button = box.querySelector('.human-check-btn');
            var status = box.querySelector('.human-check-status');
            var header = box.querySelector('.human-check-header');
            var total = null;

            function setStatus(text, state) {
                status.textContent = text;
                header.classList.toggle('has-status', text !== '');
                status.classList.toggle('is-error', state === 'error');
                status.classList.toggle('is-success', state === 'success');
                answer.classList.toggle('is-invalid', state === 'error');
            }

            // The numbers come from the server token, so the answer is verified server side too.
            function applyQuestion(a, b) {
                total = a + b;
                question.textContent = a + ' + ' + b + ' =';
                answer.value = '';
                setStatus('', null);
            }

            function isCorrect() {
                var value = answer.value.trim();
                return total !== null && value !== '' && Number(value) === total;
            }

            function check() {
                if (isCorrect()) {
                    setStatus('Verified.', 'success');
                    return true;
                }
                setStatus('Please solve the addition correctly.', 'error');
                answer.focus();
                return false;
            }

            if (token && token.dataset.a) applyQuestion(Number(token.dataset.a), Number(token.dataset.b));

            answer.addEventListener('input', function () {
                answer.value = answer.value.replace(/\D/g, '');
                if (status.classList.contains('is-success') || status.classList.contains('is-error')) setStatus('', null);
            });
            answer.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') { e.preventDefault(); check(); }
            });
            button.addEventListener('click', check);

            if (form) {
                // Capture phase: runs before the AJAX submit handler and stops it on a wrong answer.
                form.addEventListener('submit', function (e) {
                    if (isCorrect()) return;
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    check();
                }, true);

                // After a successful submit the form is reset: ask a new question with a fresh token.
                form.addEventListener('reset', function () {
                    setStatus('', null);
                    if (window.fsgRefresh) window.fsgRefresh(form, applyQuestion);
                });
            }
        });
    });
    </script>
@endonce
