@php
    $productPageOnly = $productPageOnly ?? false;

    $initialCoatingItems = [
        ['uploads/new-aqueous-coating.webp', 'Aqueous Coating'],
        ['uploads/new-gloss-finish.webp', 'Gloss Finish'],
        ['uploads/new-matte-finish.webp', 'Matte Finish'],
        ['uploads/new-soft-touch-coating.webp', 'Soft Touch Coating'],
        ['uploads/new-uv-coating.webp', 'UV Coating']
    ];
    $repeatCount = (int) ceil(10 / count($initialCoatingItems));
    $baseLoop = [];
    for ($i = 0; $i < $repeatCount; $i++) {
        foreach ($initialCoatingItems as $item) {
            $baseLoop[] = $item;
        }
    }
    $totalBase = count($baseLoop);
    $initialMarqueeCards = array_merge($baseLoop, $baseLoop);
@endphp

<!-- Preload coating images for instant rendering on iPhone and mobile view -->
<link rel="preload" as="image" href="{{ asset('uploads/new-aqueous-coating.webp') }}" type="image/webp">
<link rel="preload" as="image" href="{{ asset('uploads/new-gloss-finish.webp') }}" type="image/webp">
<link rel="preload" as="image" href="{{ asset('uploads/new-matte-finish.webp') }}" type="image/webp">
<link rel="preload" as="image" href="{{ asset('uploads/new-soft-touch-coating.webp') }}" type="image/webp">
<link rel="preload" as="image" href="{{ asset('uploads/new-uv-coating.webp') }}" type="image/webp">

<style>
    /* Customize Section */
    .customize-section {
        background: transparent;
        padding: 0 0 1.5rem;
        font-family: 'Open Sans', sans-serif;
        overflow: hidden;
        width: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .customize-container {
        max-width: 80rem;
        margin: 0 auto;
        padding: 0 3.4375rem;
        box-sizing: border-box;
    }

    /* Unified Container Responsive Padding */
    @media (max-width: 68.75rem) {
        .popular-boxes-inner,
        .customize-container {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }

    @media (max-width: 48rem) {
        .popular-boxes-inner,
        .customize-container {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }
    }

    @media (max-width: 36rem) {
        .popular-boxes-inner,
        .customize-container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }

    .customize-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 2rem;
        font-weight: 800;
        color: var(--section-text-color);
        margin-bottom: 0.75rem;
    }

    .customize-subtitle {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.125rem;
        color: var(--section-text-color);
        margin-bottom: 1.5rem;
        line-height: 1.5;
    }

    .customize-layout {
        display: flex;
        flex-direction: column;
        gap: 2.375rem;
    }

    .customize-sidebar {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 0;
        border-bottom: 1px solid #ccc;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        -ms-overflow-style: none;
        padding-bottom: 0;
        touch-action: pan-y pan-x;
        overscroll-behavior-x: contain;
        user-select: none;
        -webkit-user-select: none;
    }

    .customize-sidebar::-webkit-scrollbar {
        display: none;
    }

    .customize-tab {
        flex: 1;
        min-width: fit-content;
        padding: 0.75rem 0.625rem;
        text-align: center;
        background: transparent;
        border: none;
        border-bottom: 0.1875rem solid transparent;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        font-size: 0.8125rem;
        color: #111;
        cursor: pointer;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        margin-bottom: -1px;
        -webkit-tap-highlight-color: transparent;
    }

    .customize-tab.active,
    .customize-tab:hover,
    .customize-tab:focus-visible {
        color: #fff;
        background: #112a46;
        border-bottom: 0.1875rem solid #112a46;
    }

    .customize-tab:not(.active):hover {
        background: #f0f0f0;
        color: #111;
        border-bottom: 0.1875rem solid #f0f0f0;
    }

    .customize-content {
        width: 100%;
        overflow: hidden;
        position: relative;
        -webkit-mask-image: -webkit-radial-gradient(white, black);
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
    }

    .customize-grid {
        display: flex;
        flex-direction: row;
        gap: 1.25rem;
        width: max-content;
        animation: marqueeTrain 20s linear infinite;
        padding-bottom: 0.625rem;
        will-change: transform;
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000;
        perspective: 1000;
    }

    @media (hover: hover) and (pointer: fine) {
        .customize-grid:hover {
            animation-play-state: paused;
        }
    }

    @keyframes marqueeTrain {
        0% {
            transform: translate3d(0, 0, 0);
            -webkit-transform: translate3d(0, 0, 0);
        }

        100% {
            transform: translate3d(calc(-50% - 0.625rem), 0, 0);
            -webkit-transform: translate3d(calc(-50% - 0.625rem), 0, 0);
        }
    }

    .custom-card {
        flex: 0 0 auto;
        width: 13.75rem;
        background: transparent;
        border-radius: 0.75rem;
        padding: 0;
        display: flex;
        flex-direction: column;
        transition: opacity 0.2s ease;
        text-align: center;
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
    }

    .custom-img-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 1;
        border-radius: 0.5rem;
        overflow: hidden;
        margin-bottom: 0.875rem;
        background: #f7f7f7;
        isolation: isolate;
        -webkit-mask-image: -webkit-radial-gradient(white, black);
        mask-image: radial-gradient(white, black);
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
    }

    .custom-img-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
        border-radius: 0.5rem;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
        image-rendering: -webkit-optimize-contrast;
    }

    .custom-card .h4-style {
        font-family: 'Open Sans', sans-serif;
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--section-text-color);
        margin: 0;
        padding: 0 0 0.125rem;
        line-height: 1.3;
    }

    .custom-card .custom-card-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 0.875rem !important;
        font-weight: 600;
        color: var(--section-text-color);
        margin: 0;
        padding: 0 0 0.125rem;
        line-height: 1.3;
        display: block;
    }

    @media (max-width: 36rem) {
        .customize-section {
            background: #ffffff;
            padding: 1.875rem 0 2.25rem;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .customize-title {
            font-size: 1.375rem;
            line-height: 1.25;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .customize-subtitle {
            font-size: 0.8125rem;
            line-height: 1.35;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .customize-sidebar {
            display: flex !important;
            flex-direction: row !important;
            gap: 0 !important;
            padding-bottom: 0 !important;
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch !important;
            scrollbar-width: none;
            -ms-overflow-style: none;
            border-bottom: 1px solid #ccc !important;
            touch-action: pan-y pan-x !important;
            overscroll-behavior-x: contain !important;
            user-select: none !important;
            -webkit-user-select: none !important;
        }

        .customize-sidebar::-webkit-scrollbar {
            display: none;
        }

        .customize-tab {
            width: auto !important;
            flex: 0 0 auto !important;
            height: 2.75rem !important;
            min-height: 0 !important;
            padding: 0.625rem 1.25rem !important;
            font-size: 0.8125rem !important;
            font-weight: 700;
            text-align: center;
            white-space: nowrap !important;
            border-radius: 0 !important;
            margin-bottom: -1px;
            -webkit-tap-highlight-color: transparent;
        }

        .customize-content {
            -webkit-mask-image: -webkit-radial-gradient(white, black);
            transform: translateZ(0);
            -webkit-transform: translateZ(0);
        }

        .customize-grid {
            display: flex !important;
            flex-direction: row !important;
            gap: 0.75rem !important;
            width: max-content !important;
            padding-bottom: 0.625rem !important;
            animation: marqueeTrainMobile 22s linear infinite;
            will-change: transform;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .customize-grid:hover {
            animation-play-state: running !important;
        }

        .customize-grid::-webkit-scrollbar {
            display: none;
        }

        .clone-card {
            display: flex !important;
        }

        .custom-card {
            flex: 0 0 12.5006rem !important;
            width: 12.5006rem !important;
            padding: 0 !important;
            border-radius: 0 !important;
            box-shadow: none !important;
            background: transparent !important;
            text-align: center !important;
            transform: translateZ(0) !important;
            -webkit-transform: translateZ(0) !important;
        }

        .custom-img-wrapper {
            width: 100% !important;
            border-radius: 0.5rem !important;
            margin-bottom: 0.625rem !important;
            background: #f7f7f7 !important;
            overflow: hidden !important;
            -webkit-mask-image: -webkit-radial-gradient(white, black) !important;
            mask-image: radial-gradient(white, black) !important;
            transform: translateZ(0) !important;
            -webkit-transform: translateZ(0) !important;
        }

        .custom-card .h4-style {
            font-size: 0.8125rem;
            font-weight: 600;
            color: #111;
            text-align: center !important;
            padding-left: 0;
            line-height: 1.3;
        }

        .custom-card .custom-card-title {
            font-size: 0.875rem !important;
            font-weight: 600;
            color: #111;
            text-align: center !important;
            line-height: 1.3;
            display: block;
        }
    }

    @keyframes marqueeTrainMobile {
        0% {
            transform: translate3d(0, 0, 0);
            -webkit-transform: translate3d(0, 0, 0);
        }

        100% {
            transform: translate3d(calc(-50% - 0.375rem), 0, 0);
            -webkit-transform: translate3d(calc(-50% - 0.375rem), 0, 0);
        }
    }
</style>

<!-- Customize Packaging Section -->
<section class="customize-section">
    <div class="customize-container">

        <span class="customize-title" style="display: block;">Coating and Finishing</span>
        <p class="customize-subtitle">Discover our top packaging style recommendations, meticulously crafted to enhance
            your products' presentation and appeal.</p>

        <div class="customize-layout">
            <!-- Left Sidebar Tabs -->
            <aside class="customize-sidebar">
                <button type="button" class="customize-tab active" data-customize-tab="coating">Coating</button>
                <button type="button" class="customize-tab" data-customize-tab="special_finishes">Special Finishes</button>
                <button type="button" class="customize-tab" data-customize-tab="paperboard">Paperboard</button>
                <button type="button" class="customize-tab" data-customize-tab="corrugated">Corrugated</button>
                <button type="button" class="customize-tab" data-customize-tab="fluted_grades">Fluted Grades</button>
                @unless($productPageOnly)
                <button type="button" class="customize-tab" data-customize-tab="rigid_materials">Rigid Materials</button>
                <button type="button" class="customize-tab" data-customize-tab="printing_options">Printing Options</button>
                @endunless
            </aside>

            <!-- Right Content Grid: Pre-rendered in HTML for Instant Mobile Loading -->
            <div class="customize-content">
                <div class="customize-grid" style="animation-duration: {{ $totalBase * 2 }}s;">
                    @foreach($initialMarqueeCards as $idx => $card)
                        <div class="custom-card{{ $idx >= $totalBase ? ' clone-card' : '' }}" style="opacity: 1;">
                            <div class="custom-img-wrapper">
                                <img src="{{ asset($card[0]) }}" alt="{{ $card[1] }}" width="200" height="200" decoding="async" fetchpriority="{{ $idx < 4 ? 'high' : 'low' }}">
                            </div>
                            <span class="custom-card-title">{{ $card[1] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function () {
        const grid = document.querySelector('.customize-grid');
        const customizeSidebar = document.querySelector('.customize-sidebar');
        const customizeUploadsUrl = "{{ asset('') }}";
        let currentActiveTab = 'coating';

        const customizeCardSets = {
            coating: [
                ['uploads/new-aqueous-coating.webp', 'Aqueous Coating'],
                ['uploads/new-gloss-finish.webp', 'Gloss Finish'],
                ['uploads/new-matte-finish.webp', 'Matte Finish'],
                ['uploads/new-soft-touch-coating.webp', 'Soft Touch Coating'],
                ['uploads/new-uv-coating.webp', 'UV Coating']
            ],
            special_finishes: [
                ['uploads/Debossing.webp', 'Debossing'],
                ['uploads/embossing.webp', 'Embossing'],
                ['uploads/gold-foiling.webp', 'Gold Foiling'],
                ['uploads/holographic.webp', 'Holographic'],
                ['uploads/silver-foiling.webp', 'Silver Foiling'],
                ['uploads/spot-uv.webp', 'Spot UV']
            ],
            paperboard: [
                ['uploads/Black Kraft.webp', 'Black Kraft'],
                ['uploads/CCNB-.webp', 'CCNB'],
                ['uploads/Fully-Recycled-CCNB.webp', 'Fully-Recycled CCNB'],
                ['uploads/Natural-Brown-Kraft-.webp', 'Natural Brown Kraft'],
                ['uploads/SBS-C1S.webp', 'SBS-C1S'],
                ['uploads/SBS-C2S-.webp', 'SBS C2S'],
                ['uploads/Uncoated Unbleached Kraft (UUK).webp', 'Uncoated Unbleached Kraft (UUK)'],
                ['uploads/White-Kraft-.webp', 'White Kraft']
            ],
            fluted_grades: [
                ['uploads/A-Flute.webp', 'A-Flute'],
                ['uploads/B-Flute.webp', 'B-Flute'],
                ['uploads/C-Flute.webp', 'C-Flute'],
                ['uploads/Double-Wall.webp', 'Double-Wall'],
                ['uploads/E-Flute.webp', 'E-Flute'],
                ['uploads/F-Flute.webp', 'F-Flute'],
                ['uploads/Triple-Wall.webp', 'Triple-Wall']
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
            corrugated: [
                ['uploads/kemi-white-board.webp', 'Kemi White Board'],
                ['uploads/natural-kraft-linerboard.webp', 'Natural Kraft Linerboard'],
                ['uploads/oyster-white-board.webp', 'Oyster White Board']
            ],
            rigid_materials: [
                ['uploads/Duplex-Chipboards.webp', 'Duplex Chipboard'],
                ['uploads/Grey-ChipboardCardboards.webp', 'Grey Chipboard Cardboard']
            ]
        };

        // Background pre-cache all tab images into browser cache for instant switching
        function precacheAllTabImages() {
            const urls = [];
            Object.keys(customizeCardSets).forEach(function (key) {
                if (key === 'coating') return;
                customizeCardSets[key].forEach(function (item) {
                    urls.push(customizeUploadsUrl + item[0]);
                });
            });

            let idx = 0;
            function loadNext() {
                if (idx >= urls.length) return;
                const img = new Image();
                img.src = urls[idx++];
                img.onload = img.onerror = function () {
                    if (window.requestIdleCallback) {
                        window.requestIdleCallback(loadNext, { timeout: 300 });
                    } else {
                        setTimeout(loadNext, 40);
                    }
                };
            }

            if (window.requestIdleCallback) {
                window.requestIdleCallback(loadNext, { timeout: 1500 });
            } else {
                setTimeout(loadNext, 800);
            }
        }

        if (document.readyState === 'complete') {
            precacheAllTabImages();
        } else {
            window.addEventListener('load', precacheAllTabImages);
        }

        function setCustomizeCardOrder(option) {
            const cardSet = customizeCardSets[option] || customizeCardSets.coating;

            if (grid) {
                // Smooth rapid fade out
                const currentCards = Array.from(grid.children);
                currentCards.forEach(card => {
                    card.style.opacity = "0";
                });

                setTimeout(() => {
                    // Reset marquee animation cleanly
                    grid.style.animation = "none";
                    void grid.offsetHeight;
                    grid.style.animation = "";

                    let repeatCount = Math.ceil(10 / cardSet.length);
                    let totalBaseCards = cardSet.length * repeatCount;
                    let baseHTML = '';

                    for (let i = 0; i < repeatCount; i++) {
                        cardSet.forEach((item, cardIdx) => {
                            const [imagePath, title] = item;
                            const priority = (i === 0 && cardIdx < 4) ? 'high' : 'low';
                            baseHTML += `
                                <div class="custom-card" style="opacity: 0;">
                                    <div class="custom-img-wrapper">
                                        <img src="${customizeUploadsUrl}${imagePath}" alt="${title}" width="200" height="200" decoding="async" fetchpriority="${priority}">
                                    </div>
                                    <span class="custom-card-title">${title}</span>
                                </div>
                            `;
                        });
                    }

                    // Duplicate base HTML for seamless marquee
                    grid.innerHTML = baseHTML + baseHTML;

                    grid.style.animationDuration = (totalBaseCards * 2) + "s";

                    const children = Array.from(grid.children);
                    const halfLength = children.length / 2;
                    children.slice(halfLength).forEach(child => child.classList.add('clone-card'));

                    // Fade in new cards immediately
                    requestAnimationFrame(() => {
                        void grid.offsetWidth;
                        children.forEach(card => {
                            card.style.opacity = "1";
                        });
                    });
                }, 100);
            }
        }

        document.querySelectorAll('.customize-tab').forEach(function (tab) {
            tab.addEventListener('click', function () {
                const targetTab = tab.dataset.customizeTab;
                if (targetTab === currentActiveTab) return;

                currentActiveTab = targetTab;
                document.querySelectorAll('.customize-tab').forEach(function (item) {
                    item.classList.remove('active');
                    item.setAttribute('aria-selected', 'false');
                });

                tab.classList.add('active');
                tab.setAttribute('aria-selected', 'true');
                setCustomizeCardOrder(targetTab);

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
    })();
</script>