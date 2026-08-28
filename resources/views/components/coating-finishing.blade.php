<style>
    /* Customize Section */
    .customize-section {
        background: #FAFAFA;
        padding: 48px 0 54px;
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
    }

    .customize-grid {
        display: flex;
        flex-direction: row;
        gap: 20px;
        overflow-x: auto;
        scrollbar-width: none;
        -ms-overflow-style: none;
        padding-bottom: 10px;
    }
    
    .customize-grid::-webkit-scrollbar {
        display: none;
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
        position: relative;
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
            flex: 0 0 50% !important;
            height: 44px !important;
            min-height: 0 !important;
            padding: 10px 10px !important;
            font-size: 13px !important;
            font-weight: 700;
            text-align: center;
            white-space: nowrap !important;
            border-radius: 0px !important;
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
            border-radius: 8px !important;
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
                                    <img src="{{ asset('uploads/duplex-chipboard.webp') }}" alt="Duplex Chipboard" loading="lazy">

                                </div>
                                <span class="custom-card-title">Duplex Chipboard</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/grey-board.webp') }}" alt="Grey Chipboard Cardboard"
                                        onerror="this.src='https://placehold.co/200x200/DDDDDD/888888?text=Grey+Cardboard'" loading="lazy">
                                </div>
                                <span class="custom-card-title">Grey Chipboard Cardboard</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/black-kraft.webp') }}" alt="Black-Kraft"
                                        onerror="this.src='https://placehold.co/200x200/333333/FFFFFF?text=Black-Kraft'" loading="lazy">
                                </div>
                                <span class="custom-card-title">Black-Kraft</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/finish-material-holographic.webp') }}" alt="Holographic"
                                        onerror="this.src='https://placehold.co/200x200/FFCCEE/555555?text=Holographic'">
                                </div>
                                <span class="custom-card-title">Holographic</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/metallic-paper.webp') }}" alt="Metallic Paper"
                                        onerror="this.src='https://placehold.co/200x200/FFDD55/555555?text=Metallic+Paper'">
                                </div>
                                <span class="custom-card-title">Metallic Paper</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/natural-brown-.webp') }}" alt="Natural Brown Kraft"
                                        onerror="this.src='https://placehold.co/200x200/A08060/FFFFFF?text=Brown+Kraft'">
                                </div>
                                <span class="custom-card-title">Natural Brown Kraft</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/sbs-c2s.webp') }}" alt="SBS C2S"
                                        onerror="this.src='https://placehold.co/200x200/F5F5F5/888888?text=SBS+C2S'">
                                </div>
                                <span class="custom-card-title">SBS C2S</span>
                            </div>

                            <div class="custom-card">
                                <div class="custom-img-wrapper">
                                    <img src="{{ asset('uploads/textured-.webp') }}" alt="Textured"
                                        onerror="this.src='https://placehold.co/200x200/CCBBAA/333?text=Textured'">
                                </div>
                                <span class="custom-card-title">Textured</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@if(!request()->is('*category*'))
<script>
        const customizeCardOrders = {
            coating: [4, 5, 6, 7, 0, 1, 2, 3],
            special_finishes: [0, 1, 2, 3, 4, 5, 6],
            paperboard: [0, 1, 2, 3, 4, 5, 6, 7],
            corrugated: [7, 6, 5, 4, 3, 2, 1, 0],
            fluted_grades: [2, 3, 0, 1, 6, 7],
            rigid_materials: [0, 1, 2, 3, 4, 5, 6, 7],
            printing_options: [1, 0, 2, 3, 7, 5, 6, 4]
        };

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
                ['uploads/Soft-Touch-Silk-Lamination-.webp', 'Soft-Touch Silk Lamination'],
                ['uploads/Spot-Gloss-UV.webp', 'Spot Gloss UV'],
                ['uploads/Spot-Gloss-UV-2.webp', 'Spot Gloss UV-2'],
                ['uploads/UV-Coating-.webp', 'UV Coating']
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

                cardOrder.forEach(function(cardIndex, position) {
                    if (!cardSet[position]) return;
                    const card = customizeCards[cardIndex];
                    const [imagePath, title] = cardSet[position];
                    const image = card.querySelector('img');
                    image.src = customizeUploadsUrl + imagePath;
                    image.alt = title;
                    card.querySelector('.custom-card-title').textContent = title;
                    card.style.order = position + 1;
                    card.style.display = 'flex';
                });

                requestAnimationFrame(() => {
                    customizeCards.forEach(card => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    });
                });
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

</script>
@endif
