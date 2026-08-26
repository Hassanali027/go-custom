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

    .cta-banner {
        width: 100%;
        display: flex;
        position: relative;
    }

    .cta-text-card {
        width: 100%;
        min-height: 449px;
        background: var(--secondary-color);
        border-radius: 40px;
        padding: 47px 640px 47px 86px;
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
        right: 86px;
        top: 62.5px;
        width: 540px;
        height: 324px;
        overflow: hidden;
    }

    .cta-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        display: block;
        border-radius: 16px;
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
        .cta-text-card {
            padding: 24px 20px 24px 20px;
        }
        .cta-image-wrapper {
            position: relative;
            right: auto;
            left: auto;
            top: auto;
            transform: none;
            width: 100%;
            height: auto;
            max-width: 540px;
            margin: 0 auto 24px;
        }
        .cta-text-card {
            display: flex;
            flex-direction: column-reverse;
        }
    }

    @media (max-width: 992px) {
        .cta-section {
            padding: 0 !important;
            margin: 0 !important;
            width: 100% !important;
            max-width: 100% !important;
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
            max-width: 100% !important;
            margin: 0 !important;
            padding: 24px 0 0 !important;
            overflow: hidden;
            background: linear-gradient(177.63deg, #BD7678 0%, #8D4445 100%);
            border-radius: 0 !important;
            box-sizing: border-box !important;
        }
        .cta-image-wrapper {
            position: relative;
            left: auto;
            top: auto;
            order: 1;
            z-index: 1;
            width: calc(100% - 38px);
            height: auto;
            margin: 0 19px;
            border-radius: 16px;
        }
        .cta-image-wrapper img {
            object-fit: contain;
            height: auto;
            width: 100%;
        }
        .cta-text-card {
            order: 2;
            width: 100%;
            min-height: 0;
            padding: 26px 19px 25px;
            background: transparent !important;
            border-radius: 0 !important;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .cta-heading {
            font-size: 20px;
            line-height: 1.25;
            margin-bottom: 8px;
            text-align: center;
        }
        .cta-desc {
            max-width: 280px;
            margin: 0 auto 12px;
            font-size: 13px;
            line-height: 1.38;
            text-align: center;
        }
        .cta-btn {
            gap: 8px;
            padding: 12px 15px;
            border-radius: 8px;
            font-size: 14px;
            align-self: center;
            margin: 0 auto;
        }
        .cta-text-card > :not(.cta-ellipse) {
            position: relative;
            z-index: 1;
        }
        .cta-ellipse-1 {
            width: 82px;
            height: 74px;
            right: 0;
            bottom: 0;
        }
        .cta-ellipse-2 {
            width: 62px;
            height: 62px;
            right: 12px;
            bottom: 12px;
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
                <span class="cta-heading" style="display: block; white-space: nowrap;">Get Your Custom Packaging<br>Today</span>
                <p class="cta-desc">Deliver elegance, protection, and a memorable unboxing experience with fully customized rigid box solutions.</p>
                <a href="/request-quote/" class="cta-btn">
                    Get Started Today
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 8h10M9 4l4 4-4 4"/>
                    </svg>
                </a>
            </div>
            <div class="cta-image-wrapper">
                <img src="{{ asset('uploads/yellowpic.png') }}" alt="Custom Packaging" onerror="this.src='https://placehold.co/540x324/f5bd00/112a46?text=Custom+Packaging'">
            </div>
        </div>
    </div>
</section>
