<style>
    :root {
        --site-container-width: 1280px;
        --site-container-gutter: 55px;
        --primary-color: #0B2240;
        --secondary-color: #FFB400;
        --background-color: #FFFFFF;
        --footer-color: #0B2240;
        --header-bg: #FFFFFF;
        --topbar-bg: #0B2240;
        --section-text-color: #000000;
        --heading-h1-size: 32px;
        --heading-h2-size: 28px;
        --heading-h3-size: 24px;
        --heading-h4-size: 20px;
    }

    .header-container {
        width: 100% !important;
        max-width: var(--site-container-width) !important;
        padding-left: 55px !important;
        padding-right: 55px !important;
        margin-left: auto !important;
        margin-right: auto !important;
        box-sizing: border-box !important;
        min-width: 0;
    }

    @media (max-width: 768px) {
        .header-container {
            padding-left: 20px !important;
            padding-right: 20px !important;
        }
    }

    @media (max-width: 480px) {
        .header-container {
            padding-left: 16px !important;
            padding-right: 16px !important;
        }
    }

    .site-header {
        background: var(--header-bg);
        width: 100%;
        border-bottom: 0.2px solid rgba(0, 0, 0, 0.1);
        color: var(--primary-color);
        font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        position: sticky;
        top: 0;
        z-index: 1000;
        /* Isolate header from page CSS resets */
        line-height: normal;
        font-size: initial;
    }

    .site-header * {
        box-sizing: border-box;
    }

    .header-top {
        display: flex;
        align-items: center;
        width: 100%;
        min-height: 88px;
    }

    .header-logo {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #fff;
        flex: 0 0 205px;
        width: 205px;
        outline: none;
    }
    
    .header-logo:focus, .header-logo:active {
        outline: none;
        box-shadow: none;
    }

    .header-logo-img {
        width: 205px !important;
        height: 70px !important;
        display: block;
        flex-shrink: 0;
    }

    .header-search {
        width: clamp(240px, 20vw, 330px);
        max-width: 100%;
        position: relative;
        margin: 0 0 0 clamp(20px, 2.5vw, 45px) !important;
        flex: 0 1 330px;
    }

    .header-search input {
        width: 100%;
        height: 44px;
        background: transparent;
        border: 0.6px solid rgba(255, 255, 255, 0.6);
        border-radius: 7px;
        padding: 0 35px 0 48px;
        color: #fff;
        outline: none;
        transition: border-color 0.3s;
        font-family: inherit;
        font-size: 15px;
        margin: 0 !important;
    }

    .header-search input:focus {
        border-color: #fff;
    }

    .header-search input::placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    /* Fix for browser autofill white background */
    .header-search input:-webkit-autofill,
    .header-search input:-webkit-autofill:hover, 
    .header-search input:-webkit-autofill:focus, 
    .header-search input:-webkit-autofill:active {
        transition: background-color 5000s ease-in-out 0s;
        -webkit-text-fill-color: #fff !important;
        caret-color: #fff !important;
    }

    .header-search .search-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        width: 22px;
        height: 22px;
        fill: rgba(255, 255, 255, 0.8);
    }

    .header-search .clear-icon {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        width: 18px;
        height: 18px;
        fill: rgba(255, 255, 255, 0.6);
        cursor: pointer;
        transition: fill 0.2s;
    }

    .header-search .clear-icon:hover {
        fill: rgba(255, 255, 255, 1);
    }

    .header-contact {
        display: flex;
        align-items: center;
        gap: clamp(12px, 1.5vw, 24px);
        margin: 0 0 0 auto !important;
        flex: 0 0 auto;
        flex-shrink: 0;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 !important;
        padding: 0 !important;
        flex-shrink: 0;
        white-space: nowrap;
    }

    .contact-item-phone,
    .contact-item-email {
        min-width: 0;
    }

    .site-header .contact-item svg {
        width: 34px;
        height: 34px;
        flex-shrink: 0;
        fill: none;
        stroke: var(--primary-color);
        stroke-width: 1.5;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .contact-item-text {
        white-space: nowrap;
        font-variant-numeric: tabular-nums;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .contact-item-text span {
        display: block;
        font-size: 14px;
        color: #fff;
        font-weight: 700;
        white-space: nowrap;
        line-height: 1.2;
    }

    .contact-item-text strong {
        display: block;
        font-size: 16px;
        line-height: 1.35;
        font-weight: 400;
        margin-top: 1px;
        letter-spacing: 0;
        white-space: nowrap;
        font-variant-numeric: tabular-nums;
    }

    .get-quote-btn {
        background-color: #fff;
        color: var(--primary-color);
        width: auto;
        min-height: 44px;
        padding: 0 clamp(12px, 1.2vw, 20px);
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        transition: background-color 0.3s, color 0.3s;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 3px 5px rgba(55, 21, 22, .25);
        flex-shrink: 0;
        white-space: nowrap;
    }

    .get-quote-btn:hover {
        background-color: var(--secondary-color);
    }

    .header-bottom {

        position: relative;
    }

    .header-nav {
        display: flex;
        justify-content: center;
        width: 100%;
        min-height: 48px;
        list-style: none;
        gap: clamp(36px, 4vw, 62px);
        align-items: center;
        padding: 0;
        margin: 0;
    }

    @media (max-width: 768px) {
        :root { --site-container-gutter: 20px; }
    }

    @media (max-width: 480px) {
        :root { --site-container-gutter: 16px; }
    }

    .header-nav li {
        position: relative;
    }

    .header-nav li a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
        font-weight: 700;
        font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        line-height: 1;
        letter-spacing: normal;
        text-transform: none;
        transition: opacity 0.3s;
        display: inline-flex;
        align-items: center;
        padding: 12px 0;
        margin: 0;
    }

    .header-nav li a:hover {
        opacity: 0.85;
    }

    .header-nav li.has-mega > a::after {
        content: '';
        display: inline-block;
        width: 6px;
        height: 6px;
        margin: 0 0 2px 7px;
        border-right: 1.5px solid #fff;
        border-bottom: 1.5px solid #fff;
        transform: rotate(45deg);
        transition: transform 0.2s ease;
    }

    .header-nav li.has-mega:hover > a::after,
    .header-nav li.has-mega.active > a::after {
        transform: rotate(225deg) translateY(-2px);
    }

    /* Mega Menu Dropdown UI (Matching Screenshot Exactly) */
    .mega-menu {
        position: absolute;
        z-index: 1200;
        top: 100%;
        left: 50%;
        width: min(1020px, calc(100vw - 32px));
        padding: 26px 30px 20px;
        background: #FAF2F0;
        border: 1px solid #E8DCDA;
        border-radius: 12px;
        box-shadow: 0 18px 45px rgba(35, 15, 16, 0.22);
        opacity: 0;
        visibility: hidden;
        transform: translate(-50%, 8px);
        transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
    }

    .mega-menu.is-open {
        opacity: 1;
        visibility: visible;
        transform: translate(-50%, 0);
    }

    .mega-menu-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 16px 20px;
    }

    .mega-menu-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 10px;
        border-radius: 8px;
        text-decoration: none;
        color: #222222;
        font-size: 15px;
        font-weight: 600;
        line-height: 1.35;
        transition: background 0.15s ease, color 0.15s ease, transform 0.15s ease;
    }

    .mega-menu-item:hover {
        background: #F2E3E0;
        color: var(--primary-color);
        transform: translateX(2px);
    }

    .mega-menu-icon {
        width: 26px;
        height: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .mega-menu-icon svg {
        width: 22px;
        height: 22px;
        stroke: var(--primary-color);
        fill: none;
    }

    .mega-menu-icon img {
        width: 26px;
        height: 26px;
        display: block;
        object-fit: contain;
    }

    .mega-menu-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 22px;
        padding-top: 16px;
        border-top: 1px solid #E5D5D3;
    }

    .mega-menu-footer-left {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #1a1a1a;
        font-size: 15px;
        font-weight: 700;
    }

    .mega-menu-footer-icon {
        width: 26px;
        height: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
    }

    .mega-menu-cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 24px;
        border-radius: 6px;
        background: var(--primary-color);
        color: #ffffff !important;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(141, 68, 69, 0.22);
        transition: background 0.2s ease, transform 0.2s ease;
    }

    .mega-menu-cta:hover {
        background: #733435;
        transform: translateY(-1px);
    }

    /* Desktop only items & Scroll Behavior */
    @media (min-width: 1101px) {
        .mobile-actions, .mobile-overlay, .mobile-sidebar {
            display: none !important;
        }
        .site-header {
            transition: top 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    }



    /* Mobile Styles */
    @media (max-width: 1100px) {
        .header-top {
            height: 80px;
            padding: 0 5%;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 100%;
        }

        .header-search, .header-contact, .header-bottom {
            display: none !important;
        }

        .mobile-actions {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }

        .mobile-search-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile-search-btn svg {
            width: 24px;
            height: 24px;
            fill: #fff;
        }

        .mobile-menu-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
        }

        .mobile-menu-btn svg { width: 16px; height: 12px; stroke: none; }

        .mobile-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0,0,0,0.5);
            z-index: 998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .mobile-sidebar {
            position: fixed;
            top: 0;
            left: -80vw;
            width: 80vw;
            height: 100vh;
            background: var(--primary-color);
            z-index: 999;
            transition: left 0.3s ease;
            box-shadow: -2px 0 10px rgba(0,0,0,0.1);
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        .mobile-sidebar.active {
            left: 0;
        }

        .mobile-sidebar-header {
            padding: 20px;
            background: var(--primary-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .close-menu-btn {
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 5px;
        }

        .close-menu-btn svg {
            width: 28px;
            height: 28px;
            stroke: #fff;
            stroke-width: 2;
        }

        .mobile-sidebar-content {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .mobile-search {
            margin-bottom: 20px;
            position: relative;
        }

        .mobile-search input {
            width: 100%;
            padding: 12px 35px 12px 40px;
            border: 1px solid #ddd;
            border-radius: 4px;
            outline: none;
            font-family: inherit;
        }

        .mobile-search .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            fill: #888;
        }

        .mobile-search .clear-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            fill: #888;
            cursor: pointer;
        }

        .mobile-search .clear-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            fill: #aaa;
            cursor: pointer;
        }

        .mobile-nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .mobile-nav-item {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mobile-nav-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            cursor: pointer;
        }

        .mobile-nav-link-top,
        .mobile-nav > li > a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            font-family: 'DM Sans', 'Open Sans', sans-serif;
            display: block;
            flex: 1;
            padding: 12px 0;
        }

        .mobile-nav-header .mobile-nav-link-top {
            padding: 0;
        }

        .mobile-dropdown-toggle {
            background: none;
            border: none;
            padding: 4px 6px;
            cursor: pointer;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile-dropdown-toggle .chevron-icon {
            width: 18px;
            height: 18px;
            stroke: #fff;
            stroke-width: 2.2;
            transition: transform 0.3s ease;
        }

        .mobile-nav-item.has-dropdown.open .chevron-icon {
            transform: rotate(180deg);
        }

        .mobile-submenu {
            display: none;
            list-style: none;
            padding: 4px 0 12px 14px;
            margin: 0;
            flex-direction: column;
            gap: 6px;
        }

        .mobile-nav-item.has-dropdown.open .mobile-submenu {
            display: flex;
        }

        .mobile-submenu li a {
            color: #e0e0e0;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            font-family: 'DM Sans', sans-serif;
            display: block;
            padding: 6px 0;
            border: none;
            transition: color 0.2s ease;
        }

        .mobile-submenu li a:hover {
            color: var(--secondary-color);
        }

        .mobile-contact {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 30px;
        }

        .site-header .mobile-contact .contact-item svg {
            stroke: var(--primary-color);
        }

        .mobile-contact .contact-item-text span {
            color: #666;
        }

        .mobile-contact .contact-item-text strong {
            color: var(--primary-color);
        }
    }

    @media (max-width: 576px) {
        .header-logo-img {
            height: 60px;
        }
        .mobile-search-btn {
            margin-right: 5px;
        }
    }
</style>

<header class="site-header">
    <div class="header-topbar" style="background-color: var(--topbar-bg); color: #fff; padding: 12px 0; font-size: 14px;">
        <div class="header-container" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; gap: 30px;">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1.011 1.011 0 011.02-.24c1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                    <span>{{ $siteSettings['company_phone'] ?? '847-200-0971' }}</span>
                </div>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <span>{{ $siteSettings['company_email'] ?? 'support@gocustomboxes.com' }}</span>
                </div>
            </div>
            <div style="display: flex; align-items: center; gap: 15px;">
                <span>Follow Us:</span>
                <div style="display: flex; gap: 10px;">
                    <a href="#" style="background: #fff; color: var(--topbar-bg); border-radius: 8px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                    <a href="#" style="background: #fff; color: var(--topbar-bg); border-radius: 8px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                    <a href="#" style="background: #fff; color: var(--topbar-bg); border-radius: 8px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                    <a href="#" style="background: #fff; color: var(--topbar-bg); border-radius: 8px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29 29 0 001 11.75a29 29 0 00.46 5.33 2.78 2.78 0 001.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 001.94-2 29 29 0 00.46-5.33 29 29 0 00-.46-5.33zM9.75 15.02V8.48l6.19 3.27-6.19 3.27z"/></svg></a>
                </div>
            </div>
        </div>
    </div>
    
    @php
        $navCatsAll = $navCategories ?? [];
        $navParents = array_values(array_filter($navCatsAll, fn($c) => empty($c['parent_id'])));
        $navChildren = array_filter($navCatsAll, fn($c) => !empty($c['parent_id']));
        
        $navByParentSlug = [];
        foreach ($navParents as $parent) {
            $slug = $parent['slug'];
            $children = array_filter($navChildren, fn($c) => $c['parent_id'] == $parent['id']);
            $navByParentSlug[$slug] = array_values($children);
        }
        $navParentItems = $navParents;
    @endphp

    <div class="header-main header-container" style="display: flex; align-items: center; height: 80px;">
        <a href="/" class="header-logo" style="flex-shrink: 0; display: flex; align-items: center; margin-right: 30px;">
            <img src="{{ asset('uploads/header-logo.svg') }}" alt="The Rigid Boxes" class="header-logo-img" width="205" height="70" fetchpriority="high">
        </a>
        
        <ul class="header-nav" style="display: flex; align-items: center; justify-content: center; margin: 0; padding: 0; list-style: none; flex-grow: 1; gap: 28px;">
            <li><a href="/" style="color: var(--primary-color); text-decoration: none; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px;">Home</a></li>
            @foreach($navParentItems as $navParent)
            <li class="has-mega" data-mega-type="{{ $navParent['slug'] }}">
                <a href="{{ url('/' . $navParent['slug']) }}/" class="mega-trigger" style="color: var(--primary-color); text-decoration: none; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px;">{{ $navParent['title'] }}</a>
            </li>
            @endforeach
            <li><a href="/resources/" style="color: var(--primary-color); text-decoration: none; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px;">Resources</a></li>
        </ul>
        
        <div style="display: flex; align-items: center; gap: 24px; flex-shrink: 0; margin-left: 30px;">
            <button class="search-trigger-btn" style="background: none; border: none; cursor: pointer; color: var(--primary-color); padding: 0; display: flex; align-items: center;" onclick="document.getElementById('desktopSearchForm').style.display='flex';">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
            
            <a href="/request-quote/" class="get-quote-btn" style="background-color: var(--secondary-color); color: var(--primary-color); height: 48px; padding: 0 24px; border-radius: 4px; text-decoration: none; font-weight: 700; font-size: 16px; font-family: 'Plus Jakarta Sans', sans-serif; display: flex; align-items: center; justify-content: center; box-shadow: none; white-space: nowrap;">Get a Quote</a>
            
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()" style="display: none; background: none; border: none; color: var(--primary-color);">
                <svg width="16" height="12" viewBox="0 0 16 12" fill="var(--primary-color)"><rect x="0" y="0" width="16" height="2"/><rect x="0" y="5" width="16" height="2"/><rect x="0" y="10" width="16" height="2"/></svg>
            </button>
        </div>
    </div>

    <div id="desktopSearchForm" class="header-container" style="display: none; padding: 10px 0; border-top: 1px solid #eee;">
        <form action="/search" method="GET" style="display: flex; width: 100%; position: relative;">
            <input type="text" name="q" placeholder="Search products..." style="width: 100%; height: 44px; padding: 0 15px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
            <button type="button" onclick="this.parentElement.parentElement.style.display='none'" style="position: absolute; right: 10px; top: 10px; background: none; border: none; cursor: pointer;"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"></path></svg></button>
        </form>
    </div>

    <div class="header-bottom" style="display: none;">
    </div><!-- Mega Menu Panel -->
        <div class="mega-menu" id="megaMenu">
            <div class="mega-menu-grid" id="megaMenuGrid"></div>
            
            <div class="mega-menu-footer">
                <div class="mega-menu-footer-left">
                    <div class="mega-menu-footer-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#8D4445" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                            <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                            <path d="M14 22h-4"></path>
                        </svg>
                    </div>
                    <span>Need a custom packaging solution?</span>
                </div>
                <a href="/contact-us/" class="mega-menu-cta">Talk to us</a>
            </div>
        </div>
    </div>

    <!-- Mobile Sidebar -->
    <div class="mobile-overlay" id="mobileOverlay" onclick="toggleMobileMenu()"></div>
    <div class="mobile-sidebar" id="mobileSidebar">
        <div class="mobile-sidebar-header">
            <a href="/" class="header-logo" style="margin: 0;">
                <img src="{{ asset('uploads/header-logo.svg') }}" alt="The Rigid Boxes" class="header-logo-img">
            </a>
            <button class="close-menu-btn" onclick="toggleMobileMenu()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="mobile-sidebar-content">
            <form action="/search" method="GET" class="mobile-search">
                <svg class="search-icon" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
                <input type="text" name="q" placeholder="Search products..." oninput="this.nextElementSibling.style.display = this.value ? 'block' : 'none';">
                <svg class="clear-icon" viewBox="0 0 24 24" style="display: none; fill: none; stroke: #8D4445; stroke-width: 2;" onclick="this.previousElementSibling.value=''; this.style.display='none'; this.previousElementSibling.focus();">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </form>

            <ul class="mobile-nav">
                <li><a href="/" class="mobile-nav-link-top" style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">Home</a></li>
                @foreach($navParents as $navParent)
                    @php
                        $children = $navByParentSlug[$navParent['slug']] ?? [];
                    @endphp
                    @if(count($children) > 0)
                        <li class="mobile-nav-item has-dropdown">
                            <div class="mobile-nav-header" onclick="this.parentElement.classList.toggle('open')">
                                <a href="{{ url('/' . $navParent['slug']) }}/" class="mobile-nav-link-top" onclick="event.stopPropagation();">{{ $navParent['title'] }}</a>
                                <button type="button" class="mobile-dropdown-toggle" aria-label="Toggle {{ $navParent['title'] }} dropdown">
                                    <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </button>
                            </div>
                            <ul class="mobile-submenu">
                                @foreach($children as $child)
                                    <li>
                                        <a href="{{ url('/' . $child['slug']) }}/">{{ $child['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="mobile-nav-item">
                            <div class="mobile-nav-header">
                                <a href="{{ url('/' . $navParent['slug']) }}/" class="mobile-nav-link-top">{{ $navParent['title'] }}</a>
                            </div>
                        </li>
                    @endif
                @endforeach
                <li><a href="/blog/" class="mobile-nav-link-top" style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">Blog</a></li>
            </ul>

            <a href="/contact-us/" class="get-quote-btn" style="display:flex; width: 100%; text-align: center; justify-content: center; margin: 30px 0; background: #8D4445; color: #fff; padding: 12px 20px; border-radius: 4px; font-family: 'DM Sans', sans-serif; font-weight: 700; font-size: 16px; text-decoration: none;">Get Instant Quote</a>

            <div class="mobile-contact" style="margin-top: 0; gap: 0; display: flex; flex-direction: column; align-items: flex-start;">
                <h3 style="font-family: 'DM Sans', sans-serif; font-size: 18px; margin-bottom: 20px; color: #fff; text-align: left;">Get In Touch</h3>
                
                <div class="mobile-contact-item" style="display: flex; align-items: flex-start; justify-content: flex-start !important; gap: 15px; margin-bottom: 20px; width: 100%; text-align: left;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 20px; height: 20px; stroke: var(--secondary-color); flex-shrink: 0; margin-top: 2px;">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <span style="font-family: 'DM Sans', sans-serif; font-size: 16px; color: #fff; font-weight: 400; text-align: left;">{{ $siteSettings['company_phone'] ?? '1800-518-9441' }}</span>
                </div>

                <div class="mobile-contact-item" style="display: flex; align-items: flex-start; justify-content: flex-start !important; gap: 15px; margin-bottom: 20px; width: 100%; text-align: left;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 20px; height: 20px; stroke: var(--secondary-color); flex-shrink: 0; margin-top: 2px;">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <span style="font-family: 'DM Sans', sans-serif; font-size: 16px; color: #fff; font-weight: 400; text-align: left;">{{ $siteSettings['company_email'] ?? 'example@gmail.com' }}</span>
                </div>

                <div class="mobile-contact-item" style="display: flex; align-items: flex-start; justify-content: flex-start !important; gap: 15px; width: 100%; text-align: left;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 20px; height: 20px; stroke: var(--secondary-color); flex-shrink: 0; margin-top: 2px;">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span style="font-family: 'DM Sans', sans-serif; font-size: 16px; color: #fff; font-weight: 400; text-align: left;">{!! strip_tags(str_replace('<br>', ' ', $siteSettings['company_address'] ?? '1880 S Dairy Ashford Rd Suite 207 Houston, TX 77077')) !!}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    (function() {
        const giftBoxSvg = `<svg viewBox="0 0 24 24" fill="none" stroke="#8D4445" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="8" width="18" height="4" rx="1"></rect>
            <path d="M12 8v13"></path>
            <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
            <path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path>
        </svg>`;

        // Build megaData dynamically from DB categories
        @php
            $navCatsAll = $navCategories ?? [];
            $navParents = array_filter($navCatsAll, fn($c) => empty($c['parent_id']));
            $navChildren = array_filter($navCatsAll, fn($c) => !empty($c['parent_id']));
            
            // Map: parent_slug => [children]
            $navByParentSlug = [];
            foreach ($navParents as $parent) {
                $slug = $parent['slug'];
                $children = array_filter($navChildren, fn($c) => $c['parent_id'] == $parent['id']);
                $navByParentSlug[$slug] = array_values($children);
            }
        @endphp

        const megaData = {
            @foreach($navParents as $parent)
            "{{ $parent['slug'] }}": [
                @foreach($navByParentSlug[$parent['slug']] ?? [] as $child)
                @php
                    $childIcon = !empty($child['icon'])
                        ? (\Illuminate\Support\Str::startsWith($child['icon'], ['storage/', 'uploads/', 'images/'])
                            ? asset($child['icon'])
                            : asset('storage/' . $child['icon']))
                        : '';
                @endphp
                { title: @json($child['title']), slug: @json($child['slug']), icon: @json($childIcon) },
                @endforeach
            ],
            @endforeach
        };

        // Map nav li data-mega-type to parent slug
        const navMapping = {
            @foreach($navParents as $parent)
            "{{ $parent['slug'] }}": "{{ $parent['slug'] }}",
            @endforeach
        };

        const megaMenu = document.getElementById('megaMenu');
        const megaMenuGrid = document.getElementById('megaMenuGrid');
        const hasMegaLis = document.querySelectorAll('.has-mega');
        let activeType = null;
        let hoverTimeout = null;

        function renderMegaGrid(type) {
            // type can be the slug or a legacy type name like "industry"
            const items = megaData[type] || [];
            if (items.length === 0) {
                megaMenuGrid.innerHTML = '<p style="color:#999;padding:12px;font-size:13px;">No subcategories found.</p>';
                return;
            }
            megaMenuGrid.innerHTML = items.map(item => {
                const title = typeof item === 'string' ? item : item.title;
                const slug = typeof item === 'string' ? title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '') : item.slug;
                const icon = typeof item === 'object' ? item.icon : '';
                const iconHtml = icon
                    ? `<img src="${icon}" alt="" loading="lazy">`
                    : giftBoxSvg;
                return `<a href="/${slug}/" class="mega-menu-item">
                    <div class="mega-menu-icon">${iconHtml}</div>
                    <span>${title}</span>
                </a>`;
            }).join('');
        }

        function openMenu(type, li) {
            clearTimeout(hoverTimeout);
            activeType = type;
            hasMegaLis.forEach(l => l.classList.remove('active'));
            li.classList.add('active');
            renderMegaGrid(type);
            megaMenu.classList.add('is-open');
        }

        function closeMenu() {
            clearTimeout(hoverTimeout);
            hoverTimeout = setTimeout(() => {
                hasMegaLis.forEach(l => l.classList.remove('active'));
                megaMenu.classList.remove('is-open');
                activeType = null;
            }, 120);
        }

        hasMegaLis.forEach(li => {
            const type = li.dataset.megaType;
            li.addEventListener('mouseenter', () => openMenu(type, li));
            li.addEventListener('mouseleave', () => closeMenu());
        });

        megaMenu.addEventListener('mouseenter', () => clearTimeout(hoverTimeout));
        megaMenu.addEventListener('mouseleave', () => closeMenu());
    })();

    function toggleMobileMenu() {
        document.getElementById('mobileSidebar').classList.toggle('active');
        document.getElementById('mobileOverlay').classList.toggle('active');
        document.body.style.overflow = document.getElementById('mobileSidebar').classList.contains('active') ? 'hidden' : '';
    }

    function toggleMobileSearch() {
        const dropdown = document.getElementById('mobileSearchDropdown');
        if (dropdown.style.display === 'none' || dropdown.style.display === '') {
            dropdown.style.display = 'block';
            dropdown.querySelector('input').focus();
        } else {
            dropdown.style.display = 'none';
        }
    }

    // Sticky Navbar Scroll Behavior
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('.site-header');
        const headerTop = document.querySelector('.header-topbar');
        
        window.addEventListener('scroll', function() {
            if (window.innerWidth <= 1100) return;
            
            const currentScrollY = window.scrollY;
            const headerTopHeight = headerTop ? headerTop.offsetHeight : 42;
            
            if (currentScrollY > headerTopHeight) {
                header.style.top = `-${headerTopHeight}px`;
            } else {
                header.style.top = '0px';
            }
        }, { passive: true });
    });
</script>

<script>
    (function () {
        function imageNameFromSrc(image) {
            const source = image.currentSrc || image.getAttribute('src') || '';
            if (!source || source.startsWith('data:') || source.startsWith('blob:')) return '';

            try {
                const pathname = new URL(source, window.location.href).pathname;
                const filename = decodeURIComponent(pathname.split('/').pop() || '');
                return filename.replace(/\.[a-z0-9]+$/i, '');
            } catch (error) {
                return '';
            }
        }

        function applyImageMetadata(image) {
            const imageName = imageNameFromSrc(image);
            if (!imageName) return;

            const words = imageName
                .replace(/([a-z0-9])([A-Z])/g, '$1 $2')
                .replace(/[^a-zA-Z0-9]+/g, ' ')
                .trim()
                .split(/\s+/)
                .filter(Boolean);

            if (!words.length) return;

            image.alt = words.map(word => word.toLowerCase()).join('-');
            image.title = words
                .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
                .join(' ');
        }

        function applyToImages(root) {
            if (root instanceof HTMLImageElement) applyImageMetadata(root);
            if (root.querySelectorAll) root.querySelectorAll('img').forEach(applyImageMetadata);
        }

        function initializeImageMetadata() {
            applyToImages(document);

            document.addEventListener('load', event => {
                if (event.target instanceof HTMLImageElement) applyImageMetadata(event.target);
            }, true);

            new MutationObserver(mutations => {
                mutations.forEach(mutation => {
                    mutation.addedNodes.forEach(node => {
                        if (node.nodeType === Node.ELEMENT_NODE) applyToImages(node);
                    });
                });
            }).observe(document.body, { childList: true, subtree: true });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initializeImageMetadata);
        } else {
            initializeImageMetadata();
        }
    })();
</script>

<style>
@media (max-width: 991px) {
    .header-nav { display: none !important; }
    .get-quote-btn { display: none !important; }
    .header-topbar { display: none !important; }
    .header-main { justify-content: space-between !important; position: relative; }
    .header-logo { position: absolute !important; left: 50% !important; transform: translateX(-50%) !important; margin: 0 !important; }
    .header-logo-img { width: 175px !important; height: 60px !important; }
    .header-main > div { display: contents !important; }
    .mobile-menu-btn { display: block !important; order: -1 !important; margin-left: 0 !important; }
    .search-trigger-btn { order: 1 !important; margin-right: 0 !important; }
}
</style>













