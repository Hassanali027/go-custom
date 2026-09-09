<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('uploads/go-custom-boxes-favicon.png') }}" type="image/png">
    @include('components.canonical')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author - {{ $author['title'] }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <style>
        /* ==========================================================================
           AUTHOR PAGE - RESPONSIVE DESIGN SYSTEM
           ========================================================================== */

        /* CSS Reset & Base */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        *:focus, *:active {
            outline: none !important;
            box-shadow: none !important;
            -webkit-tap-highlight-color: transparent;
        }

        /* ==========================================================================
           COLOR & SPACING SYSTEM
           ========================================================================== */

        :root {
            /* Colors */
            --color-hero-bg: #F8EEEC;
            --color-content-bg: #FFFFFF;
            --color-text-primary: #000000;
            --color-text-secondary: #666666;
            --color-border: #E5E5E5;
            --color-link: #8D4445;
            --color-link-hover: #5F2D2F;

            /* Spacing */
            --container-max-width: 77.5rem;
            --container-padding: 1.25rem;
            --section-spacing: 4rem;
            --card-gap: 1.875rem;
        }

        /* ==========================================================================
           TYPOGRAPHY
           ========================================================================== */

        body {
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background-color: var(--color-content-bg);
            color: var(--color-text-primary);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            overflow-x: clip;
        }

        /* ==========================================================================
           LAYOUT CONTAINER
           ========================================================================== */

        .container {
            width: 100%;
            max-width: 80rem;
            margin: 0 auto;
            padding-left: 3.4375rem;
            padding-right: 3.4375rem;
            box-sizing: border-box;
        }

        @media (max-width: 68.75rem) {
            .container {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        @media (max-width: 48rem) {
            .container {
                padding-left: 1.25rem;
                padding-right: 1.25rem;
            }
        }

        @media (max-width: 37.5rem) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        /* ==========================================================================
           BREADCRUMB
           ========================================================================== */

        .breadcrumb {
            padding: 2.5rem 0 0;
            margin-bottom: 1.25rem;
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            font-weight: 500;
            color: var(--color-text-primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .breadcrumb a {
            color: #000;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb a:hover {
            color: var(--color-link);
        }

        .breadcrumb span {
            /* reset margin since gap is used */
        }

        .breadcrumb span[aria-current="page"] {
            color: var(--color-text-primary);
            font-weight: 700;
        }

        /* ==========================================================================
           HERO SECTION
           ========================================================================== */

        .hero-section {
            background-color: var(--color-hero-bg);
            min-height: 26.3125rem;
            display: flex;
            flex-direction: column;
            padding: 0 0 3.75rem 0;
            border-radius: 0 0 2.5rem 2.5rem;
        }

        .hero-content {
            display: flex;
            align-items: flex-start;
            gap: 3.75rem;
            width: 100%;
        }

        .author-image-wrapper {
            flex-shrink: 0;
        }

        .author-image {
            width: 23.9375rem;
            height: auto;
            display: block;
        }

        .author-info {
            flex: 1;
            max-width: 100%;
            padding-top: 4.6875rem;
        }

        .author-name {
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-style: bold;
            font-size: 3.375rem;
            line-height: 4.8656rem;
            letter-spacing: -0.0469rem;
            color: var(--color-text-primary);
            margin-bottom: 0.75rem;
        }

        .author-title {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.5rem;
            color: var(--color-link);
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }

        .author-bio {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.125rem;
            line-height: 1.75rem;
            letter-spacing: 0%;
            text-align: justify;
            color: var(--color-text-primary);
            margin-bottom: 1.5rem;
        }

        .author-social {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--color-link);
            text-decoration: none;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .social-link:hover {
            color: var(--color-link-hover);
        }

        .author-social-icon {
            width: 1.25rem;
            height: 1.25rem;
            font-size: 1.25rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        /* ==========================================================================
           BLOG POSTS SECTION
           ========================================================================== */

        .blog-section {
            padding: 2rem 0 var(--section-spacing) 0;
            background-color: var(--color-content-bg);
        }

        .section-title {
            position: relative;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 2.25rem;
            line-height: 3rem;
            color: var(--color-text-primary);
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
        }



        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: var(--card-gap);
        }

        /* ==========================================================================
           BLOG CARD
           ========================================================================== */

        .blog-card {
            background: #fff;
            border: 1px solid #EAEAEA;
            border-radius: 1rem;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: box-shadow 0.3s, transform 0.3s;
            position: relative;
            -webkit-tap-highlight-color: transparent;
            min-height: 27.125rem;
            box-shadow: 0 0.25rem 0.9375rem rgba(0,0,0,0.03);
            cursor: pointer;
        }

        .blog-card:hover {
            box-shadow: 0 0.625rem 1.5625rem rgba(0,0,0,0.08);
            transform: translateY(-0.25rem);
        }

        .blog-card__image {
            width: calc(100% - 1.75rem);
            height: auto;
            aspect-ratio: 2 / 1;
            object-fit: contain;
            background: transparent;
            border-radius: 0.75rem;
            margin: 0.875rem auto 0;
            display: block;
        }

        .blog-card__content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .blog-card__meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8125rem;
            color: #666;
            margin-bottom: 0.875rem;
        }

        .blog-card__title {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: #111;
            line-height: 1.3;
            margin-bottom: 0.75rem;
            text-decoration: none;
            transition: color 0.3s;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .blog-card__title::after {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 1;
            -webkit-tap-highlight-color: transparent;
            height: 100%;
        }

        .blog-card a {
            -webkit-tap-highlight-color: transparent;
            height: auto;
        }

        .blog-card:hover .blog-card__title {
            color: var(--primary-color, #8D4445);
        }

        .blog-card__desc {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 0.875rem;
            color: #000;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            flex: 0 0 auto;
            min-height: 2.8rem;
        }

        .blog-card__desc + div {
            margin-top: auto;
        }

        .blog-card__author {
            color: var(--section-text-color, #111);
            font-weight: 500;
        }

        .blog-card__date {
            color: var(--section-text-color, #111);
        }

        .blog-card__readmore {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            font-size: 0.9375rem;
            font-weight: 700;
            color: var(--primary-color, #8D4445);
            text-decoration: none;
            transition: color 0.3s;
            position: relative;
            z-index: 2;
        }

        .blog-card:hover .blog-card__readmore {
            color: var(--primary-color, #8D4445);
        }

        /* ==========================================================================
           RESPONSIVE DESIGN - ZOOM LEVELS (100%, 110%, 125%, 150%)
           ========================================================================== */

        /* Base: 100% zoom - 90rem container */
        @media screen and (max-width: 100rem) {
        }

        /* Adapt for 110% zoom (effectively 81.8125rem viewport) */
        @media screen and (max-width: 90rem) {

            .author-name {
                font-size: 3rem;
                line-height: 4.25rem;
            }
        }

        /* Adapt for 125% zoom (effectively 72rem viewport) */
        @media screen and (max-width: 80rem) {
            :root {
                --card-gap: 1.5rem;
            }

            .hero-content {
                gap: 0.375rem;
            }

            .author-image {
                width: 13.75rem;
                height: 13.75rem;
            }

            .author-name {
                font-size: 2.75rem;
                line-height: 3.75rem;
            }

            .author-bio {
                font-size: 1.0625rem;
                line-height: 1.625rem;
            }
        }

        /* Large Tablets - 3 column to 2 column */
        @media screen and (max-width: 64rem) {
            :root {
                --card-gap: 1.25rem;
            }

            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-content {
                gap: 2.5rem;
            }

            .author-image {
                width: 12.5rem;
                height: 12.5rem;
            }

            .author-name {
                font-size: 2.5rem;
                line-height: 3.375rem;
            }

            .author-bio {
                font-size: 1rem;
                line-height: 1.5rem;
            }

            .blog-card {
                max-width: 100%;
            }
        }

        /* Adapt for 150% zoom (effectively 60rem viewport) */
        @media screen and (max-width: 60rem) {

            .hero-section {
                min-height: auto;
                padding: 3rem 0;
                border-radius: 0;
            }

            .hero-content {
                flex-direction: column;
                align-items: center;
                gap: 2rem;
            }

            .author-image {
                width: 16.6875rem;
                height: auto;
            }

            .author-info {
                max-width: 100%;
                padding-top: 0;
            }

            .author-name {
                font-size: 2.25rem;
                line-height: 3rem;
                text-align: left;
            }
            
            .author-title {
                text-align: left;
            }

            .author-bio {
                text-align: justify;
            }

            .author-social {
                justify-content: flex-start;
            }
        }

        /* Tablets Portrait */
        @media screen and (max-width: 48rem) {
            :root {
                --container-padding: 1.5rem;
                --section-spacing: 3rem;
                --card-gap: 1rem;
            }

            .breadcrumb {
                display: none;
            }

            .hide-on-mobile {
                display: none !important;
            }

            .blog-grid {
                grid-template-columns: 1fr;
                max-width: 31.25rem;
                margin: 0 auto;
            }

            .author-name {
                font-size: 2rem;
                line-height: 2.75rem;
            }

            .author-bio {
                font-size: 0.9375rem;
                line-height: 1.375rem;
            }

            .section-title {
                font-size: 1.75rem;
                line-height: 2.375rem;
                margin-bottom: 2rem;
            }

            .blog-card {
                max-width: 100%;
            }

            .card-image-wrapper {
                height: 16.25rem;
            }
        }

        /* Mobile Landscape */
        @media screen and (max-width: 40rem) {
            :root {
                --container-padding: 1.25rem;
            }

            .author-name {
                font-size: 1.75rem;
                line-height: 2.375rem;
                letter-spacing: -0.0312rem;
            }

            .hero-section {
                padding: 2.5rem 0;
            }
        }

        /* Mobile Portrait */
        @media screen and (max-width: 30rem) {
            :root {
                --container-padding: 1rem;
                --section-spacing: 2rem;
            }

            .breadcrumb {
                font-size: 0.75rem;
                padding: 1rem 0;
            }

            .hero-content {
                gap: 1.5rem;
            }

            .author-name {
                font-size: 1.5rem;
                line-height: 2rem;
                margin-bottom: 0.5rem;
                text-align:center;
            }

            .author-title {
                font-size: 0.875rem;
                line-height: 1.25rem;
                margin-bottom: 1rem;
            }

            .author-bio {
                font-size: 0.875rem;
                line-height: 1.25rem;
                margin-bottom: 1rem;
                color:black;
            }

            .section-title {
                font-size: 1.5rem;
                line-height: 2rem;
                margin-bottom: 1.5rem;
            }

            .blog-card__content {
                padding: 1.125rem 1rem 1.25rem;
            }

            .blog-card__title {
                font-size: 1.125rem;
            }

            .blog-card__desc {
                font-size: 0.8438rem;
                margin-bottom: 1.125rem;
            }

            .blog-card__image {
                height: 13.125rem;
            }
        }

        /* Extra Small Mobile */
        @media screen and (max-width: 22.5rem) {
            :root {
                --container-padding: 0.75rem;
            }

            .author-name {
                font-size: 1.375rem;
                line-height: 1.875rem;
            }

            .blog-card__image {
                height: 12.5rem;
            }
        }

        /* ==========================================================================
           ACCESSIBILITY & PERFORMANCE
           ========================================================================== */

        /* Focus States */
        a:focus,
        button:focus {
            outline: 0.125rem solid var(--color-link);
            outline-offset: 0.125rem;
        }

        /* Reduced Motion */
        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* High Contrast Mode */
        @media (prefers-contrast: high) {
            :root {
                --color-border: #000000;
            }

            .blog-card {
                border: 0.125rem solid currentColor;
            }
        }

        /* Print Styles */
        @media print {

            .breadcrumb,
            .author-social,
            .read-more {
                display: none;
            }

            .blog-card {
                break-inside: avoid;
                box-shadow: none;
                border: 1px solid #000;
            }
        }
    </style>
</head>

<body>
    <!-- Header Component -->
    <x-header />

    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <!-- Breadcrumb -->
                <nav class="breadcrumb" aria-label="Breadcrumb" style="text-transform: capitalize; letter-spacing: normal;">
                    <a href="/" style="display: flex; align-items: center; gap: 6px;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="width: 16px; height: 16px;">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        Home
                    </a>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 16px; height: 16px;">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                    <span aria-current="page" style="color: #000;">About Us</span>
                </nav>

                <div class="hero-content">
                    <div class="author-image-wrapper">
                        @if(!empty($author['image']))
                            @php $img = \Illuminate\Support\Str::startsWith($author['image'], ['http', 'storage/', 'uploads/', 'images/']) ? asset($author['image']) : asset('storage/'.$author['image']); @endphp
                            <svg class="author-image" viewBox="0 0 310 310" preserveAspectRatio="xMidYMid meet" style="overflow: visible;">
                                <defs>
                                    <clipPath id="hex-clip">
                                        <path d="M 129 32.12 A 42 42 0 0 1 171 32.12 L 241.58 72.88 A 42 42 0 0 1 262.58 109.25 L 262.58 190.75 A 42 42 0 0 1 241.58 227.12 L 171 267.88 A 42 42 0 0 1 129 267.88 L 58.42 227.12 A 42 42 0 0 1 37.42 190.75 L 37.42 109.25 A 42 42 0 0 1 58.42 72.88 Z" />
                                    </clipPath>
                                </defs>
                                
                                <!-- Yellow Shadow -->
                                <path d="M 129 32.12 A 42 42 0 0 1 171 32.12 L 241.58 72.88 A 42 42 0 0 1 262.58 109.25 L 262.58 190.75 A 42 42 0 0 1 241.58 227.12 L 171 267.88 A 42 42 0 0 1 129 267.88 L 58.42 227.12 A 42 42 0 0 1 37.42 190.75 L 37.42 109.25 A 42 42 0 0 1 58.42 72.88 Z" fill="#FFB400" transform="translate(0, 16)" stroke="#FFB400" stroke-width="8" stroke-linejoin="round" />
                                
                                <!-- Image -->
                                <image href="{{ $img }}" x="37" y="32" width="226" height="250" clip-path="url(#hex-clip)" preserveAspectRatio="xMidYMin slice" />
                                
                                <!-- Dark Blue Border -->
                                <path d="M 129 32.12 A 42 42 0 0 1 171 32.12 L 241.58 72.88 A 42 42 0 0 1 262.58 109.25 L 262.58 190.75 A 42 42 0 0 1 241.58 227.12 L 171 267.88 A 42 42 0 0 1 129 267.88 L 58.42 227.12 A 42 42 0 0 1 37.42 190.75 L 37.42 109.25 A 42 42 0 0 1 58.42 72.88 Z" fill="none" stroke="#0F203C" stroke-width="8" stroke-linejoin="round" />
                            </svg>
                        @endif
                    </div>
                    <div class="author-info">
                        <h1 class="author-name">{{ $author['title'] }}</h1>
                        <p class="author-bio">
                            {{ $author['description'] }}
                        </p>
                        <div class="author-social">
                            @if(!empty($author['linkedin']))
                            <a href="{{ $author['linkedin'] }}" class="social-link" aria-label="LinkedIn Profile" target="_blank" rel="noopener noreferrer">
                                <svg class="author-social-icon" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                                LinkedIn
                            </a>
                            @endif
                            @if(!empty($author['twitter']))
                            <a href="{{ $author['twitter'] }}" class="social-link" aria-label="Twitter Profile" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-twitter author-social-icon"></i>
                                Twitter
                            </a>
                            @endif
                            @if(!empty($author['facebook']))
                            <a href="{{ $author['facebook'] }}" class="social-link" aria-label="Facebook Profile" target="_blank" rel="noopener noreferrer">
                                <i class="fa-brands fa-facebook author-social-icon"></i>
                                Facebook
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Posts Section -->
        <section class="blog-section">
            <div class="container">
                <h2 class="section-title">Blog Posts By This Author</h2>
                @if(isset($blogs) && count($blogs) > 0)
                    <div class="blog-grid">
                        @foreach($blogs as $item)
                        @php
                            $bDate = !empty($item['publish_date']) ? date('M d, Y', strtotime($item['publish_date'])) : (!empty($item['created_at']) ? date('M d, Y', strtotime($item['created_at'])) : 'Nov 15, 2024');
                            $bExcerpt = !empty(trim((string) ($item['excerpt'] ?? ''))) ? $item['excerpt'] : (!empty(trim((string) ($item['content'] ?? ''))) ? $item['content'] : '');
                            $bUrl = url('/blog/' . $item['slug']) . '/';
                            $blogImg = !empty($item['image']) ? (\Illuminate\Support\Str::startsWith($item['image'], ['http', 'storage/', 'uploads/', 'images/']) ? asset($item['image']) : asset('storage/'.$item['image'])) : asset('images/below-hero.png');
                        @endphp
                        <article class="blog-card" onclick="window.location.href='{{ $bUrl }}';" style="cursor: pointer;">
                            <img src="{{ $blogImg }}" alt="{{ $item['title'] }}" class="blog-card__image" onerror="this.src='{{ asset('images/below-hero.png') }}'" loading="lazy">
                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <a href="{{ url('/author/' . $author['slug']) }}/" class="blog-card__author" style="color:inherit;text-decoration:none;z-index:2;position:relative;" onclick="event.stopPropagation();">{{ $author['title'] }}</a>
                                    <span class="blog-card__date">{{ $bDate }}</span>
                                </div>
                                <a href="{{ $bUrl }}" class="blog-card__title" onclick="event.stopPropagation();">{{ $item['title'] }}</a>
                                <p class="blog-card__desc">{{ Str::limit(html_entity_decode(html_entity_decode(strip_tags($bExcerpt))), 90) }}</p>
                                <div>
                                    <a href="{{ $bUrl }}" class="blog-card__readmore" onclick="event.stopPropagation();">
                                        Read Blog
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>

                @else
                    <p style="font-family: 'Open Sans', sans-serif; font-size: 1rem; color: #555;">No published blogs found for this author yet.</p>
                @endif
            </div>
        </section>

        <!-- CTA Section -->
        <div class="container" style="margin-top: 2.5rem; margin-bottom: 2.5rem;">
            <x-cta />
        </div>
                                                                                                                                            </main>

    <!-- Footer Component -->
    <x-footer />
</body>

</html>
