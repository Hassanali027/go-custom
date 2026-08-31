<style>
    .category-hero-wrapper {
        width: 100%;
        max-width: 100%;
        height: 26.25rem;
        box-sizing: border-box;
        background: linear-gradient(160deg, #FFF8E7 0%, #FFE9C2 35%, #FFE0A6 100%);
        color: #000;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: flex-start;
    }
    
    @media (max-width: 62rem) {
        .category-hero-wrapper {
            height: auto;
            display: block;
        }

    }
    

    .hero-bg-lines {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        pointer-events: none;
        z-index: 1;
    }

    .category-hero-wrapper::before {
        content: '';
        position: absolute;
        top: -40%;
        right: -15%;
        width: 43.75rem;
        height: 43.75rem;
        background: radial-gradient(circle, rgba(255, 180, 0, 0.3) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
        animation: heroGlow 8s ease-in-out infinite alternate;
        z-index: 0;
    }

    .category-hero-wrapper::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -10%;
        width: 31.25rem;
        height: 31.25rem;
        background: radial-gradient(circle, rgba(255, 180, 0, 0.2) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
        animation: heroGlow 10s ease-in-out infinite alternate-reverse;
        z-index: 0;
    }

    @keyframes heroGlow {
        0% {
            transform: scale(1);
            opacity: 0.7;
        }
        100% {
            transform: scale(1.2);
            opacity: 1;
        }
    }

    .hero-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image:
            radial-gradient(circle at 20% 30%, rgba(255, 180, 0, 0.08) 1px, transparent 1px),
            radial-gradient(circle at 70% 60%, rgba(255, 180, 0, 0.06) 1px, transparent 1px),
            radial-gradient(circle at 40% 80%, rgba(255, 180, 0, 0.04) 1px, transparent 1px);
        background-size: 3.75rem 3.75rem, 5rem 5rem, 3.125rem 3.125rem;
        pointer-events: none;
        z-index: 0;
    }

    /* Diagonal artwork from the Figma hero. The image sits above this layer. */
    .hero-line {
        position: absolute;
        width: 28.125rem;
        height: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        transform-origin: left center;
        /* CSS uses the opposite visual direction to Figma's exported angle. */
        transform: rotate(52.86deg);
        top: 6.4375rem;
        pointer-events: none;
        z-index: 1;
    }
    .hero-line-1 { left: calc(50% - 45rem + 21.5625rem); }
    .hero-line-2 { left: calc(50% - 45rem + 26.375rem); top: 6.5rem; }
    .hero-line-3 { left: calc(50% - 45rem + 31.1875rem); top: 6.5rem; }
    .hero-line-4 { left: calc(50% - 45rem + 36rem); top: 6.5rem; }
    .hero-line-5 { left: calc(50% - 45rem + 40.8125rem); top: 6.5rem; }
    .hero-line-6 { left: calc(50% - 45rem + 45.625rem); top: 6.5rem; }

    .hero-section {
        width: 100%;
        max-width: 80rem;
        margin: 0 auto;
        padding: 2.5rem 3.4375rem;
        display: block;
        position: relative;
        z-index: 2;
        box-sizing: border-box;
    }

    .hero-content {
        max-width: 35rem;
        position: relative;
        z-index: 2;
        padding-top: 0;
        padding-bottom: 0;
    }



    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap');

    .hero-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: 3.125rem;
        line-height: 1.2;
        letter-spacing: 0%;
        color: #000;
        margin-bottom: 0.875rem;
        overflow-wrap: break-word;
        max-width: 30rem;
        text-transform: capitalize;
    }

    .hero-title .highlight {
        color: #D4A872;
    }

    .category-page-hero .hero-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 2rem;
        line-height: 1.2;
        max-width: 34rem;
        text-align: left;
        margin-bottom: 0.75rem;
    }

    .category-page-hero .hero-description {
        max-width: 34rem;
        text-align: left;
        line-height: 1.45;
        margin-bottom: 1.25rem;
    }

    .category-page-hero .hero-title br {
        display: none;
    }

    .category-page-hero .hero-section {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .hero-description {
        text-align: justify;
        font-family: 'DM Sans', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: #000;
        max-width: 31.875rem;
        margin-bottom: 2rem;
        font-weight: 300;
    }

    .hero-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 14.75rem;
        height: 3.5rem;
        box-sizing: border-box;
        background: var(--secondary-color);
        font-family: 'DM Sans', sans-serif;
        color: var(--primary-color);
        box-shadow: 0 0.9375rem 2.1875rem rgba(0, 0, 0, 0.15);
        font-size: 1rem;
        font-weight: 700;
        border-radius: 0.25rem;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s, transform 0.2s;
    }

    .hero-btn:hover {
        background: var(--primary-color); color: #fff;
        transform: translateY(-0.125rem);
    }

    .hero-image-wrapper {
        position: absolute;
        right: 3.4375rem;
        top: 0;
        bottom: 0;
        width: 28.5rem;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        z-index: 3;
    }

    .hero-image-wrapper img {
        width: 100%;
        max-width: 28.5rem;
        height: auto;
        max-height: 100%;
        border-radius: 1rem;
        box-shadow: none;
        background-color: transparent;
        object-fit: contain;
        object-position: center;
    }

    /* Give the homepage artwork the same strong visual presence as the reference. */
    .home-hero-wrapper .hero-image-wrapper {
        right: 3.4375rem;
        width: 36rem;
    }

    .home-hero-wrapper .hero-image-wrapper img {
        max-width: 36rem;
        max-height: 110%;
        transform: none;
        transform-origin: center;
    }

    @media (min-width: 75.0625rem) {
        .category-page-hero .hero-image-wrapper {
            width: 34rem;
        }

        .category-page-hero .hero-image-wrapper img {
            max-width: 34rem;
            max-height: 100%;
        }
    }

    @media (max-width: 75rem) and (min-width: 62.0625rem) {
        .home-hero-wrapper .hero-content {
            max-width: 27rem;
        }

        .home-hero-wrapper .hero-image-wrapper {
            right: 3.4375rem;
            width: 27rem;
        }

        .home-hero-wrapper .hero-image-wrapper img {
            max-width: 27rem;
            max-height: 100%;
            transform: none;
        }
    }

    @media (max-width: 93.75rem) and (min-width: 62.0625rem) {
        .hero-section {
            grid-template-columns: minmax(0, 1fr) minmax(20rem, 38%);
            gap: 2rem;
        }
        .hero-image-wrapper img {
            max-width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
        }
    }

    @media (max-width: 62rem) {
        .hero-line {
            display: none;
        }

        .hero-section {
            flex-direction: column-reverse;
            display: flex;
            padding: 1.875rem 2rem 1.5rem !important;
            text-align: center;
            gap: 1.25rem;
        }

        .hero-content {
            width: 100%;
            max-width: 32rem;
            margin: 0 auto;
            padding-top: 0;
            padding-bottom: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hero-title {
            font-size: 1.875rem;
            line-height: 1.25;
            text-align: center;
            max-width: 26rem;
            margin-left: auto;
            margin-right: auto;
        }

        .category-page-hero .hero-section,
        .category-page-hero .hero-content {
            align-items: center;
            text-align: center;
        }

        .category-page-hero .hero-content {
            max-width: 100%;
        }

        .category-page-hero .hero-title {
            max-width: 27.5rem;
            text-align: center;
        }

        .hero-description {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.55;
            text-align: justify;
            max-width: 28rem;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1.75rem;
        }

        .hero-image-wrapper {
            position: relative;
            right: auto;
            top: auto;
            bottom: auto;
            justify-content: center;
            width: 100%;
            height: auto;
            margin-top: 0;
        }

        .hero-image-wrapper img {
            width: 100%;
            height: auto;
            max-width: 18.9375rem;
            max-height: 18.625rem;
            aspect-ratio: auto;
        }

        .home-hero-wrapper .hero-image-wrapper {
            right: auto;
            width: 100%;
        }

        .home-hero-wrapper .hero-image-wrapper img {
            max-width: 21rem;
            max-height: none;
            transform: none;
        }

        .hero-btn-outline {
            display: none !important;
        }
    }

    @media (max-width: 48rem) {
        .hero-section {
            padding: 1.5rem 1.5rem 1.25rem !important;
        }

        .hero-content {
            max-width: 100%;
        }

        .hero-title {
            font-size: 1.375rem !important;
            line-height: 1.25;
            max-width: 17.5rem;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-title br {
            display: none;
        }

        .hero-description {
            max-width: 24rem;
            font-size: 0.9375rem;
            line-height: 1.55;
        }
    }

    @media (max-width: 30rem) {
        .hero-section {
            padding: 1.25rem 1.25rem 1rem !important;
        }

        .hero-title {
            font-size: 1.25rem !important;
            line-height: 1.25;
            max-width: 16.5rem;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 0.75rem;
        }

        .hero-title br {
            display: none;
        }

        .category-page-hero .hero-title {
            font-size: 1.375rem !important;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .hero-description {
            max-width: 100%;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
        }
    }

    .hero-glow-circle {
        position: absolute;
        width: 11.375rem;
        height: 11.375rem;
        left: 0;
        top: 50%;
        transform: translate(-50%, -50%);
        background: #FFE0A2;
        filter: blur(2.8125rem);
        border-radius: 50%;
        pointer-events: none;
        z-index: -1;
    }

    .hero-glow-circle-right {
        position: absolute;
        width: 16.0625rem;
        height: 16.0625rem;
        right: 0;
        top: 0;
        transform: translate(30%, -20%);
        background: #FFE0A2;
        filter: blur(3.75rem);
        border-radius: 50%;
        pointer-events: none;
        z-index: -1;
    }
</style>

<!-- Hero Banner with gradient -->
<div class="category-hero-wrapper {{ request()->is('/') ? 'home-hero-wrapper' : 'category-page-hero' }}">
    <div class="hero-pattern"></div>


    <section class="hero-section">

        <div class="hero-content">
            @if(!request()->is('/'))
            <style>
                .hero-breadcrumb {
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;
                    text-align: left;
                    margin-bottom: 0.875rem;
                    font-family: 'DM Sans', sans-serif;
                    font-size: 0.9375rem;
                    text-transform: capitalize;
                    color: #000;
                }
                .hero-breadcrumb a {
                    color: inherit;
                    text-decoration: none;
                }
                .hero-breadcrumb a:hover {
                    color: var(--primary-color);
                    text-decoration: none;
                }
                @media (max-width: 48rem) {
                    .hero-breadcrumb {
                        display: none !important;
                    }
                }
            </style>
            <div class="hero-breadcrumb">
                <a href="/"><i class="fa-solid fa-house" style="font-size: 0.8125rem;"></i> Home</a> <span style="margin: 0 0.25rem;">&gt;</span> <strong>{{ !empty($settings['title']) ? strtolower($settings['title']) : (!empty($category['title']) ? strtolower($category['title']) : 'category') }}</strong>
            </div>
            @endif
            <h1 class="hero-title">
                {!! !empty($settings['hero_title']) ? $settings['hero_title'] : 'Custom Packaging<br>For The Food &<br>Beverage Industry' !!}
            </h1>

            <p class="hero-description">
                {{ !empty($settings['hero_description']) ? $settings['hero_description'] : 'We believe your home should feel like a gentle exhale. Every piece we curate carries the quiet confidence of timeless design — rooted in earthy tones, honest materials, and a deep respect for slow living.' }}
            </p>

            <div class="hero-buttons" style="position: relative; display: flex; gap: 1rem; align-items: center;">
                <div class="hero-glow-circle"></div>
                <a href="/request-quote/" class="hero-btn" style="display: inline-flex; align-items: center;">Get Instant Quote <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 0.375rem;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                <a href="/shop/" class="hero-btn-outline" style="display: inline-flex; align-items: center; justify-content: center; width: 12.1875rem; height: 3.5rem; box-sizing: border-box; font-family: 'DM Sans', sans-serif; font-size: 1rem; font-weight: 700; color: var(--primary-color); border: 0.125rem solid var(--primary-color); border-radius: 0.25rem; text-decoration: none; transition: 0.3s;">Shop Now</a>
            </div>
        </div>

        <div class="hero-image-wrapper">
            <div class="hero-glow-circle-right"></div>
            @php
                $hImg = !empty($settings['hero_image']) ? $settings['hero_image'] : (!empty($category['hero_image']) ? $category['hero_image'] : 'uploads/Home-Banner.webp');
                $hImgPath = \Illuminate\Support\Str::startsWith($hImg, ['storage/', 'uploads/', 'images/']) ? $hImg : 'storage/' . $hImg;
            @endphp
            <img src="{{ asset($hImgPath) }}?v={{ @filemtime(public_path($hImgPath)) ?: 1 }}" alt="{{ strip_tags($settings['hero_title'] ?? ($category['hero_title'] ?? 'Custom Rigid Packaging Boxes')) }}" fetchpriority="high" onerror="this.src='{{ asset('uploads/Home-Banner.webp') }}'">
        </div>
    </section>
</div>









