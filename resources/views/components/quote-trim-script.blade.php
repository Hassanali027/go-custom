{{-- Keeps [data-qf-trim] fields (Name / Email / Phone / Message) from being "filled" with spaces only. --}}
@once
    <script>
    (function() {
        function isTrimField(el) {
            return el && el.matches && el.matches('[data-qf-trim]');
        }

        function trimForm(form) {
            if (!form) return;
            form.querySelectorAll('[data-qf-trim]').forEach(function(field) {
                field.value = field.value.trim();
            });
        }

        // Don't let the value start with spaces while typing (email never needs a space).
        document.addEventListener('keydown', function(e) {
            var field = e.target;
            if (isTrimField(field) && e.key === ' ' && (field.type === 'email' || field.value.trim() === '')) {
                e.preventDefault();
            }
        }, true);

        // Fallback for keyboards that don't send keydown (e.g. some mobile keyboards) and for paste.
        document.addEventListener('input', function(e) {
            var field = e.target;
            if (!isTrimField(field)) return;
            var value = field.value;
            if (field.type === 'email') {
                // An email input reports "" while only spaces are typed, so reset it to clear them.
                if (value === '' || /\s/.test(value)) field.value = value.replace(/\s+/g, '');
            } else if (/^\s/.test(value)) {
                field.value = value.replace(/^\s+/, '');
            }
        }, true);

        document.addEventListener('blur', function(e) {
            if (isTrimField(e.target)) e.target.value = e.target.value.trim();
        }, true);

        // Runs before the browser's built-in validation (button click and Enter key both fire this).
        document.addEventListener('click', function(e) {
            var btn = e.target.closest && e.target.closest('button[type="submit"], input[type="submit"]');
            if (btn) trimForm(btn.form);
        }, true);

        document.addEventListener('submit', function(e) {
            trimForm(e.target);
        }, true);
    })();
    </script>
@endonce
