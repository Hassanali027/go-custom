@include('components.htmlboilerplate')
<style>
    .faq-hero, .faq-container {
        font-family: 'DM Sans', sans-serif;
    }
    .faq-hero h1, .faq-section-title, .faq-tabs-container button {
        font-family: 'Open Sans', sans-serif;
    }
    .faq-hero {
        height: 25rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 1.5rem;
        text-align: center;
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset("uploads/quote-hero-img.png") }}');
        background-size: cover;
        background-position: center;
        position: relative;
    }
    .faq-breadcrumb {
        position: absolute;
        top: 2.5rem;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        max-width: 80rem;
        padding: 0 3.4375rem;
        font-size: 0.8125rem;
        text-transform: capitalize;
        color: #fff;
        text-align: left;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .faq-breadcrumb svg {
        width: 0.875rem;
        height: 0.875rem;
        fill: #fff;
    }
    .faq-breadcrumb a {
        color: #fff;
        text-decoration: none;
    }
    .faq-breadcrumb span {
        font-weight: 500;
        color: #fff;
    }
    .faq-hero h1 {
        font-size: 2.625rem;
        font-weight: 700;
        margin-bottom: 0.9375rem;
        color: #fff;
    }
    .faq-hero p {
        font-size: 1rem;
        color: #fff;
        max-width: 37.5rem;
        margin: 0 auto;
        line-height: 1.6;
    }

    .faq-container {
        max-width: var(--site-container-width, 80rem);
        margin: 0 auto;
        padding: 3.125rem var(--site-container-gutter, 3.4375rem);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Tabs */
    .faq-tabs-container {
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 0.9375rem;
        margin-bottom: 3.125rem;
        flex-wrap: wrap;
    }
    .faq-tabs-container button {
        padding: 0.75rem 1.875rem;
        background: #fff;
        border: 1px solid #e0e0e0;
        font-size: 0.875rem;
        font-weight: 600;
        color: #111;
        cursor: pointer;
        transition: all 0.3s;
        min-width: 10rem;
        text-align: center;
    }
    .faq-tabs-container button.active, .faq-tabs-container button:hover {
        background-color: #FFB300;
        color: #111;
        border-color: #FFB300;
    }

    /* Content */
    .faq-content {
        width: 100%;
    }
    .faq-section {
        margin-bottom: 3.125rem;
    }
    .faq-section-title {
        font-size: 1.375rem;
        font-weight: 700;
        color: #111;
        margin-bottom: 1.5625rem;
    }

    .faq-accordion {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .faq-item {
        border: 1px solid #eaeaea;
        border-radius: 0.5rem;
        box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.05);
        overflow: hidden;
        transition: all 0.3s ease;
        background-color: #fff;
    }
    .faq-item-header {
        padding: 1rem 1.5625rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        font-weight: 500;
        font-size: 0.9062rem;
        color: #222;
        transition: background-color 0.3s;
    }
    .faq-item-header:hover {
        background-color: #fafafa;
    }
    .faq-item-icon {
        font-size: 1.25rem;
        font-weight: 400;
        color: #111;
    }
    .faq-item.active .faq-item-header {
        background-color: #fff;
        color: #111;
        border-bottom: 1px solid #f0f0f0;
    }
    .faq-item-body {
        background-color: #fff;
        padding: 0 1.5625rem;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out, padding 0.3s ease;
    }
    .faq-item.active .faq-item-body {
        padding: 1.25rem 1.5625rem;
        max-height: 31.25rem;
    }
    .faq-item-body p {
        color: #000;
        font-size: 0.9062rem;
        line-height: 1.6;
        margin: 0;
    }

    @media (max-width: 47.9375rem) {
        .faq-breadcrumb {
            display: none !important;
        }
        .faq-hero {
            padding: 3.125rem 1.25rem;
        }
        .faq-hero h1 {
            font-size: clamp(1.125rem, 6.5vw, 1.625rem);
            white-space: nowrap;
        }
        .faq-tabs-container {
            display: none !important;
        }
        .faq-item-header {
            font-size: 0.875rem;
            padding: 0.9375rem 1.25rem;
        }
    }
</style>

<main class="faq-page">
    @include('components.header')
    <div class="faq-hero">
        <div class="faq-breadcrumb">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
            <a href="/">Home</a> <span>></span> <span>FAQs</span>
        </div>
        <h1>{{ $settings['faq_page_title'] ?? 'Frequently Asked Questions' }}</h1>
        <p>From box styles and materials to custom sizes, pricing, and delivery, find quick answers to the questions we hear most.</p>
    </div>

    @php
        $sections = $settings['faq_page_sections'] ?? [];
    @endphp
    @if(!empty($sections))
    <div class="faq-container">
        
        <!-- Center Tabs -->
        <div class="faq-tabs-container">
            @foreach($sections as $index => $section)
                @php 
                    $slug = \Illuminate\Support\Str::slug($section['heading']);
                @endphp
                <button class="{{ $index == 0 ? 'active' : '' }}" data-target="{{ $slug }}">{{ $section['heading'] }}</button>
            @endforeach
        </div>

        <div class="faq-content">
            @foreach($sections as $index => $section)
                @php 
                    $slug = \Illuminate\Support\Str::slug($section['heading']);
                    $faqs = $section['faqs'] ?? [];
                @endphp
                <div class="faq-section" id="{{ $slug }}">
                    <h2 class="faq-section-title">{{ $section['heading'] }}</h2>
                    <div class="faq-accordion">
                        @foreach($faqs as $faq)
                            <div class="faq-item">
                                <div class="faq-item-header">
                                    {{ $faq['question'] }}
                                    <span class="faq-item-icon">+</span>
                                </div>
                                <div class="faq-item-body">
                                    <p>{!! nl2br(e($faq['answer'])) !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif
@include('components.cta')
@include('components.footer')

</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Accordion functionality
        const faqHeaders = document.querySelectorAll('.faq-item-header');
        faqHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const item = this.parentElement;
                const wasActive = item.classList.contains('active');
                
                // Close all other items in the same section
                const section = item.closest('.faq-section');
                section.querySelectorAll('.faq-item').forEach(i => {
                    i.classList.remove('active');
                    i.querySelector('.faq-item-icon').textContent = '+';
                });
                
                // Toggle current item
                if (!wasActive) {
                    item.classList.add('active');
                    item.querySelector('.faq-item-icon').textContent = '-';
                }
            });
        });

        // Smooth scroll for tabs
        const filterBtns = document.querySelectorAll('.faq-tabs-container button');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // The IntersectionObserver will handle the active class update on scroll,
                // but we can also set it immediately for responsiveness
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const targetId = this.getAttribute('data-target');
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    // Smooth scroll to section, offset by header height if fixed
                    const y = targetSection.getBoundingClientRect().top + window.scrollY - 100; 
                    window.scrollTo({top: y, behavior: 'smooth'});
                }
            });
        });

        // Intersection observer to highlight tabs on scroll
        const faqSections = document.querySelectorAll('.faq-section');
        const observerOptions = {
            root: null,
            rootMargin: '-9.375rem 0 -50% 0',
            threshold: 0
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    filterBtns.forEach(btn => {
                        if (btn.getAttribute('data-target') === id) {
                            btn.classList.add('active');
                        } else {
                            btn.classList.remove('active');
                        }
                    });
                }
            });
        }, observerOptions);

        faqSections.forEach(section => {
            observer.observe(section);
        });
    });
</script>
