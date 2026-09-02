<style>
    /* Customize Section */
    .customize-section {
        background: transparent;
        padding: 0 0 1.5rem;
        font-family: 'Open Sans', sans-serif;
        overflow: hidden;
        width: 100%;
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
        margin-bottom: -1px; /* Overlap the container's bottom border */
    }

    .customize-tab.active,
    .customize-tab:hover,
    .customize-tab:focus-visible {
        color: #fff;
        background: #112a46; /* Matching active tab background */
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
    }

    .customize-grid {
        display: flex;
        flex-direction: row;
        gap: 1.25rem;
        width: max-content;
        animation: marqueeTrain 30s linear infinite;
        padding-bottom: 0.625rem;
    }
    
    .customize-grid:hover {
        animation-play-state: paused;
    }

    @keyframes marqueeTrain {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-50% - 0.625rem)); }
    }

    .custom-card {
        flex: 0 0 auto;
        width: 13.75rem;
        background: transparent;
        border-radius: 0.75rem;
        padding: 0;
        display: flex;
        flex-direction: column;
        transition: opacity 0.2s ease, transform 0.2s ease;
        text-align: center;
    }

    .custom-img-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 1;
        border-radius: 0.5rem;
        overflow: hidden;
        margin-bottom: 0.875rem;
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
            padding: 1.875rem 0 2.25rem;
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
            height: 2.75rem !important;
            min-height: 0 !important;
            padding: 0.625rem 1.25rem !important;
            font-size: 0.8125rem !important;
            font-weight: 700;
            text-align: center;
            white-space: nowrap !important;
            border-radius: 0 !important;
            margin-bottom: -1px;
        }

        .customize-grid {
            display: flex !important;
            flex-direction: row !important;
            gap: 0.75rem !important;
            width: max-content !important;
            padding-bottom: 0.625rem !important;
            animation: marqueeTrain 30s linear infinite !important;
        }
        
        .customize-grid::-webkit-scrollbar {
            display: none;
        }

        .clone-card {
            display: block !important;
        }

        .custom-card {
            flex: 0 0 12.5006rem !important;
            width: 12.5006rem !important;
            padding: 0 !important;
            border-radius: 0 !important;
            box-shadow: none !important;
            background: transparent !important;
            text-align: center !important;
        }

        .custom-img-wrapper {
            width: 100% !important;
            border-radius: 0.5rem !important;
            margin-bottom: 0.625rem !important;
            background: transparent !important;
            overflow: hidden;
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
</style>
        <!-- Customize Packaging Section -->
        <section class="customize-section">
            <div class="customize-container">

                <span class="customize-title" style="display: block;">Coating and Finishing</span>
                <p class="customize-subtitle">Discover our top packaging style recommendations, meticulously crafted to enhance your products' presentation and appeal.</p>

                <div class="customize-layout">
                    <!-- Left Sidebar Tabs -->
                    <aside class="customize-sidebar">
                        <button type="button" class="customize-tab active" data-customize-tab="coating">Coating</button>
                        <button type="button" class="customize-tab" data-customize-tab="special_finishes">Special Finishes</button>
                        <button type="button" class="customize-tab" data-customize-tab="paperboard">Paperboard</button>
                        <button type="button" class="customize-tab" data-customize-tab="corrugated">Corrugated</button>
                        <button type="button" class="customize-tab" data-customize-tab="fluted_grades">Fluted Grades</button>
                        <button type="button" class="customize-tab" data-customize-tab="rigid_materials">Rigid Materials</button>
                        <button type="button" class="customize-tab" data-customize-tab="printing_options">Printing Options</button>
                    </aside>

                    <!-- Right Content Grid -->
                    <div class="customize-content">
                        <div class="customize-grid">
                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/gloss-lamination.webp') }}" alt="Gloss Lamination" loading="lazy">
                                </div>
                                <span class="custom-card-title">Gloss Lamination</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/matte-lamination.webp') }}" alt="Matte Lamination" loading="lazy">
                                </div>
                                <span class="custom-card-title">Matte Lamination</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/Soft-Touch-Coating-.webp') }}" alt="Soft Touch Coating" loading="lazy">
                                </div>
                                <span class="custom-card-title">Soft Touch Coating</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/Soft-Touch-Silk-Lamination-.webp') }}" alt="Soft Touch Silk Lamination" loading="lazy">
                                </div>
                                <span class="custom-card-title">Soft Touch Silk Lamination</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/Aqueous-Coating-.webp') }}" alt="Aqueous Coating" loading="lazy">
                                </div>
                                <span class="custom-card-title">Aqueous Coating</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/UV-Coating-.webp') }}" alt="UV Coating" loading="lazy">
                                </div>
                                <span class="custom-card-title">UV Coating</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/Anti-scratch-Lamination-.webp') }}" alt="Anti-Scratch Lamination" loading="lazy">
                                </div>
                                <span class="custom-card-title">Anti-Scratch Lamination</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/Kemi-White-Board-.webp') }}" alt="Kemi White Board" loading="lazy">
                                </div>
                                <span class="custom-card-title">Kemi White Board</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<script>
    (function() {
        const grid = document.querySelector('.customize-grid');
        const customizeSidebar = document.querySelector('.customize-sidebar');
        const customizeUploadsUrl = "{{ asset('') }}";

        const customizeCardSets = {
            coating: [
                ['uploads/new-aqueous-coating.webp', 'Aqueous Coating'],
                ['uploads/new-gloss-finish.webp', 'Gloss Finish'],
                ['uploads/new-matte-finish.webp', 'Matte Finish'],
                ['uploads/new-soft-touch-coating.webp', 'Soft Touch Coating'],
                ['uploads/new-uv-coating.webp', 'UV Coating']
            ],
            special_finishes: [
                ['uploads/debossing.webp', 'Debossing'],
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
                ['uploads/kraft-corrugated.webp', 'Kraft Corrugated'],
                ['uploads/white-corrugated.webp', 'White Corrugated'],
                ['uploads/corrugated-divider.webp', 'Corrugated Divider'],
                ['uploads/natural-kraft-corrugated-insert.webp', 'Natural Kraft Corrugated Insert'],
                ['uploads/standard-white-corrugated-insert.webp', 'Standard White Corrugated Insert']
            ],
            rigid_materials: [
                ['uploads/Duplex-Chipboards.webp', 'Duplex Chipboard'],
                ['uploads/Grey-ChipboardCardboards.webp', 'Grey Chipboard Cardboard']
            ]
        };

        // Preload image assets
        setTimeout(function() {
            for (let key in customizeCardSets) {
                if (customizeCardSets.hasOwnProperty(key)) {
                    customizeCardSets[key].forEach(function(item) {
                        let img = new Image();
                        img.src = customizeUploadsUrl + item[0];
                    });
                }
            }
        }, 500);

        function setCustomizeCardOrder(option) {
            const cardSet = customizeCardSets[option] || customizeCardSets.coating;

            if (grid) {
                // Fade out existing cards
                const currentCards = Array.from(grid.children);
                currentCards.forEach(card => {
                    card.style.opacity = "0";
                    card.style.transform = "scale(0.98)";
                });

                setTimeout(() => {
                    // Reset marquee animation
                    grid.style.animation = "none";
                    void grid.offsetHeight;
                    grid.style.animation = "";

                    // Ensure the base loop has at least 10 cards and is a multiple of cardSet length
                    let repeatCount = Math.ceil(10 / cardSet.length);
                    let baseHTML = '';
                    
                    for (let i = 0; i < repeatCount; i++) {
                        cardSet.forEach(item => {
                            const [imagePath, title] = item;
                            baseHTML += `
                                <div class="custom-card" style="opacity: 0; transform: scale(0.98);">
                                    <div class="custom-img-wrapper">
                                        <img src="${customizeUploadsUrl}${imagePath}" alt="${title}" loading="lazy">
                                    </div>
                                    <span class="custom-card-title">${title}</span>
                                </div>
                            `;
                        });
                    }

                    // Duplicate base HTML for seamless marquee
                    grid.innerHTML = baseHTML + baseHTML;
                    
                    const children = Array.from(grid.children);
                    const halfLength = children.length / 2;
                    children.slice(halfLength).forEach(child => child.classList.add('clone-card'));

                    // Fade in new cards
                    requestAnimationFrame(() => {
                        void grid.offsetWidth; // Force reflow
                        children.forEach(card => {
                            card.style.opacity = "1";
                            card.style.transform = "scale(1)";
                        });
                    });
                }, 200);
            }
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
    })();
</script>