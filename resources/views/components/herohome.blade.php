<style>
    .category-hero-wrapper {
        width: 100%;
        max-width: 100%;
        height: 538px;
        box-sizing: border-box;
        background: linear-gradient(160deg, #FFF8E7 0%, #FFE9C2 35%, #FFE0A6 100%);
        color: #000;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: flex-start;
    }
    
    @media (max-width: 992px) {
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
        width: 700px;
        height: 700px;
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
        width: 500px;
        height: 500px;
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
        background-size: 60px 60px, 80px 80px, 50px 50px;
        pointer-events: none;
        z-index: 0;
    }

    /* Diagonal artwork from the Figma hero. The image sits above this layer. */
    .hero-line {
        position: absolute;
        width: 450px;
        height: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        transform-origin: left center;
        /* CSS uses the opposite visual direction to Figma's exported angle. */
        transform: rotate(52.86deg);
        top: 103px;
        pointer-events: none;
        z-index: 1;
    }
    .hero-line-1 { left: calc(50% - 720px + 345px); }
    .hero-line-2 { left: calc(50% - 720px + 422px); top: 104px; }
    .hero-line-3 { left: calc(50% - 720px + 499px); top: 104px; }
    .hero-line-4 { left: calc(50% - 720px + 576px); top: 104px; }
    .hero-line-5 { left: calc(50% - 720px + 653px); top: 104px; }
    .hero-line-6 { left: calc(50% - 720px + 730px); top: 104px; }

    .hero-section {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        padding: 40px 55px !important;
        display: block;
        position: relative;
        z-index: 2;
        box-sizing: border-box;
    }

    .hero-content {
        max-width: 560px;
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
        font-size: 50px;
        line-height: 1.2;
        letter-spacing: 0%;
        color: #000;
        margin-bottom: 14px;
        overflow-wrap: break-word;
        max-width: 480px;
        text-transform: capitalize;
    }

    .hero-title .highlight {
        color: #D4A872;
    }

    .hero-description {
        text-align: justify;
        font-family: 'DM Sans', sans-serif;
        font-size: 16px;
        line-height: 1.6;
        color: #000;
        max-width: 510px;
        margin-bottom: 32px;
        font-weight: 300;
    }

    .hero-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 236px;
        height: 56px;
        box-sizing: border-box;
        background: var(--secondary-color);
        font-family: 'DM Sans', sans-serif;
        color: var(--primary-color);
        box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        font-weight: 700;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s, transform 0.2s;
    }

    .hero-btn:hover {
        background: var(--primary-color); color: #fff;
        transform: translateY(-2px);
    }

    .hero-image-wrapper {
        position: absolute;
        right: 55px;
        top: 0;
        bottom: 0;
        width: 456px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        z-index: 3;
    }

    .hero-image-wrapper img {
        width: 100%;
        max-width: 456px;
        height: auto;
        max-height: 100%;
        border-radius: 16px;
        box-shadow: none;
        background-color: transparent;
        object-fit: contain;
        object-position: center;
    }

    @media (max-width: 1500px) and (min-width: 993px) {
        .hero-section {
            grid-template-columns: minmax(0, 1fr) minmax(320px, 38%);
            gap: 32px;
        }
        .hero-image-wrapper img {
            max-width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
        }
    }

    @media (max-width: 992px) {
        .hero-line {
            display: none;
        }

        .hero-section {
            flex-direction: column-reverse;
            display: flex;
            padding: 30px 55px 24px;
            text-align: center;
            gap: 20px;
        }

        .hero-content {
            max-width: 94%;
            padding-top: 0;
            padding-bottom: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hero-title {
            font-size: 28px;
            line-height: 1.3;
            text-align: center;
        }

        .hero-description {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
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
            max-width: 303px;
            max-height: 298px;
            aspect-ratio: auto;
        }

        .hero-btn-outline {
            display: none !important;
        }
    }

    @media (max-width: 576px) {

        .hero-section {
            padding: 24px 16px 16px !important;
            text-align: center;
        }

        .hero-title {
            font-size: 28px !important;
            line-height: 1.3;
            word-wrap: break-word;
            text-wrap: balance;
            max-width: 336px;
            margin-left: auto;
            margin-right: auto;
            text-transform: capitalize;
        }

        .hero-title br {
            display: none;
        }



    }

    @media (min-width: 577px) and (max-width: 768px) {
        .hero-section {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    .hero-glow-circle {
        position: absolute;
        width: 182px;
        height: 182px;
        left: 0;
        top: 50%;
        transform: translate(-50%, -50%);
        background: #FFE0A2;
        filter: blur(45px);
        border-radius: 50%;
        pointer-events: none;
        z-index: -1;
    }

    .hero-glow-circle-right {
        position: absolute;
        width: 257px;
        height: 257px;
        right: 0;
        top: 0;
        transform: translate(30%, -20%);
        background: #FFE0A2;
        filter: blur(60px);
        border-radius: 50%;
        pointer-events: none;
        z-index: -1;
    }
</style>

<!-- Hero Banner with gradient -->
<div class="category-hero-wrapper">
    <div class="hero-pattern"></div>


    <section class="hero-section">

        <div class="hero-content">
            @if(!request()->is('/'))
            <style>
                .hero-breadcrumb {
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    text-align: left;
                    margin-bottom: 14px;
                    font-family: 'DM Sans', sans-serif;
                    font-size: 15px;
                    text-transform: capitalize;
                    color: #555;
                }
                .hero-breadcrumb a {
                    color: inherit;
                    text-decoration: none;
                }
                .hero-breadcrumb a:hover {
                    color: var(--primary-color);
                    text-decoration: none;
                }
                @media (max-width: 768px) {
                    .hero-breadcrumb {
                        display: none !important;
                    }
                }
            </style>
            <div class="hero-breadcrumb">
                <a href="/"><i class="fa-solid fa-house" style="font-size: 13px;"></i> Home</a> <span style="margin: 0 4px;">&gt;</span> <strong>{{ !empty($settings['title']) ? strtolower($settings['title']) : (!empty($category['title']) ? strtolower($category['title']) : 'category') }}</strong>
            </div>
            @endif
            <h1 class="hero-title">
                {!! !empty($settings['hero_title']) ? $settings['hero_title'] : 'Custom Packaging<br>For The Food &<br>Beverage Industry' !!}
            </h1>

            <p class="hero-description">
                {{ !empty($settings['hero_description']) ? $settings['hero_description'] : 'We believe your home should feel like a gentle exhale. Every piece we curate carries the quiet confidence of timeless design — rooted in earthy tones, honest materials, and a deep respect for slow living.' }}
            </p>

            <div class="hero-buttons" style="position: relative; display: flex; gap: 16px; align-items: center;">
                <div class="hero-glow-circle"></div>
                <a href="/request-quote/" class="hero-btn" style="display: inline-flex; align-items: center;">Get Instant Quote <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 6px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                <a href="/shop/" class="hero-btn-outline" style="display: inline-flex; align-items: center; justify-content: center; width: 195px; height: 56px; box-sizing: border-box; font-family: 'DM Sans', sans-serif; font-size: 16px; font-weight: 700; color: var(--primary-color); border: 2px solid var(--primary-color); border-radius: 4px; text-decoration: none; transition: 0.3s;">Shop Now</a>
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









