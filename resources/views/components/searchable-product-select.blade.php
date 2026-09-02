@props([
    'name' => 'box_style',
    'inputClass' => '',
    'placeholder' => 'Select Your Box Style',
    'value' => '',
    'required' => false,
])

@php
    $searchableProducts = \Illuminate\Support\Facades\DB::table('admin_products')
        ->where('status', 'published')
        ->orderBy('title')
        ->pluck('title');
@endphp

<div class="product-search-select" data-product-search-select>
    <input type="text"
           name="{{ $name }}"
           class="{{ $inputClass }} product-search-input"
           placeholder="{{ $placeholder }}"
           value="{{ $value }}"
           autocomplete="off"
           @if($required) required @endif>
    <div class="product-search-options" role="listbox">
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
        .product-search-input {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            box-sizing: border-box !important;
            padding-right: 2.35rem !important;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23FFFFFF'%3E%3Cpath d='M7 9l5 6 5-6z'/%3E%3C/svg%3E") !important;
            background-repeat: no-repeat !important;
            background-position: right .75rem center !important;
            background-size: 1.15rem !important;
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
            background: #fff;
            border: 1px solid #d8d8d8;
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
            border-bottom: 1px solid #eee;
            background: #fff;
            color: #0b2240;
            text-align: left;
            font: inherit;
            line-height: 1.35;
            cursor: pointer;
        }
        .product-search-option:hover,
        .product-search-option:focus { background: #FFB400; color: #0B2240; outline: none; }
        .product-search-empty { padding: .8rem; color: #666; background: #fff; }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('[data-product-search-select]').forEach(function (wrapper) {
                if (wrapper.dataset.ready) return;
                wrapper.dataset.ready = '1';
                const input = wrapper.querySelector('.product-search-input');
                const options = Array.from(wrapper.querySelectorAll('.product-search-option'));
                const empty = wrapper.querySelector('.product-search-empty');

                function filterOptions() {
                    const query = input.value.trim().toLowerCase();
                    let visible = 0;
                    options.forEach(function (option) {
                        const show = option.dataset.value.toLowerCase().includes(query);
                        option.hidden = !show;
                        if (show) visible++;
                    });
                    empty.hidden = visible !== 0;
                    wrapper.classList.add('is-open');
                }

                input.addEventListener('focus', filterOptions);
                input.addEventListener('click', filterOptions);
                input.addEventListener('input', filterOptions);
                options.forEach(function (option) {
                    option.addEventListener('click', function () {
                        input.value = option.dataset.value;
                        wrapper.classList.remove('is-open');
                        input.dispatchEvent(new Event('change', { bubbles: true }));
                    });
                });
            });

            document.addEventListener('click', function (event) {
                document.querySelectorAll('[data-product-search-select].is-open').forEach(function (wrapper) {
                    if (!wrapper.contains(event.target)) wrapper.classList.remove('is-open');
                });
            });
        });
    </script>
@endonce
