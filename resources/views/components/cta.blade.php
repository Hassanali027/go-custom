<style>
    /* ─────────────────────────────────────────
       CTA BANNER SECTION
    ───────────────────────────────────────── */
    .cta-section {
        background: var(--background-color);
        padding: 10px 0 30px;
    }

    .cta-container {
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 24px;
        box-sizing: border-box;
    }

    .mobile-br { display: none; }
    .desktop-only-space { display: inline; }

    .cta-banner {
        width: 100%;
        max-width: 1240px;
        margin: 0 auto;
        display: flex;
        position: relative;
    }

    .cta-text-card {
        width: 100%;
        min-height: 412px;
        background: linear-gradient(to right, #FDD471, #FFB400);
        border-radius: 40px;
        padding: 47px 540px 47px 86px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    /* Large circle — bottom right, partially off-edge */
    .cta-text-card::before {
        display: none;
    }

    /* Smaller circle — above the large one, right side */
    .cta-text-card::after {
        display: none;
    }

    .cta-ellipse {
        position: absolute;
        pointer-events: none;
        user-select: none;
        display: none;
    }

    /* Ellipse-793: large, bottom-right, partially clipped off right edge */
    .cta-ellipse-1 {
        width: 240px;
        height: 240px;
        bottom: -70px;
        right: -60px;
    }

    /* Ellipse-794: smaller, sits on top of the large circle */
    .cta-ellipse-2 {
        width: 140px;
        height: 140px;
        bottom: 10px;
        right: 20px;
    }

    .cta-heading {
        font-family: 'Open Sans', sans-serif;
        font-size: 32px;
        font-weight: 800;
        color: var(--primary-color);
        line-height: 1.25;
        margin-bottom: 16px;
    }

    .cta-desc {
        font-family: 'DM Sans', sans-serif;
        font-size: 16px;
        color: #333;
        line-height: 1.6;
        margin-bottom: 32px;
        max-width: 480px;
    }

    .cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--primary-color);
        color: var(--secondary-color);
        font-family: 'DM Sans', sans-serif;
        font-size: 15px;
        font-weight: 700;
        padding: 14px 28px;
        border-radius: 4px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        width: fit-content;
        align-self: flex-start;
        flex-shrink: 0;
        transition: opacity 0.2s;
    }

    .cta-btn:hover {
        opacity: 0.9;
    }

    .cta-image-wrapper {
        position: absolute;
        right: 32px;
        top: 44px;
        width: 540px;
        height: 324px;
    }

    .cta-desktop-ellipse {
        position: absolute;
        width: 466px;
        height: 236px;
        bottom: -50px;
        right: 28px;
        z-index: 0;
        pointer-events: none;
        opacity: 1.32;
    }

    .cta-image-wrapper .cta-main-img {
        position: relative;
        z-index: 1;
        width: 100%;
        height: 89%;
        object-fit: contain;
        object-position: center;
        display: block;
    }

    @media (max-width: 1100px) {
        .cta-text-card {
            padding: 47px 460px 47px 40px;
        }
        .cta-image-wrapper {
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            width: 380px;
            height: 228px; /* Maintain aspect ratio (380 / (540/324)) */
        }
    }

    @media (max-width: 768px) {
        .mobile-br { display: block; }
        .desktop-only-space { display: none; }

        .cta-section {
            padding: 30px 15px !important;
            margin: 0 !important;
            width: 100% !important;
            box-sizing: border-box !important;
        }
        main > section.cta-section > .cta-container,
        .cta-section > .cta-container {
            padding: 0 !important;
            margin: 0 !important;
            width: 100% !important;
            max-width: 100% !important;
            box-sizing: border-box !important;
        }
        .cta-banner {
            display: flex;
            flex-direction: column;
            width: 100% !important;
            max-width: 380px !important;
            height: 604px !important;
            margin: 0 auto !important;
            padding: 45px 0 0 !important;
            overflow: visible !important;
            background: linear-gradient(to right, #FDD471, #FFB400) !important;
            border-radius: 20px !important;
            box-sizing: border-box !important;
            position: relative;
        }
        .cta-text-card {
            order: 1;
            width: 100%;
            min-height: 0;
            padding: 0 20px;
            background: transparent !important;
            border-radius: 0 !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .cta-heading {
            font-size: 26px;
            line-height: 1.3;
            margin-bottom: 24px;
            text-align: center;
        }
        .cta-desc {
            max-width: 320px;
            margin: 0 auto 28px;
            font-size: 15px;
            line-height: 1.5;
            text-align: center;
        }
        .cta-btn {
            gap: 8px;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 15px;
            align-self: center;
            margin: 0 auto 35px;
        }
        .cta-image-wrapper {
            position: relative;
            left: auto;
            right: auto;
            top: auto;
            transform: none;
            order: 2;
            z-index: 1;
            width: 100%;
            max-width: 380px;
            height: 228px;
            margin: 0 auto 0;
            border-radius: 0 0 20px 20px;
            overflow: visible !important;
            display: flex;
            justify-content: center;
        }
        .cta-desktop-ellipse {
            display: block !important;
            width: 350.3px !important;
            height: 159.3px !important;
            bottom: -68.15px !important;
            right: auto !important;
            left: 50% !important;
            transform: translateX(-50%) !important;
            opacity: 1.32 !important;
            z-index: 0 !important;
        }
        .cta-image-wrapper .cta-main-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 0 0 20px 20px;
            display: block;
            position: relative;
            z-index: 1;
            bottom: -35px;
        }
        .cta-text-card > :not(.cta-ellipse) {
            position: relative;
            z-index: 1;
        }
    }

    @media (max-width: 576px) {
        .cta-section {
            padding: 0 0 30px !important;
        }
    }
</style>

<section class="cta-section">
    <div class="cta-container">
        <div class="cta-banner">
            <div class="cta-text-card">
                <img src="{{ asset('uploads/cta-ellipse-1.png') }}" alt="" class="cta-ellipse cta-ellipse-1">
                <img src="{{ asset('uploads/cta-ellipse-2.png') }}" alt="" class="cta-ellipse cta-ellipse-2">
                <span class="cta-heading" style="display: block;">Get Your Custom<br class="mobile-br"> <span class="desktop-only-space"> </span>Packaging Today</span>
                <p class="cta-desc">Deliver elegance, protection, and a<br class="mobile-br"> memorable unboxing experience with<br class="mobile-br"> fully customized rigid box solutions.</p>
                <a href="/request-quote/" class="cta-btn">
                    Get Started Today
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 8h10M9 4l4 4-4 4"/>
                    </svg>
                </a>
            </div>
            <div class="cta-image-wrapper">
                <img src="{{ asset('uploads/Ellipse 793.png') }}" alt="" class="cta-desktop-ellipse">
                <img src="{{ asset('uploads/yellowpic.png') }}" class="cta-main-img" alt="Custom Packaging" onerror="this.src='https://placehold.co/540x324/f5bd00/112a46?text=Custom+Packaging'">
            </div>
        </div>
    </div>
</section>
