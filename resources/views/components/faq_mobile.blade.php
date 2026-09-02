<style>
    .faq-mobile-section {
        display: none;
    }
    
    @media (max-width: 62rem) {
        .faq-mobile-section {
            display: block;
            padding: 1.25rem 1rem 2.5rem;
            background: var(--background-color, #FAF8F8);
            width: 100%;
            box-sizing: border-box;
            font-family: 'DM Sans', sans-serif;
        }

        .faq-mobile-section h2 {
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: clamp(1.15rem, 5.2vw, 1.45rem);
            color: var(--primary-color, #0B2240);
            margin-bottom: 1.25rem;
            text-align: center;
        }

        .faq-mobile-section .tf-accordion {
            display: flex;
            flex-direction: column;
            border-top: none;
        }

        .faq-mobile-section .tf-accordion-item {
            border-bottom: 1px solid #888;
            border-top: none;
            border-left: none;
            border-right: none;
            background: transparent;
            padding: 0;
            border-radius: 0;
        }

        .faq-mobile-section .tf-accordion-btn {
            width: 100%;
            height: auto;
            min-height: 3.3125rem;
            background: transparent;
            border: none;
            position: relative;
            padding: 0.625rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            font-size: 0.9375rem;
            color: var(--primary-color, #000);
            text-align: left;
        }

        .faq-mobile-section .tf-accordion-btn svg {
            width: 1.2rem;
            height: 1.2rem;
            transition: transform 0.3s ease;
            stroke: #666;
            fill: none;
            flex-shrink: 0;
            margin-left: 0.5rem;
        }

        .faq-mobile-section .tf-accordion-item.active .tf-accordion-btn svg {
            transform: rotate(180deg);
        }

        .faq-mobile-section .tf-accordion-item.active .tf-accordion-btn::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #888;
        }

        .faq-mobile-section .tf-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-mobile-section .tf-accordion-content-inner {
            padding-top: 1.5rem;
            padding-bottom: 1.25rem;
            font-size: 0.9062rem;
            line-height: 1.5;
            color: #000;
            text-align: justify;
            font-family: 'DM Sans', sans-serif;
        }
    }
</style>

@php
    $displayFaqsMobile = isset($category) ? ($faqs ?? []) : ($settings['faqs'] ?? []);
@endphp
@if(count($displayFaqsMobile))
    <section class="faq-mobile-section">
        <h2>Frequently Asked Questions</h2>
        <div class="tf-accordion">
            @foreach($displayFaqsMobile as $faq)
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" type="button" onclick="toggleTfFaqMobile(this)">
                        {{ is_array($faq) ? ($faq['question'] ?? '') : ($faq->question ?? '') }}
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">{!! nl2br(e(is_array($faq) ? ($faq['answer'] ?? '') : ($faq->answer ?? ''))) !!}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif

<script>
    function toggleTfFaqMobile(btn) {
        const item = btn.closest('.tf-accordion-item');
        const content = item.querySelector('.tf-accordion-content');
        
        // Close others in mobile section
        document.querySelectorAll('.faq-mobile-section .tf-accordion-item').forEach(other => {
            if (other !== item) {
                other.classList.remove('active');
                other.querySelector('.tf-accordion-content').style.maxHeight = null;
            }
        });
        
        // Toggle current
        if (item.classList.contains('active')) {
            item.classList.remove('active');
            content.style.maxHeight = null;
        } else {
            item.classList.add('active');
            content.style.maxHeight = content.scrollHeight + "px";
        }
    }
</script>
