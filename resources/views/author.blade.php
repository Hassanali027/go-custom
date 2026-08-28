<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('uploads/favicon-rigid-boxes.webp') }}" type="image/webp">
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
            width: 100%;
            background-color: var(--color-content-bg);
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            display: block;
        }

        .blog-card:hover {
            transform: translateY(-0.25rem);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.15);
        }

        .card-image-wrapper {
            width: 100%;
            height: 14.5625rem;
            overflow: hidden;
            background-color: #F5F5F5;
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .blog-card:hover .card-image {
            transform: scale(1.05);
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.875rem;
            color: var(--color-text-secondary);
        }

        .card-author {
            color: var(--color-text-secondary);
        }

        .card-date {
            color: var(--color-text-secondary);
        }

        .card-heading {
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-style: bold;
            font-size: 1.25rem;
            line-height: 1.625rem;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: var(--color-text-primary);
            margin-bottom: 0.75rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            transition: color 0.2s ease;
        }

        .blog-card:hover .card-heading,
        .card-heading:hover,
        .card-heading a:hover {
            color: #8d4445 !important;
        }
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-heading a {
            outline: none;
            font-weight: 500;
        }

        .card-heading a:focus, .card-heading a:active {
            outline: none;
            box-shadow: none;
        }

        .card-description {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-style: regular;
            font-size: 1rem;
            line-height: 1.375rem;
            letter-spacing: 0%;
            text-align: justify;
            color: var(--color-text-secondary);
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
            color: var(--primary-color);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.875rem;
            font-weight: 600;
            text-decoration: none;
            transition: gap 0.3s ease;
            outline: none;
        }
        
        .read-more:focus, .read-more:active {
            outline: none;
            box-shadow: none;
        }

        .blog-card:hover .read-more {
            gap: 0.75rem;
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

            .card-content {
                padding: 1.25rem;
            }

            .card-heading {
                font-size: 1.125rem;
                line-height: 1.5rem;
                font-weight: 500;
            }

            .card-description {
                font-size: 1.0625rem;
                line-height: 1.4375rem;
                font-weight: bold;
                color: black;
            }

            .card-image-wrapper {
                height: 13.75rem;
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

            .card-image-wrapper {
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
                            <a href="{{ $author['linkedin'] }}" class="social-link" aria-label="LinkedIn Profile" target="_blank">
                                <svg class="author-social-icon" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                                LinkedIn
                            </a>
                            @endif
                            @if(!empty($author['twitter']))
                            <a href="{{ $author['twitter'] }}" class="social-link" aria-label="Twitter Profile" target="_blank">
                                <i class="fa-brands fa-twitter author-social-icon"></i>
                                Twitter
                            </a>
                            @endif
                            @if(!empty($author['facebook']))
                            <a href="{{ $author['facebook'] }}" class="social-link" aria-label="Facebook Profile" target="_blank">
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
                        <article class="blog-card" onclick="window.location.href='{{ url('/blog/' . $item['slug']) }}';" style="cursor: pointer;">
                            <div class="card-image-wrapper">
                                @php $blogImg = !empty($item['image']) ? (\Illuminate\Support\Str::startsWith($item['image'], ['http', 'storage/', 'uploads/', 'images/']) ? asset($item['image']) : asset('storage/'.$item['image'])) : asset('images/below-hero.png'); @endphp
                                <img src="{{ $blogImg }}" alt="{{ $item['title'] }}" class="card-image" onerror="this.src='{{ asset('images/below-hero.png') }}'" loading="lazy">
                            </div>
                            <div class="card-content">
                                <h3 class="card-heading"><a href="{{ url('/blog/' . $item['slug']) }}" style="color:inherit; text-decoration:none;" onclick="event.stopPropagation();">{{ $item['title'] }}</a></h3>
                                <p class="card-description">{{ Str::limit(html_entity_decode(html_entity_decode(strip_tags($item['excerpt'] ?: $item['content']))), 120) }}</p>
                                <a href="{{ url('/blog/' . $item['slug']) }}" class="read-more" onclick="event.stopPropagation();">
                                    Read Blog 
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 8h10M9 4l4 4-4 4"/>
                                    </svg>
                                </a>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    <div class="load-more-container" style="width: 100%; display: flex; justify-content: center; margin-top: 2.5rem;">
                        <button class="btn-load-more" style="width: 12.625rem; height: 3.375rem; background-color: #FFB400; color: #000; font-family: 'Open Sans', sans-serif; font-size: 1rem; font-weight: 600; border: none; border-radius: 0.25rem; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s, box-shadow 0.3s; box-shadow: 0 0.25rem 0.625rem rgba(0, 0, 0, 0.15);">
                            Load more
                        </button>
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
