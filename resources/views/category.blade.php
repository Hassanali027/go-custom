@include('components.htmlboilerplate', [
    'title' => $category['meta_title'] ?? ($category['title'] ?? 'Custom Packaging'),
    'metaDescription' => $category['meta_description'] ?? '',
    'metaKeywords' => $category['meta_keywords'] ?? '',
    'robots' => $category['robots'] ?? 'index,follow',
    'schema' => $category['schema'] ?? '',
])

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    html,
    body {
        max-width: 100%;
    }

    /* Clothing Features Section */
    .clothing-features-section {
        background-color: #FDF7E5; 
        padding: 50px 0;
        font-family: 'DM Sans', sans-serif;
    }

    .clothing-features-inner {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 40px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .clothing-features-title {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
        font-size: 34px;
        font-weight: 700;
        color: #111;
        margin-bottom: 0;
        line-height: 1.3;
    }

    .mobile-br { display: none; }
    .desktop-br { display: block; }

    .clothing-feature-card {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
        gap: 40px;
        box-sizing: border-box;
    }

    .clothing-feature-card.reverse {
        flex-direction: row-reverse;
    }

    .clothing-feature-text {
        flex: 1 1 0;
        min-width: 0;
        max-width: 580px;
    }

    .clothing-feature-text h3 {
        font-family: 'Open Sans', sans-serif;
        font-size: 30px;
        font-weight: 700;
        color: #111;
        margin-bottom: 18px;
        line-height: 1.3;
    }

    .clothing-feature-text p {
        font-family: 'DM Sans', sans-serif;
        font-size: 16px;
        line-height: 1.7;
        color: black;
        margin: 0;
        text-align: justify;
    }

    .clothing-feature-image {
        flex: 1 1 0;
        min-width: 0;
        max-width: 400px;
        width: 100%;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        background-color: transparent;
    }

    .clothing-feature-image img {
        width: 100%;
        height: auto;
        aspect-ratio: 1 / 1;
        object-fit: cover;
        display: block;
        border-radius: 20px;
    }

    @media (max-width: 992px) {
        .clothing-features-section {
            padding: 40px 15px;
        }
        .clothing-features-inner {
            padding: 0 10px;
            gap: 40px;
        }
        .clothing-feature-card, .clothing-feature-card.reverse {
            flex-direction: column-reverse;
            gap: 30px;
        }
        .clothing-feature-text, .clothing-feature-image {
            max-width: 100%;
            width: 100%;
        }
        .clothing-feature-text {
            text-align: center;
        }
        .clothing-feature-text p {
            text-align: center;
        }
        .clothing-feature-image {
            max-width: 480px;
            margin: 0 auto;
        }
        .clothing-features-title {
            font-size: 24px;
            line-height: 1.4;
        }
        .mobile-br { display: block; }
        .desktop-br { display: none; }
    }

    /* Category Hero Section */
    .category-hero {
        background: linear-gradient(135deg, #FFF3DE 0%, #FDF7E5 50%, #FAF0CE 100%);
        padding: 60px 0 70px;
        position: relative;
        overflow: hidden;
    }

    .category-hero-inner {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 55px;
        box-sizing: border-box;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
    }

    .category-hero-content {
        flex: 1;
        max-width: 580px;
        position: relative;
        z-index: 2;
    }

    .category-breadcrumb {
        font-family: 'DM Sans', sans-serif;
        font-size: 13px;
        color: #555;
        margin-bottom: 24px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .category-breadcrumb a {
        color: inherit;
        text-decoration: none;
    }

    .category-hero-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 42px;
        font-weight: 800;
        line-height: 1.15;
        color: #111;
        margin-bottom: 16px;
    }

    .category-hero-desc {
        font-family: 'DM Sans', sans-serif;
        font-size: 15px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 32px;
    }

    .category-hero-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #FFB400;
        color: #111;
        font-family: 'DM Sans', sans-serif;
        font-size: 16px;
        font-weight: 700;
        padding: 14px 28px;
        border-radius: 4px;
        text-decoration: none;
        gap: 8px;
        transition: background 0.3s;
    }
    
    .category-hero-btn:hover {
        background: #e6a200;
    }

    .category-hero-image {
        flex: 1;
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: flex-end;
    }

    .category-hero-image img {
        max-width: 100%;
        height: auto;
        object-fit: contain;
    }

    /* Popular Boxes Section - Updated to Figma */
    .popular-boxes-section {
        background: #fff;
        padding-top: 20px;
        padding-bottom: 60px; /* Keep bottom padding */
    }

    .popular-boxes-inner {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 55px;
        box-sizing: border-box;
        text-align: center;
    }

    .section-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 8px;
        color: #111;
    }

    .section-subtitle {
        font-family: 'DM Sans', sans-serif;
        font-size: 15px;
        color: #444;
        margin-bottom: 40px;
    }

    .boxes-grid {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        justify-content: space-between;
    }

    .box-card {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: inherit;
    }

    .box-image-wrapper {
        width: 100%;
        aspect-ratio: 1;
        border-radius: 12px;
        overflow: hidden;
        background-color: #E8E8E8;
        margin-bottom: 16px;
        position: relative;
        transition: box-shadow 0.3s ease;
    }

    .box-image-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        object-position: center;
        transition: transform 0.4s ease;
    }

    .box-image-wrapper .hover-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    .box-card:hover .box-image-wrapper img:not(.hover-img) {
        transform: scale(1.05);
    }

    .box-card:hover .box-image-wrapper .hover-img {
        opacity: 1;
        transform: scale(1.05);
    }

    .box-card:hover .box-image-wrapper:has(.hover-img) .main-img {
        opacity: 0;
    }

    .box-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px !important;
        font-weight: 700;
        color: #111;
        text-align: center;
        display: block;
    }

    /* Mobile Responsive View */
    @media (max-width: 992px) {
        .category-hero-inner {
            flex-direction: column;
            text-align: center;
        }
        
        .category-hero-image {
            justify-content: center;
        }
        
        .category-breadcrumb {
            justify-content: center;
        }
        
        .boxes-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 768px) {
        .boxes-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }
    }

    @media (max-width: 576px) {
        .category-hero {
            padding: 40px 0 30px;
        }

        .category-hero-title {
            font-size: 28px;
        }
        
        .boxes-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 16px;
        }
        
        .popular-boxes-section {
            padding-top: 20px;
            padding-bottom: 40px;
        }
        
        .section-title {
            font-size: 28px;
            font-weight: 700;
        }
    }

    /* Customize Section */
    .customize-section {
        
        padding: 0px 0 54px;
        font-family: 'Open Sans', sans-serif;
    }

    .customize-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 55px;
        box-sizing: border-box;
    }

    /* Unified Container Responsive Padding */
    @media (max-width: 1100px) {

        .popular-boxes-inner,
        .customize-container {
            padding-left: 32px;
            padding-right: 32px;
        }
    }

    @media (max-width: 768px) {

        .popular-boxes-inner,
        .customize-container {
            padding-left: 20px;
            padding-right: 20px;
        }
    }

    @media (max-width: 576px) {

        .popular-boxes-inner,
        .customize-container {
            padding-left: 16px;
            padding-right: 16px;
        }
    }

    .customize-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 32px;
        font-weight: 800;
        color: var(--section-text-color);
        margin-bottom: 12px;
    }

    .customize-subtitle {
        font-family: 'Open Sans', sans-serif;
        font-size: 18px;
        color: var(--section-text-color);
        margin-bottom: 40px;
        line-height: 1.5;
    }

    .customize-layout {
        display: flex;
        flex-direction: column;
        gap: 38px;
    }

    .customize-sidebar {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 0;
        border-bottom: 1px solid #ccc; /* Bottom border for navbar */
        overflow-x: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
        padding-bottom: 0;
    }
    
    .customize-sidebar::-webkit-scrollbar {
        display: none;
    }

    .customize-tab {
        flex: 1;
        min-width: fit-content;
        padding: 12px 10px;
        text-align: center;
        background: transparent;
        border: none;
        border-bottom: 3px solid transparent;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        font-size: 13px;
        color: #111;
        cursor: pointer;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        margin-bottom: -1px; /* Overlap the container's bottom border */
    }

    .customize-tab.active,
    .customize-tab:hover,
    .customize-tab:focus-visible {
        color: #fff;
        background: #112a46; /* Matching the active tab from the Figma image */
        border-bottom: 3px solid #112a46;
    }
    
    .customize-tab:not(.active):hover {
        background: #f0f0f0;
        color: #111;
        border-bottom: 3px solid #f0f0f0;
    }

    .customize-content {
        width: 100%;
        overflow: hidden;
    }

    .customize-grid {
        display: flex;
        flex-direction: row;
        gap: 20px;
        width: max-content;
        animation: marqueeTrain 30s linear infinite;
        padding-bottom: 10px;
    }
    
    .customize-grid:hover {
        animation-play-state: paused;
    }

    @keyframes marqueeTrain {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-50% - 10px)); }
    }

    .custom-card {
        flex: 0 0 auto;
        width: 220px;
        background: #FFF;
        border-radius: 12px;
        padding: 12px;
        display: flex;
        flex-direction: column;
        transition: opacity 0.2s ease, transform 0.2s ease;
        text-align: center;
    }

    .custom-img-wrapper {
        width: 100%;
        aspect-ratio: 1;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 14px;
        background: #f7f7f7;
    }

    .custom-img-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .custom-card .h4-style {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: var(--section-text-color);
        margin: 0;
        padding: 0 0 2px;
        line-height: 1.3;
    }

    .custom-card .custom-card-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px !important;
        font-weight: 600;
        color: var(--section-text-color);
        margin: 0;
        padding: 0 0 2px;
        line-height: 1.3;
        display: block;
    }

    @media (max-width: 576px) {
        .customize-section {
            padding: 0px 0 36px;
        }

        .customize-title {
            font-size: 22px;
            line-height: 1.25;
            text-align: center;
            margin-bottom: 8px;
        }

        .customize-subtitle {
            font-size: 13px;
            line-height: 1.35;
            text-align: center;
            margin-bottom: 24px;
        }

        .customize-sidebar {
            display: flex !important;
            flex-direction: row !important;
            gap: 0px !important;
            padding-bottom: 0px !important;
            overflow-x: auto !important;
            scrollbar-width: none;
            -ms-overflow-style: none;
            border-bottom: 1px solid #ccc !important;
        }

        .customize-sidebar::-webkit-scrollbar {
            display: none;
        }

        .customize-tab {
            width: auto !important;
            flex: 0 0 auto !important;
            height: 44px !important;
            min-height: 0 !important;
            padding: 10px 16px !important;
            font-size: 14px !important;
            font-weight: 700;
            text-align: center;
            white-space: nowrap !important;
            border-radius: 4px 4px 0 0 !important;
            margin-bottom: -1px;
        }

        .customize-grid {
            display: flex !important;
            flex-direction: row !important;
            gap: 12px !important;
            overflow-x: auto !important;
            scrollbar-width: none;
            -ms-overflow-style: none;
            padding-bottom: 10px !important;
        }
        
        .customize-grid::-webkit-scrollbar {
            display: none;
        }

        .custom-card {
            flex: 0 0 200.01px !important;
            width: 200.01px !important;
            padding: 0px !important;
            border-radius: 0px !important;
            box-shadow: none !important;
            background: transparent !important;
            text-align: center !important;
        }

        .custom-img-wrapper {
            width: 100% !important;
            border-radius: 4.71px !important;
            margin-bottom: 10px !important;
            background: transparent !important;
            overflow: hidden;
        }

        .custom-card .h4-style {
            font-size: 13px;
            font-weight: 600;
            color: #111;
            text-align: center !important;
            padding-left: 0;
            line-height: 1.3;
        }

        .custom-card .custom-card-title {
            font-size: 14px !important;
            font-weight: 600;
            color: #111;
            text-align: center !important;
            line-height: 1.3;
            display: block;
        }
    }
</style>
</head>

<body>

    @include('components.header')

    <main>
        @include('components.herohome', ['settings' => $category ?? []])

        @include('components.logo')

        <!-- Popular Boxes Section -->
        <section class="popular-boxes-section">
            <div class="popular-boxes-inner">
                <h2 class="section-title">Packaging Made For Every Product</h2>
                <p class="section-subtitle">Custom packaging for every industry, from retail and beauty to electronics—designed to fit your style and requirements.</p>

                <div class="boxes-grid">
                    @php
                        $catProducts = !empty($products) ? (is_object($products) ? $products->toArray() : $products) : [];
                        if (count($catProducts) > 0 && count($catProducts) < 4) {
                            $first = $catProducts[0];
                            while(count($catProducts) < 4) {
                                $catProducts[] = $first;
                            }
                        } elseif (count($catProducts) == 0) {
                            for($i=0; $i<4; $i++) {
                                $catProducts[] = ['title' => 'bra boxes', 'slug' => 'bra-boxes'];
                            }
                        }
                    @endphp
                    @foreach ($catProducts as $p)
                        @php
                            $pImg = '';
                            $pGalleryRaw = [];
                            if (!empty($p['images'])) {
                                $pGalleryRaw = is_string($p['images'])
                                    ? (json_decode($p['images'], true) ?:
                                    [])
                                    : (array) $p['images'];
                            }
                            
                            if (!empty($p['image'])) {
                                $pImg = 'uploads/allcategory-cta.webp';
                            } else {
                                if (!empty($pGalleryRaw) && count($pGalleryRaw) > 0) {
                                    $pImg = 'uploads/allcategory-cta.webp';
                                } else {
                                    $pImg = 'uploads/allcategory-cta.webp';
                                }
                            }
                            
                            $pHoverImg = '';
                            if (!empty($p['hover_image'])) {
                                $pHoverImg = $p['hover_image'];
                            } elseif (count($pGalleryRaw) > 1) {
                                $pHoverImg = $pGalleryRaw[1];
                            } elseif (count($pGalleryRaw) > 0 && $pImg != $pGalleryRaw[0]) {
                                $pHoverImg = $pGalleryRaw[0];
                            } else {
                                $pHoverImg = $pImg;
                            }

                            $pImg = \Illuminate\Support\Str::startsWith($pImg, ['storage/', 'uploads/', 'images/'])
                                ? $pImg
                                : 'storage/' . $pImg;
                                
                            $pHoverImg = \Illuminate\Support\Str::startsWith($pHoverImg, ['storage/', 'uploads/', 'images/'])
                                ? $pHoverImg
                                : 'storage/' . $pHoverImg;

                            $pSlug = $p['slug'] ?? \Illuminate\Support\Str::slug($p['title']);
                        @endphp
                        <a href="{{ url('/' . $pSlug) }}/" class="box-card">
                            <div class="box-image-wrapper">
                                <img src="{{ asset($pImg) }}?v={{ @filemtime(public_path($pImg)) ?: 1 }}" alt="{{ $p['title'] }}" class="main-img"
                                    onerror="this.src='https://placehold.co/284x284/dddddd/555555?text={{ urlencode($p['title']) }}'" loading="lazy">
                                @if($pHoverImg && $pHoverImg !== $pImg)
                                <img src="{{ asset($pHoverImg) }}?v={{ @filemtime(public_path($pHoverImg)) ?: 1 }}" alt="{{ $p['title'] }} Hover" class="hover-img"
                                    onerror="this.src='https://placehold.co/284x284/dddddd/555555?text={{ urlencode($p['title']) }}'" loading="lazy">
                                @endif
                            </div>
                            <span class="box-title">{{ $p['title'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div><!-- end .popular-boxes-inner -->
        </section>

        @include('components.coating-finishing')
        
        @include('components.customquote')

        {{-- ═══════════════════════════════════════
             CLOTHING FEATURES SECTION (New from Figma)
        ═══════════════════════════════════════ --}}
        <section class="clothing-features-section">
            <div class="clothing-features-inner">
                <h2 class="clothing-features-title">One destination for building<br class="mobile-br"> your dream<br class="desktop-br"> clothing and<br class="mobile-br"> apparel packaging</h2>
                
                <!-- Card 1 -->
                <div class="clothing-feature-card">
                    <div class="clothing-feature-text">
                        <h3>Easily package your clothing line</h3>
                        <p>Packaging for entire clothing lines can be tough, especially when considering both retail and e-commerce platforms. Luckily, our multi-packaging capabilities help simplify this process by providing every packaging style you need to get you started.</p>
                    </div>
                    <div class="clothing-feature-image">
                        <img src="{{ asset('uploads/section1img.png') }}" alt="Easily package your clothing line">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="clothing-feature-card reverse">
                    <div class="clothing-feature-text">
                        <h3>Luxury clothing gift boxes</h3>
                        <p>Ensuring your packaging is a reflection of the quality of your clothing products is an integral component of making an impact in the apparel market. Choose from a hand curated library of premium packaging options built for you to achieve the look and feel of your brand.</p>
                    </div>
                    <div class="clothing-feature-image">
                        <img src="{{ asset('uploads/section2img.png') }}" alt="Luxury clothing gift boxes">
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="clothing-feature-card">
                    <div class="clothing-feature-text">
                        <h3>Eco-friendly clothing packaging</h3>
                        <p>Pair your sustainable fashion products with eco-friendly packaging for clothing to meet your brand's green goals! We carry a multitude of sustainable packaging styles to help further support industry leaders paving the way to a more sustainable world.</p>
                    </div>
                    <div class="clothing-feature-image">
                        <img src="{{ asset('uploads/section3img.png') }}" alt="Eco-friendly clothing packaging">
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="clothing-feature-card reverse">
                    <div class="clothing-feature-text">
                        <h3>Smart clothing shipping solutions</h3>
                        <p>Get all the shipping solutions you need to package your apparel efficiently. All our packaging is custom tailored and right sized to your specifications to ensure the most optimal size for shipping all your articles of clothing to keep your shipping costs low.</p>
                    </div>
                    <div class="clothing-feature-image">
                        <img src="{{ asset('uploads/section4img.png') }}" alt="Smart clothing shipping solutions">
                    </div>
                </div>
            </div>
        </section>

        {{-- ═══════════════════════════════════════
             TESTIMONIALS & FAQ SECTION
        ═══════════════════════════════════════ --}}
        @include('components.testimonials_faq')


        @include('components.cta')

    </main>

    @include('components.footer')

    <script>
        const customizeCardOrders = {
            coating: [0, 1, 2, 3, 4],
            special_finishes: [0, 1, 2, 3, 4, 5, 6],
            paperboard: [0, 1, 2, 3, 4, 5, 6, 7],
            corrugated: [7, 6, 5, 4, 3, 2, 1, 0],
            fluted_grades: [2, 3, 0, 1, 6, 7],
            rigid_materials: [0, 1, 2, 3, 4, 5, 6, 7],
            printing_options: [1, 0, 2, 3, 7, 5, 6, 4]
        };

        const customizeGrid = document.querySelector('.customize-grid');
        const originalCards = Array.from(customizeGrid.querySelectorAll('.custom-card'));
        const halfLength = originalCards.length;
        
        // Duplicate cards for infinite marquee
        originalCards.forEach(card => {
            let clone = card.cloneNode(true);
            clone.setAttribute('aria-hidden', 'true');
            customizeGrid.appendChild(clone);
        });
        
        const customizeCards = Array.from(document.querySelectorAll('.customize-grid .custom-card'));
        const customizeSidebar = document.querySelector('.customize-sidebar');
        const customizeUploadsUrl = "{{ asset('') }}";
        const customizeCardSets = {
            paperboard: [
                ['uploads/duplex-chipboard.webp', 'Duplex Chipboard'],
                ['uploads/grey-board.webp', 'Grey Chipboard Cardboard'],
                ['uploads/black-kraft.webp', 'Black-Kraft'],
                ['uploads/finish-material-holographic.webp', 'Holographic'],
                ['uploads/metallic-paper.webp', 'Metallic Paper'],
                ['uploads/natural-brown-.webp', 'Natural Brown Kraft'],
                ['uploads/sbs-c2s.webp', 'SBS C2S'],
                ['uploads/textured-.webp', 'Textured']
            ],
            printing_options: [
                ['uploads/Digital Print.webp', 'Digital Print'],
                ['uploads/Flexographic Printing.webp', 'Flexographic Printing'],
                ['uploads/gravure printing.webp', 'Gravure Printing'],
                ['uploads/Offset Print.webp', 'Offset Print'],
                ['uploads/Rotogravure Printing.webp', 'Rotogravure Printing'],
                ['uploads/Scodixe Digital.webp', 'Scodixe Digital'],
                ['uploads/Screen Printing.webp', 'Screen Printing'],
                ['uploads/UV Print.webp', 'UV Print']
            ],
            fluted_grades: [
                ['uploads/Fluorescent Color Inks.webp', 'Fluorescent Color Inks'],
                ['uploads/Oil Based Inks.webp', 'Oil Based Inks'],
                ['uploads/Pantone Metallic.webp', 'Pantone Metallic'],
                ['uploads/Pantone.webp', 'Pantone'],
                ['uploads/Soy Vegetable Based Inks.webp', 'Soy Vegetable Based Inks'],
                ['uploads/Water Based Inks.webp', 'Water Based Inks']
            ],
            coating: [
                ['uploads/Anti-scratch-Lamination-.webp', 'Anti-scratch Lamination'],
                ['uploads/Aqueous-Coating-.webp', 'Aqueous Coating'],
                ['uploads/Lamination.webp', 'Lamination'],
                ['uploads/Soft-Touch-Coating-.webp', 'Soft-Touch Coating'],
                ['uploads/Soft-Touch-Silk-Lamination-.webp', 'Soft-Touch Silk Lamination']
            ],
            corrugated: [
                ['uploads/corrugated-divider.webp', 'Corrugated Divider'],
                ['uploads/folding-divider.webp', 'Folding Divider'],
                ['uploads/hips-insert.webp', 'HIPS Insert'],
                ['uploads/kraft-corrugated.webp', 'Kraft Corrugated'],
                ['uploads/kraft-paperboard.webp', 'Kraft Paperboard'],
                ['uploads/petg-insert.webp', 'PETG Insert'],
                ['uploads/pvc-insert.webp', 'PVC Insert'],
                ['uploads/white-corrugated.webp', 'White Corrugated']
            ],
            special_finishes: [
                ['uploads/blind-deboss.webp', 'Blind Debossing'],
                ['uploads/blind-embossing.webp', 'Blind Embossing'],
                ['uploads/cold-foil.webp', 'Cold Foil Printing'],
                ['uploads/combo-emboss.webp', 'Combination Embossing'],
                ['uploads/hot-foil.webp', 'Hot Foil Stamping'],
                ['uploads/registered-emboss.webp', 'Registered Embossing'],
                ['uploads/window-patch.webp', 'Window Patching']
            ],
            rigid_materials: [
                ['uploads/duplex-chipboard.webp', 'Duplex Chipboard'],
                ['uploads/grey-board.webp', 'Grey Chipboard Cardboard'],
                ['uploads/black-kraft.webp', 'Black-Kraft'],
                ['uploads/finish-material-holographic.webp', 'Holographic'],
                ['uploads/metallic-paper.webp', 'Metallic Paper'],
                ['uploads/natural-brown-.webp', 'Natural Brown Kraft'],
                ['uploads/sbs-c2s.webp', 'SBS C2S'],
                ['uploads/textured-.webp', 'Textured']
            ]
        };

        // Preload all customization images in the background so tabs switch instantly
        window.addEventListener('load', function() {
            setTimeout(function() {
                for (let key in customizeCardSets) {
                    if (customizeCardSets.hasOwnProperty(key)) {
                        customizeCardSets[key].forEach(function(item) {
                            let img = new Image();
                            img.src = customizeUploadsUrl + item[0];
                        });
                    }
                }
            }, 500); // Start preloading half a second after page load
        });

        function setCustomizeCardOrder(option) {
            const cardSet = customizeCardSets[option] || customizeCardSets.materials;
            const cardOrder = customizeCardOrders[option] || customizeCardOrders.materials;

            customizeCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'scale(0.98)';
            });

            setTimeout(() => {
                customizeCards.forEach(card => card.style.display = 'none');

                try {
                    cardOrder.forEach(function(cardIndex, position) {
                        if (!cardSet[position]) return;
                        
                        const [imagePath, title] = cardSet[position];
                        
                        // Update Original Card
                        const card1 = customizeCards[cardIndex];
                        if(card1) {
                            const image1 = card1.querySelector('img');
                            if (image1) {
                                image1.src = customizeUploadsUrl + imagePath;
                                image1.alt = title;
                            }
                            const title1 = card1.querySelector('.custom-card-title');
                            if (title1) title1.textContent = title;
                            card1.style.order = position + 1;
                            card1.style.display = 'flex';
                        }

                        // Update Cloned Card
                        const card2 = customizeCards[cardIndex + halfLength];
                        if(card2) {
                            const image2 = card2.querySelector('img');
                            if (image2) {
                                image2.src = customizeUploadsUrl + imagePath;
                                image2.alt = title;
                            }
                            const title2 = card2.querySelector('.custom-card-title');
                            if (title2) title2.textContent = title;
                            card2.style.order = position + 1 + cardOrder.length;
                            card2.style.display = 'flex';
                        }
                    });
                } catch(e) {
                    console.error("Error setting custom cards", e);
                } finally {
                    requestAnimationFrame(() => {
                        customizeCards.forEach(card => {
                            if (card.style.display !== 'none') {
                                card.style.opacity = '1';
                                card.style.transform = 'scale(1)';
                            }
                        });
                    });
                }
            }, 200);
        }

        document.querySelectorAll('.customize-tab').forEach(function(tab) {
            tab.addEventListener('pointerdown', function(event) {
                event.stopPropagation();
            });
            tab.addEventListener('click', function() {
                document.querySelectorAll('.customize-tab').forEach(function(item) {
                    item.classList.remove('active');
                    item.setAttribute('aria-selected', 'false');
                });

                tab.classList.add('active');
                tab.setAttribute('aria-selected', 'true');
                setCustomizeCardOrder(tab.dataset.customizeTab);

                if (customizeSidebar) {
                    try {
                        tab.scrollIntoView({
                            behavior: 'smooth',
                            block: 'nearest',
                            inline: 'center'
                        });
                    } catch (e) {
                        tab.scrollIntoView(false);
                    }
                }
            });
        });

        setCustomizeCardOrder('coating');

        if (customizeSidebar) {
            let dragStartX = 0;
            let dragStartScrollLeft = 0;
            let isDraggingTabs = false;

            customizeSidebar.addEventListener('pointerdown', function(event) {
                dragStartX = event.clientX;
                dragStartScrollLeft = customizeSidebar.scrollLeft;
                isDraggingTabs = true;
                customizeSidebar.setPointerCapture(event.pointerId);
            });

            customizeSidebar.addEventListener('pointermove', function(event) {
                if (!isDraggingTabs) return;
                customizeSidebar.scrollLeft = dragStartScrollLeft - (event.clientX - dragStartX);
            });

            ['pointerup', 'pointercancel'].forEach(function(eventName) {
                customizeSidebar.addEventListener(eventName, function() {
                    isDraggingTabs = false;
                });
            });
        }

        function toggleFaq(btn) {
            const item = btn.closest('.faq-item');
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item.open').forEach(function(el) {
                el.classList.remove('open');
                el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });
            if (!isOpen) {
                item.classList.add('open');
                btn.setAttribute('aria-expanded', 'true');
            }
        }
    </script>

</body>

</html>
