<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('uploads/favicon-rigid-boxes.webp') }}" type="image/webp">
    @include('components.canonical')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ !empty($settings['meta_title']) ? $settings['meta_title'] : 'Custom Printed Boxes' }}
    </title>
    <meta name="description"
        content="{{ !empty($settings['meta_description']) ? $settings['meta_description'] : 'Custom printed rigid packaging boxes at wholesale rates. Premium luxury boxes for retail, cosmetic, and gift packaging.' }}">
    @if(!empty($settings['meta_keywords']))
        <meta name="keywords" content="{{ $settings['meta_keywords'] }}">
    @endif
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            overflow-x: clip;
            width: 100%;
        }

        body {
            font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--background-color, #FAF8F8);
            color: #000000;
        }

        .home-page,
        .home-page>section {
            width: 100%;
            max-width: 100%;
            overflow-x: clip;
        }

        /* Shared canvas aligned with the header's centered 1280px container. */
        .home-page>section>[class$="-container"],
        .home-page>section>[class$="-inner"],
        .home-page>section>[class$="-wrapper"] {
            width: 100%;
            max-width: 1280px !important;
            margin-left: auto;
            margin-right: auto;
            padding-left: 55px !important;
            padding-right: 55px !important;
            box-sizing: border-box;
            min-width: 0;
        }

        @media (max-width: 768px) {

            .home-page>section>[class$="-container"],
            .home-page>section>[class$="-inner"],
            .home-page>section>[class$="-wrapper"] {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
        }

        @media (max-width: 480px) {

            .home-page>section>[class$="-container"],
            .home-page>section>[class$="-inner"],
            .home-page>section>[class$="-wrapper"] {
                padding-left: 16px !important;
                padding-right: 16px !important;
            }
        }

        /* ─────────────────────────────────────────
           SECTION: CUSTOM BOXES FOR EVERY INDUSTRY
        ───────────────────────────────────────── */
        .custom-boxes-section {
            background: #fff;
            padding: 10px 0 30px;
        }

        .custom-boxes-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 24px;
            text-align: center;
        }

        .custom-boxes-container h2 {
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: var(--section-text-color);
            margin-bottom: 18px;
        }

        .custom-boxes-container .section-desc {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.5;
            letter-spacing: 0%;
            text-align: center;
            color: var(--section-text-color);
            max-width: 752px;
            margin: 0 auto 28px;
            text-align: justify;
        }

        /* ─────────────────────────────────────────
           CARDS GRID
        ───────────────────────────────────────── */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 24px;
            justify-content: start;
            max-width: 100%;
            align-items: stretch;
        }

        /* ─────────────────────────────────────────
           CARD  (exact Figma spec: 297.86 x 391)
        ───────────────────────────────────────── */
        .industry-card {
            width: 100%;
            min-height: 0;
            background: #F8F5EE;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: inherit;
            box-sizing: border-box;
            border-radius: 0;
            transition: transform 0.25s ease;
        }

        /* Image area — Figma: 297.86 Fill x 305 */
        .industry-card__image-wrap {
            width: 100%;
            aspect-ratio: 297.86 / 305;
            background: #F8F5EE;
            margin: 0;
            overflow: hidden;
            flex-shrink: 0;
            box-sizing: border-box;
            display: block;
        }

        .industry-card__image-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            transition: transform 0.35s ease;
        }

        @media (hover: hover) {
            .industry-card:hover .industry-card__image-wrap img {
                transform: scale(1.04);
            }
        }

        /* Bottom content area — Figma: 86px (391 - 305) */
        .industry-card__bottom {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex: 1;
            min-height: 86px;
            width: 100%;
            box-sizing: border-box;
            padding: 12px 14px;
            background: #F8F5EE;
        }
        
        .industry-card__bottom-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 4px;
        }

        /* Card title */
        .industry-card__title {
            display: block;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 15px;
            line-height: 1.2;
            letter-spacing: 0;
            text-transform: capitalize;
            text-align: left;
            color: #111;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 0;
        }
        
        .industry-card__arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2F4235;
            flex-shrink: 0;
            margin-left: 8px;
        }

        /* Text area */
        .industry-card__text {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 12px;
            line-height: 1.35;
            color: #666;
            text-align: left;
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* ─────────────────────────────────────────
           VIEW ALL CATEGORIES BUTTON
           Figma: w:200 h:46, border-radius:4px,
                  padding:12/20/12/20, centered
        ───────────────────────────────────────── */
        .view-all-wrap {
            margin-top: 28px;
            display: flex;
            justify-content: center;
        }

        .view-all-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 46px;
            background: #8D4445;
            color: #fff;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0%;
            text-decoration: none;
            border-radius: 4px;
            padding: 12px 20px;
            gap: 10px;
            cursor: pointer;
            transition: background 0.25s;
            border: none;
        }

        .view-all-btn:hover {
            background: #5F2D2F;
            color: #fff;
        }

        /* ─────────────────────────────────────────
           WHY CHOOSE US SECTION
        ───────────────────────────────────────── */
        .why-choose-section {
            background: var(--background-color, #FAF8F8);
            padding: 10px 0 30px;
        }

        .why-choose-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 24px;
            text-align: center;
        }

        .why-choose-container h2,
        .why-choose-container .h2-heading {
            display: block;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: var(--section-text-color);
            margin-bottom: 12px;
        }

        .why-choose-container .why-desc {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.5;
            color: var(--section-text-color);
            margin-bottom: 36px;
        }

        /* ─────────────────────────────────────────
           BENTO WRAPPER
        ───────────────────────────────────────── */
        .why-bento {
            width: 100%;
            max-width: 100%;
            margin: 0;
            text-align: left;
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            grid-template-rows: 160px 100px 160px;
            gap: 14px;
        }

        /* each row is a flex row */
        .why-row {
            display: contents;
        }

        .why-row+.why-row {
            margin-top: 0;
        }

        /* ── Base card ── */
        .why-card {
            border-radius: 16px;
            padding: 20px 16px;
            display: block;
            position: relative;
            overflow: hidden;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(0, 0, 0, 0.03);
            flex-shrink: 0;
        }

        .why-card__title {
            display: block;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 15px;
            line-height: 1.2;
            color: var(--section-text-color);
            margin-bottom: 6px;
            text-align: center;
        }

        .why-card__text {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 12.5px;
            line-height: 1.4;
            color: var(--section-text-color);
            text-align: center;
        }

        .why-card__content {
            width: 100%;
            position: relative;
            z-index: 2;
        }

        /* ── Image box ── */
        .why-card__img-box {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 140px;
            height: 140px;
            background: transparent;
            border-radius: 12px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            flex-shrink: 0;
            gap: 10px;
            box-sizing: border-box;
        }

        .why-card__img-box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 12px;
        }

        /* ─────────────────────────────────────────
           CARD 1 — pink-1: Free Design Support
        ───────────────────────────────────────── */
        .wc-pink1 {
            background: #FDF0F6;
            width: 100%;
            height: 274px;
            grid-column: 1;
            grid-row: 1 / span 2;
        }

        /* ─────────────────────────────────────────
           CARD 2 — pink-2: Premium Quality Materials
        ───────────────────────────────────────── */
        .wc-pink2 {
            background: #FCECEE;
            width: 100%;
            height: 274px;
            grid-column: 2;
            grid-row: 1 / span 2;
        }

        /* ─────────────────────────────────────────
           CARD 3 — blue: Low MOQ
        ───────────────────────────────────────── */
        .wc-blue {
            background: #EAF3FB;
            width: 100%;
            height: 160px;
            position: relative;
            grid-column: 3 / span 2;
            grid-row: 1;
            display: flex;
            align-items: center;
        }

        .wc-blue .why-card__content {
            max-width: 55%;
            position: relative;
            z-index: 2;
            text-align: left;
        }

        .wc-blue .why-card__title,
        .wc-blue .why-card__text,
        .wc-yellow .why-card__title,
        .wc-yellow .why-card__text {
            text-align: left;
        }

        .wc-blue .why-card__img-box {
            position: absolute;
            top: 0;
            right: 0;
            left: auto;
            transform: none;
            width: 58%;
            height: 100%;
            border-radius: 0;
        }

        .wc-blue .why-card__img-box img {
            object-fit: contain;
            object-position: right bottom;
            border-radius: 0;
        }

        /* ─────────────────────────────────────────
           CARD 4 — yellow: Dedicated Customer Service
        ───────────────────────────────────────── */
        .wc-yellow {
            background: #FDF7E7;
            width: 100%;
            height: 160px;
            grid-column: 1 / span 2;
            grid-row: 3;
            display: flex;
            align-items: center;
        }

        .wc-yellow .why-card__content {
            max-width: 55%;
            position: relative;
            z-index: 2;
        }

        .wc-yellow .why-card__img-box {
            top: 0;
            left: auto;
            right: 0;
            transform: none;
            width: 58%;
            height: 100%;
            border-radius: 0;
        }

        .wc-yellow .why-card__img-box img {
            object-fit: contain;
            object-position: right bottom;
            border-radius: 0;
        }

        /* ─────────────────────────────────────────
           CARD 5 — green: Custom Sizes & Designs
        ───────────────────────────────────────── */
        .wc-green {
            background: #ECFBEF;
            width: 100%;
            height: 274px;
            grid-column: 3;
            grid-row: 2 / span 2;
        }

        /* ─────────────────────────────────────────
           CARD 6 — skin: Fast Production Time
        ───────────────────────────────────────── */
        .wc-skin {
            background: #FDF3E9;
            width: 100%;
            height: 274px;
            grid-column: 4;
            grid-row: 2 / span 2;
        }

        /* ─────────────────────────────────────────
           RESPONSIVE — Why Choose Us
        ───────────────────────────────────────── */

        /* Laptop container padding */
        @media (max-width: 1300px) and (min-width: 993px) {
            .why-choose-container {
                padding: 0 24px;
            }

            .why-bento {
                gap: 10px;
            }

            .why-card {
                padding: 24px 18px;
            }

            .why-card__title {
                font-size: 16px;
                margin-bottom: 8px;
            }

            .why-card__text {
                font-size: 13px;
                line-height: 1.45;
            }
        }

        /* Tablet: 2-col fluid stack below 992px */
        @media (max-width: 992px) {
            .why-choose-container {
                padding: 0 24px;
            }

            .why-bento {
                width: 100%;
                display: block;
            }

            .why-row {
                display: flex;
                flex-wrap: wrap;
            }

            .why-row+.why-row {
                margin-top: 14px;
            }

            .wc-pink1,
            .wc-pink2 {
                width: calc(50% - 7px);
                height: 360px;
            }

            .wc-blue {
                width: 100%;
                height: auto;
                min-height: 280px;
            }

            .wc-blue .why-card__illus {
                left: auto;
                right: 24px;
                top: 17px;
            }

            .wc-blue .why-card__content {
                max-width: 55%;
            }

            .wc-yellow {
                width: 100%;
                height: auto;
                min-height: 180px;
            }

            .wc-green,
            .wc-skin {
                width: calc(50% - 7px);
                height: 242px;
            }
        }

        /* Mobile: single column */
        @media (max-width: 600px) {
            .why-choose-section {
                padding: 5px 0 40px;
            }

            .why-choose-container {
                padding: 0 16px;
            }

            .why-choose-container h2 {
                font-size: 24px;
            }

            .why-bento {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .why-row {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .why-row+.why-row {
                margin-top: 0;
            }

            .why-card {
                display: flex !important;
                flex-direction: row !important;
                align-items: center !important;
                padding: 16px 18px !important;
                gap: 16px !important;
                border-radius: 16px !important;
                box-shadow: none !important;
                border: none !important;
            }

            .why-card__img-box,
            .why-card__illus {
                order: -1;
                width: 85px !important;
                height: 85px !important;
                margin: 0 !important;
                padding: 0 !important;
                background: transparent !important;
                position: static !important;
                display: flex !important;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                transform: none !important;
            }

            .why-card__img-box img,
            .why-card__illus {
                width: 100% !important;
                height: 100% !important;
                object-fit: contain !important;
                object-position: center !important;
                
            }

            .why-card__content {
                order: 1;
                flex: 1 !important;
                width: auto !important;
                max-width: none !important;
                text-align: left !important;
            }

            .why-card__title {
                font-size: 16px !important;
                font-weight: 700 !important;
                margin-bottom: 4px !important;
                line-height: 1.25 !important;
                text-align: left !important;
            }

            .why-card__text {
                font-size: 13px !important;
                line-height: 1.45 !important;
                color: #444 !important;
                text-align: left !important;
            }

            .wc-pink1,
            .wc-pink2,
            .wc-blue,
            .wc-yellow,
            .wc-green,
            .wc-skin {
                width: 100% !important;
                height: auto !important;
                min-height: 0 !important;
            }
        }

        /* ─────────────────────────────────────────
           PREMIUM CUSTOM RIGID BOXES SECTION
        ───────────────────────────────────────── */
        .premium-section {
            background: var(--primary-color, #8D4445);
            padding: 40px 0 20px;
            overflow: hidden;
        }

        .premium-inner {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 48px;
        }

        /* ── LEFT: two overlapping images ── */
        .premium-images {
            position: relative;
            width: 50%;
            height: 460px;
            flex-shrink: 0;
        }

        .premium-img1 {
            position: absolute;
            top: 0;
            left: 0;
            width: 78%;
            height: 350px;
            border-radius: 21.12px;
            object-fit: cover;
            display: block;
        }

        /* img2 offset relative to img1 */
        .premium-img2 {
            position: absolute;
            top: 180px;
            left: 36%;
            width: 55%;
            height: 260px;
            border-radius: 15.51px;
            object-fit: cover;
            display: block;
            z-index: 2;
        }

        /* ── RIGHT: content col ── */
        .premium-content {
            width: auto;
            min-width: 0;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .premium-heading {
            display: block;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 32px;
            line-height: 32px;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: #fff;
            margin-bottom: 20px;
            width: 100%;
        }

        .premium-desc {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.6;
            letter-spacing: 0%;
            text-align: justify;
            color: rgba(255, 255, 255, 0.9);
            width: 100%;
            margin-bottom: 32px;
        }

        /* Icons row */
        .premium-icons {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 40px;
            margin-bottom: 32px;
        }

        .premium-icon-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            width: 85px;
        }

        .premium-icon-item img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .premium-icon-text {
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            font-size: 15.07px;
            line-height: 16.75px;
            letter-spacing: 0%;
            text-align: center;
            color: #fff;
            width: 100%;
        }

        /* Order Now button */
        .premium-btn {
            display: inline-block;
            background: #fff;
            color: var(--primary-color, #8D4445);
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            text-decoration: none;
            border-radius: 4px;
            padding: 12px 40px;
            transition: background 0.25s, color 0.25s;
        }

        .premium-btn:hover {
            background: var(--secondary-color, #F8EEEC);
        }

        /* RESPONSIVE — Premium Section */
        @media (max-width: 1200px) {
            .premium-inner {
                padding: 0 40px;
                gap: 40px;
            }

            .premium-images {
                width: 440px;
                height: 420px;
            }

            .premium-img1 {
                width: 380px;
                height: 320px;
            }

            .premium-img2 {
                top: 160px;
                left: 160px;
                width: 260px;
                height: 240px;
            }

            .premium-content {
                width: auto;
                flex: 1;
            }

            .premium-heading,
            .premium-desc {
                width: 100%;
            }
        }

        @media (max-width: 900px) {
            .premium-inner {
                flex-direction: column;
                padding: 0 24px;
                gap: 32px;
            }

            .premium-images {
                width: 100%;
                height: 340px;
            }

            .premium-img1 {
                width: 75%;
                height: 260px;
            }

            .premium-img2 {
                top: 120px;
                left: 36%;
                width: 55%;
                height: auto;
                aspect-ratio: 370/341;
            }

            .premium-content {
                width: 100%;
            }

            .premium-heading,
            .premium-desc {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .premium-icons {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .premium-section {
                padding: 20px 0 30px;
            }

            .premium-inner {
                flex-direction: column;
                padding: 0 16px;
                gap: 24px;
            }

            .premium-heading {
                font-size: 22px;
                line-height: 28px;
                width: 100%;
            }

            .premium-desc {
                width: 100%;
                font-size: 14px;
            }

            .premium-icons {
                display: none;
            }

            .premium-content {
                width: 100%;
            }

            .premium-images {
                width: 100%;
                height: auto;
                position: relative;
            }

            .premium-img1 {
                width: 100%;
                height: auto;
                max-height: 350px;
                position: relative;
            }

            .premium-img2 {
                display: none;
            }
        }

        /* ─────────────────────────────────────────
           BEST SELLER SECTION
        ───────────────────────────────────────── */
        .bestseller-section {
            background: var(--secondary-color, #F8EEEC);
            padding: 20px 0;
            overflow: hidden;
            width: 100%;
        }

        .bestseller-inner {
            max-width: 1440px;
            width: 100%;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 40px;
            box-sizing: border-box;
            overflow: hidden;
        }

        /* Left content block — w:260 */
        .bestseller-left {
            width: 260px;
            flex-shrink: 0;
        }

        .bestseller-heading {
            display: block;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 32px;
            line-height: 40px;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: var(--section-text-color);
            margin-bottom: 16px;
        }

        .bestseller-desc {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 22px;
            letter-spacing: 0%;
            text-align: justify;
            color: var(--section-text-color);
            margin-bottom: 24px;
        }

        /* Dots — 4 circles, total width ~76.5px */
        .bestseller-right {
            display: flex;
            flex-direction: column;
            gap: 24px;
            flex: 1;
            min-width: 0;
            width: 100%;
        }

        .bestseller-dots {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 8px;
        }

        .bestseller-dot {
            appearance: none;
            padding: 0;
            cursor: pointer;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            flex-shrink: 0;
            border: 2px solid var(--section-text-color, #000);
            background: transparent;
        }

        .bestseller-dot.active {
            background: var(--primary-color, #8D4445);
            border-color: var(--primary-color, #8D4445);
        }

        .bestseller-card--mobile-only {
            display: none !important;
        }

        /* Cards row */
        .bestseller-cards {
            display: flex;
            flex-direction: row;
            gap: 20px;
            width: 100%;
            min-width: 0;
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
            scroll-behavior: smooth;
        }

        .bestseller-cards::-webkit-scrollbar {
            display: none;
        }

        .bestseller-card {
            width: 275px;
            min-width: 275px;
            height: 325px;
            flex: 0 0 275px;
            border-radius: 17.22px;
            overflow: hidden;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: transparent;
        }

        .bestseller-card__img {
            width: 275px;
            height: 275px;
            aspect-ratio: auto;
            border-radius: 17.22px;
            overflow: hidden;
            border: 1.08px solid #4A4E541A;
            flex-shrink: 0;
        }

        .bestseller-card__img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 17.22px;
        }

        .bestseller-card__title {
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 14px;
            line-height: 1.4;
            color: var(--section-text-color);
            text-align: center;
            padding: 10px 8px 0;
        }

        /* ─────────────────────────────────────────
           RESPONSIVE — Best Seller
        ───────────────────────────────────────── */
        @media (max-width: 1200px) {
            .bestseller-inner {
                padding: 0 40px;
                gap: 32px;
            }
        }

        @media (max-width: 768px) {
            .bestseller-section {
                padding: 10px 0 30px;
                margin-bottom: 20px;
            }

            .bestseller-inner {
                flex-direction: column;
                padding: 0 20px;
                gap: 20px;
                align-items: center;
                text-align: center;
            }

            .bestseller-left {
                width: 100%;
            }

            .bestseller-heading {
                font-size: 24px;
                line-height: 32px;
                text-align: center;
            }

            .bestseller-desc {
                font-size: 14px;
                text-align: center;
            }

            .bestseller-dots {
                display: none !important;
            }

            /* 2×2 card grid */
            .bestseller-cards {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                gap: 12px;
                justify-content: flex-start;
            }

            .bestseller-card {
                width: calc(50% - 6px);
                min-width: 0;
                height: auto;
                flex: 0 0 calc(50% - 6px);
            }

            .bestseller-card--mobile-only {
                display: flex !important;
            }

            .bestseller-card__img {
                width: 100%;
                height: auto;
                aspect-ratio: 1 / 1;
            }

            .bestseller-card__img img {
                position: static;
                width: 100%;
                height: 100%;
            }
        }

        @media (min-width: 769px) and (max-width: 1920px) {
            .cards-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 16px;
            }

            .industry-card {
                width: 100%;
                min-height: 0;
                height: auto;
            }

            .industry-card__title {
                font-size: 15px;
                padding: 16px 10px 8px;
            }

            .industry-card__image-wrap {
                width: calc(100% - 12px);
                height: clamp(150px, 19vw, 220px);
            }

            .industry-card__bottom {
                padding: 12px;
                flex: none;
            }

            .industry-card__text {
                font-size: 14px;
            }

            .industry-card__btn {
                height: 40px;
                font-size: 14px;
                margin-top: 10px;
                width: min(200px, 100%);
            }

            .view-all-wrap {
                margin-top: 35px;
            }
        }

        /* Tablet portrait */
        @media (max-width: 768px) {
            .custom-boxes-section {
                padding: 24px 0 20px;
            }

            .custom-boxes-container {
                padding: 0 20px;
            }

            .cards-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
            }

            .industry-card {
                width: 100%;
                min-height: auto;
            }

            .industry-card__title {
                font-size: 15px;
                padding: 14px 12px 6px;
            }

            .industry-card__image-wrap {
                width: calc(100% - 16px);
                height: 180px;
            }

            .industry-card__bottom {
                padding: 12px;
            }

            .industry-card__btn {
                width: 100%;
                margin-left: 0;
                margin-top: 12px;
                height: 40px;
                font-size: 14px;
            }
        }

        /* Mobile */
        @media (max-width: 480px) {
            .custom-boxes-container {
                padding: 0 12px !important;
            }

            .custom-boxes-container h2 {
                font-size: 24px;
            }

            .custom-boxes-container .section-desc {
                font-size: 14px;
                margin-bottom: 24px;
            }

            .cards-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .industry-card__title {
                font-size: 12px;
                line-height: 1.25;
                padding: 10px 8px 4px;
            }

            .industry-card__image-wrap {
                width: 100%;
                height: 140px;
                padding: 0 6px;
                box-sizing: border-box;
            }

            .industry-card__bottom {
                padding: 8px 10px 12px;
            }

            .industry-card__text {
                font-size: 11px;
                line-height: 1.35;
            }

            .industry-card__btn {
                font-size: 12px;
                height: 36px;
                padding: 7px 10px;
                width: 100%;
                margin-left: 0;
                margin-top: 10px;
            }

            .view-all-btn {
                font-size: 14px;
                width: 180px;
            }
        }

        /* ─────────────────────────────────────────
           CUSTOMIZE EVERY DETAIL SECTION
        ───────────────────────────────────────── */
        .customize-detail-section {
            background: var(--background-color, #FAF8F8);
            padding: 48px 0 25px;
        }

        .customize-detail-inner {
            width: 100%;
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 24px !important;
            box-sizing: border-box;
        }

        /* Heading */
        .customize-detail-heading {
            display: block;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: var(--section-text-color);
            text-align: center;
            margin-bottom: 12px;
        }

        /* Paragraph */
        .customize-detail-desc {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.5;
            text-align: justify;
            color: var(--section-text-color);
            max-width: 548px;
            margin: 0 auto 24px;
        }

        /* Options pill bar */
        .customize-detail-options-wrapper {
            width: 100%;
            margin: 0 0 20px 0;
            overflow-x: auto;
            scrollbar-width: none;
            cursor: grab;
        }

        .customize-detail-options-wrapper::-webkit-scrollbar {
            display: none;
        }

        .customize-detail-options-wrapper.grabbing {
            cursor: grabbing;
        }

        .customize-detail-options {
            min-width: 100%;
            width: max-content;
            border: 1px solid var(--section-text-color, #000);
            border-radius: 100px;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 5px 6px;
            gap: 4px;
            justify-content: space-between;
            user-select: none;
            box-sizing: border-box;
        }

        .cdo-btn {
            flex: 1 1 auto;
            height: 40px;
            padding: 0 20px;
            border-radius: 100px;
            border: none;
            background: transparent;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 16px;
            color: var(--section-text-color);
            cursor: pointer;
            white-space: nowrap;
            transition: background 0.2s, color 0.2s;
        }

        .cdo-btn.active {
            background: #8d4445;
            color: #fff;
        }

        .cdo-btn:hover:not(.active) {
            background: transparent;
        }

        /* Cards row */
        .customize-detail-cards {
            width: 100%;
            max-width: none;
            display: flex;
            flex-direction: row;
            gap: 10px;
            justify-content: center;
        }

        /* Each card: equal flex, square-ish aspect ratio */
        .cdc-card {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            flex: 0 1 350px;
            width: 100%;
            max-width: 350px;
            min-width: 0;
            aspect-ratio: 350 / 406;
            background: #e8e8e8;
        }

        .cdc-card img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            display: block;
        }

        .cdc-card__label {
            display: none;
        }

        /* ─────────────────────────────────────────
           RESPONSIVE — Customize Detail
        ───────────────────────────────────────── */
        @media (max-width: 1200px) {
            .customize-detail-inner {
                padding: 0 24px;
            }

            .cdo-btn {
                font-size: 14px;
                padding-inline: 14px;
            }
        }

        @media (max-width: 900px) {
            .customize-detail-inner {
                padding: 0 24px !important;
            }
        }

        @media (max-width: 768px) {
            .customize-detail-section {
                padding: 20px 0 26px;
            }

            .customize-detail-inner {
                padding: 0 20px !important;
            }

            .customize-detail-heading {
                font-size: 24px;
            }

            .customize-detail-desc {
                font-size: 14px;
                max-width: 100%;
            }

            .customize-detail-options {
                justify-content: flex-start;
                gap: 8px;
            }

            .cdo-btn {
                font-size: 13px;
                padding: 0 14px;
                height: 38px;
                flex: 0 0 auto;
            }

            /* horizontal scroll */
            .customize-detail-cards {
                flex-direction: row;
                gap: 14px;
                overflow-x: auto;
                justify-content: flex-start;
                scrollbar-width: none;
                -ms-overflow-style: none;
                scroll-behavior: smooth;
            }

            .customize-detail-cards::-webkit-scrollbar {
                display: none;
            }

            .cdc-card {
                flex: 0 0 80vw;
                width: 80vw;
                max-width: 350px;
                aspect-ratio: 350 / 406;
                align-self: center;
            }
        }

        /* ─────────────────────────────────────────
           SUSTAINABLE PACKAGING SOLUTIONS SECTION
        ───────────────────────────────────────── */
        .sustainable-section {
            background: #FAF8F8;
            padding: 20px 0 20px;
        }

        .sustainable-inner {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* heading */
        .sustainable-heading {
            display: block;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: var(--section-text-color);
            text-align: center;
            margin-bottom: 12px;
        }

        /* paragraph */
        .sustainable-desc {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.5;
            text-align: justify;
            color: var(--section-text-color);
            max-width: 624px;
            margin: 0 auto 24px;
        }

        /* 2-col grid: left big image | right two stacked images */
        .sustainable-grid {
            width: 100%;
            display: flex;
            flex-direction: row;
            gap: 20px;
            align-items: stretch;
        }

        /* ── LEFT: big image with overlay text + button ── */
        .sustainable-left {
            width: 606px;
            height: 600px;
            flex-shrink: 0;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }

        .sustainable-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 8px;
        }

        .sustainable-left__overlay {
            position: absolute;
            bottom: 44px;
            left: 56px;
            right: 24px;
        }

        .sustainable-eco-label {
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            font-size: 18px;
            line-height: 100%;
            color: #fff;
            margin-bottom: 12px;
            display: block;
        }

        .sustainable-tagline {
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 32px;
            line-height: 1.2;
            color: #fff;
            margin-bottom: 20px;
            max-width: 439px;
        }

        .sustainable-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 50px;
            background: var(--primary-color, #8D4445);
            color: #fff;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
            font-size: 15px;
            text-decoration: none;
            border-radius: 4px;
            padding: 12px 20px;
            gap: 10px;
            box-shadow: 0px 2px 4px 0px #00000040;
            transition: background 0.25s;
        }

        .sustainable-btn:hover {
            background: var(--footer-color, #5F2D2F);
        }

        /* ── RIGHT: two stacked images ── */
        .sustainable-right {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
            height: 600px;
        }

        .sustainable-right__card {
            flex: 1;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            min-height: 0;
        }

        .sustainable-right__card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 8px;
        }

        .sustainable-right__label {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 32px;
            line-height: 100%;
            color: #FFFFFF;
            white-space: nowrap;
        }

        /* ─────────────────────────────────────────
           RESPONSIVE — Sustainable
        ───────────────────────────────────────── */
        @media (max-width: 1200px) {
            .sustainable-inner {
                padding: 0 40px;
            }

            .sustainable-left {
                width: 48%;
            }
        }

        @media (max-width: 768px) {
            .sustainable-section {
                padding: 0px 0 25px;
            }

            .sustainable-inner {
                padding: 0 16px;
            }

            .sustainable-heading {
                font-size: 24px;
                line-height: 1.2;
            }

            .sustainable-desc {
                font-size: 14px;
                max-width: 100%;
            }

            /* horizontal scroll */
            .sustainable-grid {
                flex-direction: row;
                gap: 14px;
                overflow-x: auto;
                justify-content: flex-start;
                scrollbar-width: none;
                -ms-overflow-style: none;
                scroll-behavior: smooth;
            }

            .sustainable-grid::-webkit-scrollbar {
                display: none;
            }

            .sustainable-left {
                width: 100%;
                height: 380px;
                flex: 1;
            }

            /* overlay adjustments */
            .sustainable-left__overlay {
                left: 20px;
                right: 20px;
                bottom: 28px;
            }

            .sustainable-eco-label {
                font-size: 13px;
                margin-bottom: 8px;
            }

            .sustainable-tagline {
                font-size: 22px;
                line-height: 1.25;
                margin-bottom: 16px;
            }

            .sustainable-btn {
                width: 170px;
                height: 44px;
                font-size: 14px;
            }

            /* right column: hide on mobile as requested */
            .sustainable-right {
                display: none;
            }

            .sustainable-right__card {
                width: 85vw;
                height: 380px;
                flex: 0 0 85vw;
            }

            .sustainable-right__label {
                font-size: 18px;
                white-space: normal;
                text-align: center;
                width: 90%;
            }
        }


        /* ═══════════════════════════════════
           CUSTOM QUOTE
        ═══════════════════════════════════ */
        .quote-section {
            background: var(--primary-color);
            width: 100%;
            padding: 20px 0 54px;
            position: relative;
            overflow: hidden;
            margin-top: 20px;
        }

        .quote-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            align-items: stretch;
            gap: 40px;
            position: relative;
            z-index: 2;
        }

        .quote-form-card {
            width: 739px;
            min-height: 712px;
            flex-shrink: 0;
            background: #fff;
            border-radius: 20px;
            padding: 46px;
            box-sizing: border-box;
        }

        .quote-form-title {
            font-family: 'Open Sans', sans-serif;
            font-size: 32px !important;
            font-weight: 800;
            color: var(--section-text-color);
            text-align: center;
            margin-bottom: 28px;
        }

        .form-section-label {
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 15px;
            color: var(--primary-color);
            margin-bottom: 10px;
            margin-top: 22px;
        }

        .form-row {
            display: flex;
            gap: 12px;
            width: 100%;
            box-sizing: border-box;
        }

        .form-row input,
        .form-row select,
        .form-row textarea {
            flex: 1;
            min-width: 0;
            height: 44px;
            border: 0.2px solid var(--section-text-color);
            border-radius: 6px;
            padding: 0 14px;
            font-size: 14px;
            color: #333;
            background: #FAFAFA;
            outline: none;
            box-sizing: border-box;
            appearance: none;
            -webkit-appearance: none;
        }

        .form-row input::placeholder,
        .form-row textarea::placeholder {
            color: #AAAAAA;
        }

        .form-row input:focus,
        .form-row select:focus,
        .form-row textarea:focus {
            border-color: var(--primary-color);
            background: #fff;
        }

        .select-wrapper {
            flex: 1;
            min-width: 0;
            position: relative;
        }

        .select-wrapper select {
            width: 100%;
            padding-right: 36px;
            cursor: pointer;
        }

        .select-wrapper::after {
            content: '';
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 6px solid #666;
            pointer-events: none;
        }

        .specs-row {
            display: flex;
            gap: 12px;
            width: 100%;
            box-sizing: border-box;
        }

        .specs-row input {
            flex: 1;
            min-width: 0;
            height: 44px;
            border: 0.2px solid var(--section-text-color);
            border-radius: 6px;
            padding: 0 14px;
            font-size: 14px;
            color: #333;
            background: #FAFAFA;
            outline: none;
            box-sizing: border-box;
        }

        .specs-unit {
            position: relative;
            width: 72px;
            flex-shrink: 0;
        }

        .specs-unit select {
            width: 100%;
            height: 44px;
            border: 0.2px solid var(--section-text-color);
            border-radius: 6px;
            padding: 0 24px 0 10px;
            font-size: 14px;
            color: #333;
            background: #FAFAFA;
            appearance: none;
            -webkit-appearance: none;
            box-sizing: border-box;
        }

        .specs-unit::after {
            content: '';
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 5px solid #666;
            pointer-events: none;
        }

        .preferences-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            width: 100%;
        }

        .textarea-row {
            width: 100%;
        }

        .textarea-row textarea {
            width: 100%;
            height: 128px;
            border: 0.2px solid var(--section-text-color);
            border-radius: 8px;
            padding: 12px 14px;
            font-size: 14px;
            color: #333;
            background: #FAFAFA;
            outline: none;
            resize: vertical;
            box-sizing: border-box;
        }

        .quote-btn-wrap {
            display: flex;
            justify-content: center;
            margin-top: 24px;
        }

        .quote-submit-btn {
            width: 284px;
            height: 50px;
            background: var(--primary-color);
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
        }

        .quote-steps {
            flex: 1;
            padding-top: 57px;
            display: flex;
            flex-direction: column;
        }

        .quote-steps-inner {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .quote-step {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            position: relative;
        }

        .quote-step:not(:last-child) {
            flex-grow: 1;
            padding-bottom: 40px;
        }

        .quote-step:not(:last-child)::before {
            content: '';
            position: absolute;
            left: 36px;
            top: 73px;
            bottom: 0;
            width: 1px;
            background: rgba(255, 255, 255, 0.15);
        }

        .step-number-block {
            position: relative;
            flex-shrink: 0;
            width: 117px;
        }

        .step-num-box {
            width: 73px;
            height: 73px;
            background: #fff;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-color);
            z-index: 2;
            flex-shrink: 0;
        }

        .step-ghost-num {
            position: absolute;
            left: 85px;
            top: -12px;
            font-size: 80px;
            font-weight: 900;
            color: rgba(255, 255, 255, 0.15);
            line-height: 1;
            pointer-events: none;
            user-select: none;
        }

        .step-text {
            flex: 1;
            padding-top: 6px;
        }

        .step-title {
            font-family: 'Open Sans', sans-serif;
            font-size: 18px !important;
            font-weight: 800;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }

        .step-desc {
            font-size: 14px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.75);
        }

        @media (max-width: 1280px) {
            .quote-container {
                padding: 0 40px;
                gap: 30px;
            }

            .quote-form-card {
                width: 600px;
            }
        }

        @media (max-width: 992px) {
            .quote-section {
                padding: 40px 0 50px;
                margin-top: 0;
            }

            .quote-container {
                flex-direction: column-reverse;
                padding: 0 5%;
            }

            .quote-form-card {
                width: 100%;
                min-height: unset;
            }

            .quote-steps {
                padding-top: 0;
                padding-bottom: 40px;
            }
        }

        @media (max-width: 576px) {
            .quote-container {
                padding: 0 5%;
            }

            .quote-form-card {
                padding: 20px;
                border-radius: 18px;
            }

            .quote-form-title {
                font-size: 20px !important;
            }

            .form-row {
                flex-direction: column;
                gap: 10px;
            }

            .preferences-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .quote-submit-btn {
                width: 90%;
            }
        }

        /* ═══════════════════════════════════
           TEXT CONTENT
        ═══════════════════════════════════ */
        .text-content-section {
            background: var(--background-color);
            padding: 25px 0;
        }

        .text-content-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            justify-content: center;
        }

        .text-content-card {
            width: 100%;
            max-width: 1030px;
            background: #fff;
            border-radius: 40px;
            border: 1px solid var(--section-text-color);
            padding: 48px 20px 48px 56px;
            box-sizing: border-box;
            height: 787px;
        }

        .text-content-inner {
            height: 100%;
            overflow-y: auto;
            padding-right: 26px;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) #F0F0F0;
        }

        .text-content-inner::-webkit-scrollbar {
            width: 10px;
        }

        .text-content-inner::-webkit-scrollbar-track {
            background: #F0F0F0;
            border-radius: 20px;
        }

        .text-content-inner::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 20px;
        }

        .text-content-heading {
            font-family: 'Open Sans', sans-serif;
            font-size: 24px !important;
            font-weight: 700;
            color: #000;
            margin-bottom: 20px;
            line-height: 1.4;
        }

        .text-content-body p {
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            color: #000;
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .text-content-body a {
            color: #333;
            text-decoration: underline;
        }

        @media (max-width: 992px) {
            .text-content-card {
                padding: 36px 32px;
                height: auto;
            }

            .text-content-inner {
                height: auto;
                overflow-y: visible;
                padding-right: 0;
            }
        }

        @media (max-width: 576px) {
            .text-content-section {
                padding: 20px 0;
            }

            .text-content-card {
                padding: 28px 20px;
                border-radius: 20px;
                height: auto;
            }

            .text-content-heading {
                font-size: 20px !important;
            }

            .text-content-body p,
            .text-content-body ul li {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    @php
        $settings = $settings ?? [];
        $categories = $categories ?? [];
        $products = $products ?? [];
    @endphp

    @include('components.header')

    <main class="home-page">
        @include('components.herohome')
        @include('components.logo')
        <!-- Custom Printed Boxes for Every Industry Section -->
        <section class="custom-boxes-section">
            <div class="custom-boxes-container">

                <h2>Great Unboxing Starts with the Right Structure</h2>
                <p class="section-desc">Box opening changes customer’s experience instantly. Right structure anticipates a customer’s pleasant unboxing experience. Explore our rigid box styles and choose the one that matches your vision.</p>

                <div class="cards-grid">
                    @php
                        $featuredCatIds = (array) ($settings['featured_categories'] ?? []);
                        
                        // Categories from Home Settings
                        $settingCategories = collect($categories)->whereIn('id', $featuredCatIds);
                        
                        // Categories where "Show on home page" is checked
                        $homeCategories = collect($categories)->where('show_home', 1);
                        
                        // Combine both and ensure no duplicates, limit to 8
                        $featuredCategories = $homeCategories->merge($settingCategories)->unique('id')->take(8)->all();
                        
                        // Fallback if none are selected
                        if (empty($featuredCategories)) {
                            $featuredCategories = array_slice($categories, 0, 8);
                        }
                    @endphp

                    @foreach ($featuredCategories as $cat)
                        @php
                            $catSlug = $cat['slug'] ?? Str::slug($cat['title']);
                            $catUrl = url('/' . $catSlug) . '/';
                            $cImg = !empty($cat['image'])
                                ? (\Illuminate\Support\Str::startsWith($cat['image'], [
                                    'storage/',
                                    'uploads/',
                                    'images/',
                                ])
                                    ? $cat['image']
                                    : 'storage/' . $cat['image'])
                                : 'uploads/Gift-Boxes.webp';
                        @endphp
                        <a href="{{ $catUrl }}" class="industry-card">
                            <div class="industry-card__image-wrap">
                                <img src="{{ asset($cImg) }}" alt="{{ $cat['title'] }}" loading="lazy"
                                    onerror="this.src='https://placehold.co/275x266/dddddd/555555?text={{ urlencode($cat['title']) }}'">
                            </div>
                            <div class="industry-card__bottom">
                                <div class="industry-card__bottom-top">
                                    <span class="industry-card__title">{{ $cat['title'] }}</span>
                                    <span class="industry-card__arrow">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </span>
                                </div>
                                <p class="industry-card__text">
                                    {{ Str::limit(html_entity_decode(html_entity_decode(strip_tags($cat['description'] ?? 'Premium packaging with a luxury feel and durable structure.'))), 45) }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div><!-- /.cards-grid -->

                <!-- View All Categories Button -->
                <div class="view-all-wrap">
                    <a href="{{ url('/box-by-industry') }}/" class="view-all-btn">View All Categories</a>
                </div>

            </div><!-- /.custom-boxes-container -->
        </section>

        <!-- ═══════════════════════════════════════
             BEST SELLER PRODUCT SECTION
        ═══════════════════════════════════════ -->
        <style>
            .best-seller-section { padding: 60px 0; background: #fff; width: 100%; }
            .best-seller-container { max-width: 1280px; margin: 0 auto; padding: 0 55px; box-sizing: border-box; width: 100%; }
            .best-seller-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-top: 30px; width: 100%; }
            .bs-card { display: flex; flex-direction: column; align-items: center; text-decoration: none; }
            .bs-card__img-wrap { width: 100%; aspect-ratio: 1; border-radius: 12px; overflow: hidden; background: #F6F4F0; margin-bottom: 12px; }
            .bs-card__img-wrap img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s; }
            .bs-card:hover .bs-card__img-wrap img { transform: scale(1.05); }
            .bs-card__title { font-family: 'Open Sans', sans-serif; font-weight: 700; font-size: 15px; color: #222; text-align: center; }
            @media (max-width: 991px) { .best-seller-grid { grid-template-columns: repeat(3, 1fr); } }
            @media (max-width: 768px) { .best-seller-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; } }
        </style>
        <section class="best-seller-section">
            <div class="best-seller-container">
                <h2 style="font-family: 'Open Sans', sans-serif; font-size: 28px; font-weight: 700; color: #000; margin-bottom: 8px;">Best Seller Product</h2>
                <p style="font-family: 'DM Sans', sans-serif; font-size: 15px; color: #333; margin-bottom: 0;">Custom packaging for every industry, from retail and beauty to electronics&mdash;designed to fit your style and requirements.</p>

                <div class="best-seller-grid">
                    @php
                        $bestSellers = $featuredCategories ?? [];
                        if(count($bestSellers) < 8) {
                            $bestSellers = array_merge($bestSellers, array_fill(0, 8 - count($bestSellers), ['title' => 'Product Box', 'image' => 'uploads/Gift-Boxes.webp']));
                        }
                        $bestSellers = array_slice($bestSellers, 0, 8);
                    @endphp
                    @foreach($bestSellers as $item)
                        @php
                            $catSlug = $item['slug'] ?? Str::slug($item['title']);
                            $catUrl = url('/' . $catSlug) . '/';
                            $bsImg = !empty($item['image'])
                                ? (\Illuminate\Support\Str::startsWith($item['image'], ['storage/', 'uploads/', 'images/'])
                                    ? $item['image']
                                    : 'storage/' . $item['image'])
                                : 'uploads/Gift-Boxes.webp';
                        @endphp
                        <a href="{{ $catUrl }}" class="bs-card">
                            <div class="bs-card__img-wrap">
                                <img src="{{ asset($bsImg) }}" alt="{{ $item['title'] }}" loading="lazy" onerror="this.src='https://placehold.co/300x300/dddddd/555555?text={{ urlencode($item['title']) }}'">
                            </div>
                            <span class="bs-card__title">{{ $item['title'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════
             SEE AND FEEL THE DIFFERENCE SECTION
        ═══════════════════════════════════════ -->
        <!-- ═══════════════════════════════════════
             SEE AND FEEL THE DIFFERENCE SECTION
        ═══════════════════════════════════════ -->
        <style>
            .see-feel-section { padding: 40px 0; background: #fff; width: 100%; }
            .see-feel-inner {
                width: 100%;
                max-width: 1280px;
                margin: 0 auto;
                padding: 0 55px;
                box-sizing: border-box;
            }
            .see-feel-box {
                width: 100%;
                background: #0B2240;
                border-radius: 12px;
                padding: 50px 60px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 40px;
                box-sizing: border-box;
            }
            .see-feel-left { flex: 1; max-width: 500px; color: #fff; }
            .see-feel-heading { font-family: 'Open Sans', sans-serif; font-size: 32px; font-weight: 700; margin-bottom: 20px; line-height: 1.2; display: block; }
            .see-feel-desc { font-family: 'DM Sans', sans-serif; font-size: 14px; margin-bottom: 30px; line-height: 1.6; color: rgba(255,255,255,0.85); text-align: justify; }
            .see-feel-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                background: #FFB400;
                color: #0B2240;
                font-family: 'DM Sans', sans-serif;
                font-weight: 700;
                font-size: 15px;
                padding: 14px 36px;
                border-radius: 4px;
                text-decoration: none;
                transition: background 0.3s;
                width: 183px;
                height: 56px;
            }
            .see-feel-btn:hover { background: #e6a200; color: #0B2240; }
            
            .see-feel-right {
                flex: 1;
                background: #EBEBEB;
                border-radius: 12px;
                aspect-ratio: 16/10;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 20px;
                color: #000;
            }
            .sfr-icon { display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0.3; }
            .sfr-text { font-family: 'Open Sans', sans-serif; font-weight: 800; font-size: 24px; opacity: 1; margin: 0 10px; }

            @media (max-width: 991px) {
                .see-feel-box { flex-direction: column; padding: 40px 30px; }
                .see-feel-left { max-width: 100%; text-align: center; }
                .see-feel-desc { text-align: center; }
                .see-feel-right { width: 100%; }
            }
            @media (max-width: 768px) {
                .see-feel-inner { padding: 0 20px; }
            }
            @media (max-width: 480px) {
                .see-feel-inner { padding: 0 16px; }
            }
        </style>
        <section class="see-feel-section">
            <div class="see-feel-inner">
                <div class="see-feel-box">
                    <div class="see-feel-left">
                        <span class="see-feel-heading">See – and Feel – the Difference</span>
                        <p class="see-feel-desc">Explore the quality behind every package with our curated collection of sustainable packaging materials. Experience different textures, finishes, paper stocks, and print techniques firsthand to find the perfect combination for packaging that looks exceptional, feels premium, and reflects your brand.</p>
                        <a href="#" class="see-feel-btn">Shop Now</a>
                    </div>
                    <div class="see-feel-right">
                        <div class="sfr-icon">
                            <svg width="123" height="108" viewBox="0 0 24 24" fill="currentColor"><path d="M21 19V5C21 3.9 20.1 3 19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19ZM8.5 13.5L11 16.51L14.5 12L19 18H5L8.5 13.5Z"/></svg>
                        </div>
                        <span class="sfr-text">or</span>
                        <div class="sfr-icon">
                            <svg width="96.35" height="96.35" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 16.5V7.5L16 12L10 16.5Z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════
             MAKE YOUR BOX UNIQUELY YOURS SECTION
        ═══════════════════════════════════════ -->
        <style>
            .uniquely-yours-section {
                padding: 0px 0;
                background: #fff;
                text-align: center;
                width: 100%;
            }
            .uniquely-yours-container {
                max-width: 1280px;
                margin: 0 auto;
                padding: 0 55px;
                box-sizing: border-box;
                width: 100%;
            }
            .uy-heading {
                font-family: 'Open Sans', sans-serif;
                font-size: 32px;
                font-weight: 700;
                color: #000;
                margin-bottom: 10px;
                display: block;
            }
            .uy-desc {
                font-family: 'DM Sans', sans-serif;
                font-size: 15px;
                color: #555;
                max-width: 600px;
                margin: 0 auto 40px auto;
                line-height: 1.5;
            }
            .uy-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-auto-rows: 231px;
                gap: 18px;
                width: 100%;
                max-width: 100%;
                margin: 0;
            }
            .uy-card {
                position: relative;
                border-radius: 8px;
                overflow: hidden;
                background: #333;
            }
            .uy-card img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.4s ease;
            }
            .uy-card:hover img {
                transform: scale(1.05);
            }
            .uy-label {
                position: absolute;
                bottom: 20px;
                left: 20px;
                color: #fff;
                font-family: 'Open Sans', sans-serif;
                font-weight: 700;
                font-size: 16px;
                text-shadow: 0 1px 4px rgba(0,0,0,0.6);
                z-index: 2;
                margin: 0;
            }
            /* Gradient overlay for text readability */
            .uy-card::after {
                content: '';
                position: absolute;
                bottom: 0; left: 0; right: 0;
                height: 50%;
                background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);
                pointer-events: none;
                z-index: 1;
            }
            
            .uy-gloss { grid-column: span 2; }
            .uy-embossing { grid-column: span 2; }
            .uy-debossing { grid-column: span 2; }
            .uy-matte { grid-column: span 1; grid-row: span 2; }
            .uy-holo { grid-column: span 1; }
            .uy-silver { grid-column: span 1; }
            .uy-spot { grid-column: span 1; }
            .uy-gold { grid-column: span 1; }

            @media (max-width: 991px) {
                .uy-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
                .uy-gloss, .uy-embossing, .uy-debossing { grid-column: span 2; }
                .uy-matte { grid-row: span 1; }
            }
            @media (max-width: 575px) {
                .uy-grid {
                    grid-template-columns: 1fr;
                    grid-auto-rows: 200px;
                }
                .uy-gloss, .uy-embossing, .uy-debossing { grid-column: span 1; }
            }
        </style>

        <section class="uniquely-yours-section">
            <div class="uniquely-yours-container">
                <span class="uy-heading">Make Your Box Uniquely Yours</span>
                <p class="uy-desc">From size and material to finishes and custom details, create packaging that's made specifically for your brand.</p>
                
                <div class="uy-grid">
                <div class="uy-card uy-gloss">
                    <img src="{{ asset('uploads/gloss-lamination.webp') }}" alt="Gloss Lamination" onerror="this.src='https://placehold.co/610x231/111/fff?text=Gloss+Lamination'">
                    <span class="uy-label">Gloss Lamination</span>
                </div>
                <div class="uy-card uy-embossing">
                    <img src="{{ asset('uploads/embossing.webp') }}" alt="Embossing" onerror="this.src='https://placehold.co/610x231/f0f0f0/333?text=Embossing'">
                    <span class="uy-label">Embossing</span>
                </div>
                <div class="uy-card uy-debossing">
                    <img src="{{ asset('uploads/debossing.webp') }}" alt="Debossing" onerror="this.src='https://placehold.co/610x231/333/fff?text=Debossing'">
                    <span class="uy-label">Debossing</span>
                </div>
                <div class="uy-card uy-matte">
                    <img src="{{ asset('uploads/matte-lamination.webp') }}" alt="Matte Lamination" onerror="this.src='https://placehold.co/293x481/222/fff?text=Matte+Lamination'">
                    <span class="uy-label">Matte Lamination</span>
                </div>
                <div class="uy-card uy-holo">
                    <img src="{{ asset('uploads/addon-Holographic.webp') }}" alt="Holographic Foiling" onerror="this.src='https://placehold.co/293x231/333/fff?text=Holographic+Foiling'">
                    <span class="uy-label">Holographic Foiling</span>
                </div>
                <div class="uy-card uy-silver">
                    <img src="{{ asset('uploads/silver-Foiling.webp') }}" alt="Silver Foiling" onerror="this.src='https://placehold.co/293x231/444/fff?text=Silver+Foiling'">
                    <span class="uy-label">Silver Foiling</span>
                </div>
                <div class="uy-card uy-spot">
                    <img src="{{ asset('uploads/Spot-Gloss-UV.webp') }}" alt="Spot UV" onerror="this.src='https://placehold.co/293x231/111/fff?text=Spot+UV'">
                    <span class="uy-label">Spot UV</span>
                </div>
                <div class="uy-card uy-gold">
                    <img src="{{ asset('uploads/addon-gold-foil.webp') }}" alt="Gold Foiling" onerror="this.src='https://placehold.co/293x231/333/d4af37?text=Gold+Foiling'">
                    <span class="uy-label">Gold Foiling</span>
                </div>
            </div>
            </div>
        </section>

        <!-- ═══════════════════════════════════════
             WHY CHOOSE GO CUSTOM BOXES SECTION
        ═══════════════════════════════════════ -->
        <style>
            .why-choose-section-custom {
                padding: 80px 0;
                background: #fff;
                width: 100%;
            }
            .why-choose-inner {
                max-width: 1280px;
                margin: 0 auto;
                padding: 0 55px;
                box-sizing: border-box;
                width: 100%;
                display: flex;
                justify-content: space-between;
                gap: 40px;
                align-items: start;
            }
            .wcc-left {
                display: flex;
                flex-direction: column;
                flex: 0 0 468px;
                max-width: 468px;
            }
            .wcc-title {
                font-family: 'Open Sans', sans-serif;
                font-size: 28px;
                font-weight: 700;
                color: #000;
                margin-bottom: 15px;
                line-height: 1.2;
            }
            .wcc-desc {
                font-family: 'DM Sans', sans-serif;
                font-size: 14px;
                color: #555;
                margin-bottom: 25px;
                line-height: 1.5;
            }
            .wcc-collage {
                display: grid;
                grid-template-columns: 228px 228px;
                gap: 12px;
                width: 468px;
                height: 353px;
            }
            .wcc-col {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }
            .wcc-img {
                width: 100%;
                border-radius: 8px;
                object-fit: cover;
                display: block;
            }
            .wcc-right {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
                flex: 1;
            }
            .wcc-feature-card {
                background: #FBF6E9;
                border-radius: 8px;
                padding: 28px;
                display: flex;
                flex-direction: column;
                width: 100%;
                min-height: 241px;
                box-sizing: border-box;
            }
            .wcc-icon-wrap {
                width: 48px;
                height: 48px;
                background: #fff;
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 15px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            }
            .wcc-icon-wrap img {
                width: 24px;
                height: 24px;
                object-fit: contain;
            }
            .wcc-feature-title {
                font-family: 'Open Sans', sans-serif;
                font-size: 16px;
                font-weight: 700;
                color: #000;
                margin-bottom: 10px;
            }
            .wcc-feature-desc {
                font-family: 'DM Sans', sans-serif;
                font-size: 13px;
                color: #444;
                line-height: 1.5;
                margin: 0;
            }
            @media (max-width: 991px) {
                .why-choose-inner {
                    flex-direction: column;
                    align-items: center;
                    gap: 40px;
                }
                .wcc-left {
                    max-width: 100%;
                    width: 100%;
                }
                .wcc-collage {
                    width: 100%;
                    max-width: 468px;
                    margin: 0 auto;
                }
                .wcc-right {
                    max-width: 100%;
                    width: 100%;
                }
            }
            @media (max-width: 680px) {
                .wcc-right {
                    grid-template-columns: 1fr;
                    width: 100%;
                }
                .wcc-feature-card {
                    width: 100%;
                    height: auto;
                }
                .wcc-collage {
                    grid-template-columns: 1fr 1fr;
                    width: 100%;
                    height: auto;
                }
            }
            @media (max-width: 768px) {
                .why-choose-inner { padding: 0 20px; }
            }
            @media (max-width: 480px) {
                .why-choose-inner { padding: 0 16px; }
            }
        </style>

        <section class="why-choose-section-custom">
            <div class="why-choose-inner">
                
                <!-- LEFT CONTENT & COLLAGE -->
                <div class="wcc-left">
                    <h2 class="wcc-title">Why Choose Go Custom Boxes</h2>
                    <p class="wcc-desc">From concept to production, we make custom packaging simple, reliable, and tailored to your brand with quality materials and attention to detail.</p>
                    
                    <div class="wcc-collage">
                        <div class="wcc-col">
                            <img src="{{ asset('uploads/Bakery-Boxes.webp') }}" alt="Packaging 1" class="wcc-img" style="height: 209px;">
                            <img src="{{ asset('uploads/black-kraft.webp') }}" alt="Packaging 2" class="wcc-img" style="height: 132px;">
                        </div>
                        <div class="wcc-col">
                            <img src="{{ asset('uploads/blind-emboss.webp') }}" alt="Packaging 3" class="wcc-img" style="height: 132px;">
                            <img src="{{ asset('uploads/addon-gold-foil.webp') }}" alt="Packaging 4" class="wcc-img" style="height: 209px;">
                        </div>
                    </div>
                </div>

                <!-- RIGHT FEATURES -->
                <div class="wcc-right">
                    
                    <!-- Feature 1 -->
                    <div class="wcc-feature-card">
                        <div class="wcc-icon-wrap">
                            <img src="{{ asset('uploads/premium-quality.svg') }}" alt="Premium Quality">
                        </div>
                        <span class="wcc-feature-title">Premium Quality</span>
                        <p class="wcc-feature-desc">Every order undergoes a 12-point quality inspection. We use only premium-grade materials that look and feel exceptional.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="wcc-feature-card">
                        <div class="wcc-icon-wrap">
                            <img src="{{ asset('uploads/fast-flexible.svg') }}" alt="Fast & Flexible">
                        </div>
                        <span class="wcc-feature-title">Fast &amp; Flexible</span>
                        <p class="wcc-feature-desc">Average production time is just 7 days. Rush options are available on select products to help keep your packaging on schedule.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="wcc-feature-card">
                        <div class="wcc-icon-wrap">
                            <img src="{{ asset('uploads/design-support.svg') }}" alt="Design & Support">
                        </div>
                        <span class="wcc-feature-title">Design &amp; Support</span>
                        <p class="wcc-feature-desc">Enjoy unlimited design revisions and dedicated support from a packaging expert who understands your brand, specifications, and preferences from start to finish.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="wcc-feature-card">
                        <div class="wcc-icon-wrap">
                            <img src="{{ asset('uploads/plant-care.svg') }}" alt="Clear & Sustainable">
                        </div>
                        <span class="wcc-feature-title">Clear &amp; Sustainable</span>
                        <p class="wcc-feature-desc">No hidden fees or surprise charges. Get transparent pricing and recyclable packaging made from responsibly sourced materials.</p>
                    </div>

                </div>
            </div>
        </section>

        @include('components.testimonal')
        @include('components.customquote')
        @include('components.content')
        @include('components.blogs')
    </main>

    @include('components.footer')

    <script>
        function toggleMobileMenu() {
            document.getElementById('mobileSidebar').classList.toggle('active');
            document.getElementById('mobileOverlay').classList.toggle('active');
            document.body.style.overflow = document.getElementById('mobileSidebar').classList.contains('active') ?
                'hidden' : '';
        }

        /* ── Customize Every Detail — option switch + drag scroll ── */
        (function() {
            var cdoData = {
                foiling: [{
                        src: '{{ asset('uploads/addon-gold-foil.webp') }}',
                        label: 'Gold Foil'
                    },
                    {
                        src: '{{ asset('uploads/silver-Foiling.webp') }}',
                        label: 'Silver Foil'
                    },
                    {
                        src: '{{ asset('uploads/addon-Holographic.webp') }}',
                        label: 'Holographic Foil'
                    }
                ],
                embossing: [{
                        src: '{{ asset('uploads/embossing.webp') }}',
                        label: 'Embossing'
                    },
                    {
                        src: '{{ asset('uploads/debossing.webp') }}',
                        label: 'Debossing'
                    },
                    {
                        src: '{{ asset('uploads/blind-emboss.webp') }}',
                        label: 'Blind Emboss'
                    }
                ],
                laminations: [{
                        src: '{{ asset('uploads/gloss-lamination.webp') }}',
                        label: 'Gloss Lamination'
                    },
                    {
                        src: '{{ asset('uploads/matte-lamination.webp') }}',
                        label: 'Matte Lamination'
                    },
                    {
                        src: '{{ asset('uploads/soft-touch-lamination.webp') }}',
                        label: 'Soft-Touch Lamination'
                    }
                ],
                magnetic: [{
                        src: '{{ asset('uploads/magnetic-closure.webp') }}',
                        label: 'Magnetic Closure'
                    },
                    {
                        src: '{{ asset('uploads/luxury-magnetic.webp') }}',
                        label: 'Luxury Magnetic Box'
                    },
                    {
                        src: '{{ asset('uploads/presentation-magnetic.webp') }}',
                        label: 'Presentation Closure'
                    }
                ],
                inserts: [{
                        src: '{{ asset('uploads/foam-Insert.webp') }}',
                        label: 'Foam Insert'
                    },
                    {
                        src: '{{ asset('uploads/paper-insert.webp') }}',
                        label: 'Paper Insert'
                    },
                    {
                        src: '{{ asset('uploads/corrugated-insert.webp') }}',
                        label: 'Corrugated Insert'
                    }
                ],
                coating: [{
                        src: '{{ asset('uploads/uv-coating.webp') }}',
                        label: 'UV Coating'
                    },
                    {
                        src: '{{ asset('uploads/aqueous-coating.webp') }}',
                        label: 'Aqueous Coating'
                    },
                    {
                        src: '{{ asset('uploads/protective-varnish.webp') }}',
                        label: 'Protective Varnish'
                    }
                ]
            };

            // Preload all customization images in the background so tabs switch instantly
            window.addEventListener('load', function() {
                setTimeout(function() {
                    for (var key in cdoData) {
                        if (cdoData.hasOwnProperty(key)) {
                            cdoData[key].forEach(function(item) {
                                var img = new Image();
                                img.src = item.src;
                            });
                        }
                    }
                }, 500); // Start preloading half a second after page load
            });

            var bar = document.getElementById('cdoBar');

            window.switchCustomizeDetail = function(btn) {
                if (!btn || !bar) return;
                bar.querySelectorAll('.cdo-btn').forEach(function(b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');

                /* Smooth scroll selected option into the center of the scrollbar */
                try {
                    btn.scrollIntoView({
                        behavior: 'smooth',
                        inline: 'center',
                        block: 'nearest'
                    });
                } catch (err) {
                    // Fallback for older browsers
                    btn.scrollIntoView(false);
                }

                var data = cdoData[btn.dataset.cdo] || cdoData.foiling;
                data.forEach(function(item, i) {
                    var img = document.getElementById('cdo-img-' + (i + 1));
                    var lbl = document.getElementById('cdo-label-' + (i + 1));
                    if (img) {
                        img.src = item.src;
                        img.alt = item.label;
                    }
                    if (lbl) {
                        lbl.textContent = item.label;
                    }
                });
            };

            /* drag-to-scroll on options bar */
            var isDown = false,
                startX, scrollLeft;
            bar.addEventListener('pointerdown', function(e) {
                if (e.target.closest('.cdo-btn')) return;
                isDown = true;
                bar.classList.add('grabbing');
                startX = e.pageX - bar.offsetLeft;
                scrollLeft = bar.scrollLeft;
                bar.setPointerCapture(e.pointerId);
            });

            /* Buttons must remain normal clickable controls even though the
               surrounding pill supports drag-to-scroll. */
            bar.querySelectorAll('.cdo-btn').forEach(function(btn) {
                btn.addEventListener('pointerdown', function(e) {
                    e.stopPropagation();
                });
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.switchCustomizeDetail(btn);
                });
            });
            bar.addEventListener('pointermove', function(e) {
                if (!isDown) return;
                var x = e.pageX - bar.offsetLeft;
                bar.scrollLeft = scrollLeft - (x - startX);
            });
            ['pointerup', 'pointercancel'].forEach(function(ev) {
                bar.addEventListener(ev, function() {
                    isDown = false;
                    bar.classList.remove('grabbing');
                });
            });
        }());
    </script>

    <script>
        (function() {
            var cardsContainer = document.querySelector('.bestseller-cards');
            var dotsContainer = document.getElementById('bestsellerDots');
            if (!cardsContainer || !dotsContainer) return;

            var cards = cardsContainer.querySelectorAll('.bestseller-card');
            if (cards.length === 0) return;

            var currentIndex = 0;
            var autoPlayInterval;
            var dots = [];

            function renderDots() {
                var isMobile = window.innerWidth <= 768;
                var scrollMultiplier = isMobile ? 1 : 3;
                var numDots = Math.ceil(cards.length / scrollMultiplier);

                // Don't show dots if only 1 page
                if (numDots <= 1) {
                    dotsContainer.innerHTML = '';
                    dots = [];
                    return;
                }

                dotsContainer.innerHTML = '';
                dots = [];
                for (var i = 0; i < numDots; i++) {
                    var btn = document.createElement('button');
                    btn.type = 'button';
                    btn.className = (i === currentIndex) ? 'bestseller-dot active' : 'bestseller-dot';
                    btn.setAttribute('role', 'tab');
                    btn.setAttribute('aria-selected', (i === currentIndex) ? 'true' : 'false');
                    btn.setAttribute('aria-label', 'Best seller tab ' + (i + 1));
                    dotsContainer.appendChild(btn);
                    dots.push(btn);

                    (function(index) {
                        btn.addEventListener('click', function() {
                            currentIndex = index;
                            goToDot(index);
                            resetAutoPlay();
                        });
                    })(i);
                }
            }

            function goToDot(index) {
                if (dots.length === 0) return;
                dots.forEach(function(item) {
                    item.classList.remove('active');
                    item.setAttribute('aria-selected', 'false');
                });
                if (dots[index]) {
                    dots[index].classList.add('active');
                    dots[index].setAttribute('aria-selected', 'true');
                }

                var firstCard = cards[0];
                var cardWidth = firstCard ? firstCard.offsetWidth : 275;
                var isMobile = window.innerWidth <= 768;
                var scrollMultiplier = isMobile ? 1 : 3;
                cardsContainer.scrollTo({
                    left: index * (cardWidth + 20) * scrollMultiplier,
                    behavior: 'smooth'
                });
            }

            function nextSlide() {
                if (dots.length <= 1) return;
                currentIndex++;
                if (currentIndex >= dots.length) {
                    currentIndex = 0;
                }
                goToDot(currentIndex);
            }

            function resetAutoPlay() {
                clearInterval(autoPlayInterval);
                if (dots.length > 1) {
                    autoPlayInterval = setInterval(nextSlide, 3500); // Auto-play every 3.5 seconds
                }
            }

            // Initial render
            renderDots();
            resetAutoPlay();

            // Re-render on resize
            window.addEventListener('resize', function() {
                var oldDotsCount = dots.length;
                renderDots();
                if (dots.length !== oldDotsCount) {
                    currentIndex = 0;
                    goToDot(0);
                    resetAutoPlay();
                }
            });
        })();
    </script>

</body>

</html>
