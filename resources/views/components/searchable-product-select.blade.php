@props([
    'name' => 'box_style',
    'inputClass' => '',
    'placeholder' => 'Select Your Box Style',
    'value' => '',
    'required' => true,
])

@php
    $value = $value !== '' ? $value : request('box_style', '');
    $searchableProducts = \App\Support\QuoteProductOptions::all();
@endphp

<div class="product-search-select" data-product-search-select>
    <input type="hidden"
           name="{{ $name }}"
           value="{{ $value }}"
           data-product-search-value
           data-product-selected="{{ $value !== '' ? '1' : '0' }}">
    <input type="text"
           class="{{ $inputClass }} product-search-input"
           placeholder="{{ $placeholder }}"
           value="{{ $value }}"
           autocomplete="off"
           readonly
           data-product-search-input
           aria-haspopup="listbox"
           aria-expanded="false">
    <div class="product-search-options" role="listbox">
        <input type="search" class="product-search-filter" placeholder="Search product..." autocomplete="off" aria-label="Search product">
        @foreach($searchableProducts as $searchableProductTitle)
            <button type="button" class="product-search-option" data-value="{{ $searchableProductTitle }}">
                {{ $searchableProductTitle }}
            </button>
        @endforeach
        <div class="product-search-empty" hidden>No product found</div>
    </div>
</div>

@once
    <style>
        .product-search-select { position: relative; width: 100%; min-width: 0; box-sizing: border-box; }
        .product-search-select::after {
            display: none;
            content: '';
            position: absolute;
            top: 50%;
            right: 1rem;
            width: 0;
            height: 0;
            border-left: .375rem solid transparent;
            border-right: .375rem solid transparent;
            border-top: .4375rem solid #333;
            transform: translateY(-50%);
            pointer-events: none;
            z-index: 2;
        }
        .product-search-input {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            box-sizing: border-box !important;
            padding-right: 2.35rem !important;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23333333'%3E%3Cpath d='M7 9l5 6 5-6z'/%3E%3C/svg%3E") !important;
            background-repeat: no-repeat !important;
            background-position: right .75rem center !important;
            background-size: 1.15rem !important;
            text-overflow: ellipsis;
            cursor: pointer;
        }
        .product-search-select .product-search-filter,
        .product-search-options .product-search-filter,
        input.product-search-filter {
            display: block;
            width: calc(100% - 1rem);
            height: 2.75rem;
            margin: .5rem;
            padding: 0 .75rem;
            border: 1px solid #CDA434 !important;
            border-radius: .4rem;
            background: #ffffff !important;
            color: #1a1a1a !important;
            -webkit-text-fill-color: #1a1a1a !important;
            caret-color: #1a1a1a !important;
            font: inherit;
            font-size: 0.875rem !important;
            box-sizing: border-box;
            outline: none;
        }
        .product-search-select .product-search-filter::placeholder,
        .product-search-options .product-search-filter::placeholder,
        input.product-search-filter::placeholder {
            color: #736d66 !important;
            -webkit-text-fill-color: #736d66 !important;
            opacity: 1 !important;
        }
        .product-search-select .product-search-filter:focus,
        .product-search-options .product-search-filter:focus,
        input.product-search-filter:focus {
            box-shadow: 0 0 0 .15rem rgba(205,164,52,.2) !important;
            border-color: #CDA434 !important;
            color: #1a1a1a !important;
            -webkit-text-fill-color: #1a1a1a !important;
            caret-color: #1a1a1a !important;
        }
        .product-search-options {
            display: none;
            position: absolute;
            top: calc(100% + 0.125rem);
            left: 0;
            right: 0;
            width: 100%;
            max-width: 100%;
            z-index: 1000;
            max-height: 15rem;
            overflow-y: auto;
            overflow-x: hidden;
            overscroll-behavior: contain;
            background: #FFF8E7;
            border: 1px solid #DDD6CB;
            border-radius: 0 0 .5rem .5rem;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.14);
            scrollbar-width: thin;
            box-sizing: border-box;
        }
        .product-search-select.is-open .product-search-options { display: block; }
        .product-search-option {
            display: block;
            width: 100%;
            padding: .7rem .85rem;
            border: 0;
            border-bottom: 1px solid #DDD6CB;
            background: #FFF8E7;
            color: #2D2D2D;
            text-align: left;
            font: inherit;
            line-height: 1.35;
            cursor: pointer;
        }
        .product-search-option[hidden] { display: none !important; }
        .product-search-option:hover,
        .product-search-option:focus { background: #EFE7D6; color: #2D2D2D; outline: none; }
        .product-search-empty { padding: .8rem; color: #666; background: #FFF8E7; }

    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('[data-product-search-select]').forEach(function (wrapper) {
                if (wrapper.dataset.ready) return;
                wrapper.dataset.ready = '1';
                const input = wrapper.querySelector('.product-search-input');
                const valueInput = wrapper.querySelector('[data-product-search-value]');
                const filterInput = wrapper.querySelector('.product-search-filter');
                const options = Array.from(wrapper.querySelectorAll('.product-search-option'));
                const empty = wrapper.querySelector('.product-search-empty');
                const form = wrapper.closest('form');

                function filterOptions() {
                    const query = filterInput.value.trim().toLowerCase();
                    let visible = 0;
                    options.forEach(function (option) {
                        const show = option.dataset.value.toLowerCase().includes(query);
                        option.hidden = !show;
                        if (show) visible++;
                    });
                    empty.hidden = visible !== 0;
                    wrapper.classList.add('is-open');
                    input.setAttribute('aria-expanded', 'true');
                }

                function openOptions() {
                    filterOptions();
                    filterInput.focus();
                }

                input.addEventListener('focus', openOptions);
                input.addEventListener('click', openOptions);
                filterInput.addEventListener('input', filterOptions);
                options.forEach(function (option) {
                    option.addEventListener('click', function () {
                        input.value = option.dataset.value;
                        valueInput.value = option.dataset.value;
                        valueInput.dataset.productSelected = '1';
                        wrapper.classList.remove('is-open');
                        input.setAttribute('aria-expanded', 'false');
                        input.dispatchEvent(new Event('change', { bubbles: true }));
                    });
                });

                if (form && {{ $required ? 'true' : 'false' }}) {
                    form.addEventListener('submit', function (event) {
                        if (valueInput.dataset.productSelected === '1' && valueInput.value.trim() !== '') return;

                        event.preventDefault();
                        event.stopImmediatePropagation();
                        openOptions();
                        alert('Please select a Box Style from the list.');
                    }, true);
                }
            });

            document.addEventListener('click', function (event) {
                document.querySelectorAll('[data-product-search-select].is-open').forEach(function (wrapper) {
                    if (!wrapper.contains(event.target)) {
                        wrapper.classList.remove('is-open');
                        wrapper.querySelector('.product-search-input').setAttribute('aria-expanded', 'false');
                    }
                });
            });
        });
    </script>
@endonce
