<?php
$file = 'c:/Users/DELL/Desktop/go-custom/resources/views/components/header.blade.php';
$content = file_get_contents($file);

// Replace logo CSS robustly
$old_logo_css = "    .header-logo {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #fff;
        flex: 0 0 126px;
        width: 126px;
        outline: none;
    }";
$new_logo_css = "    .header-logo {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #fff;
        flex: 0 0 205px;
        width: 205px;
        outline: none;
    }";
$content = str_replace($old_logo_css, $new_logo_css, $content);

$old_logo_img_css = "    .header-logo-img {
        width: 126px !important;
        height: 64px !important;
        display: block;
        flex-shrink: 0;
    }";
$new_logo_img_css = "    .header-logo-img {
        width: 205px !important;
        height: 70px !important;
        display: block;
        flex-shrink: 0;
    }";
$content = str_replace($old_logo_img_css, $new_logo_img_css, $content);

// Replace mobile search btn layout which is directly beneath (sometimes causing regex overlap)
$old_mobile_css = "    @media (max-width: 576px) {
        .header-logo-img {
            height: 60px;
        }";
$new_mobile_css = "    @media (max-width: 576px) {
        .header-logo-img {
            height: 60px;
            width: auto !important;
        }";
$content = str_replace($old_mobile_css, $new_mobile_css, $content);


// Apply Figma design
$pattern_root = '/:root\s*\{[^}]+\}/i';
$new_root = <<<'CSS'
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
CSS;
$content = preg_replace($pattern_root, $new_root, $content, 1);

$pattern_site_header = '/\.site-header\s*\{\s*background:\s*var\(--header-gradient\);\s*width:\s*100%;\s*border-bottom:\s*0\.2px\s*solid\s*rgba\(255,\s*255,\s*255,\s*0\.2\);\s*color:\s*#fff;/is';
$new_site_header = <<<'CSS'
.site-header {
        background: var(--header-bg);
        width: 100%;
        border-bottom: 0.2px solid rgba(0, 0, 0, 0.1);
        color: var(--primary-color);
CSS;
$content = preg_replace($pattern_site_header, $new_site_header, $content, 1);

$html_start = '<header class="site-header">';
$html_end = '<!-- Mega Menu Panel -->';
$start_pos = strpos($content, $html_start);
$end_pos = strpos($content, $html_end);
if ($start_pos !== false && $end_pos !== false) {
    $new_html = <<<'HTML'
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
                    <a href="#" style="background: #fff; color: var(--topbar-bg); border-radius: 4px; width: 26px; height: 26px; display: flex; align-items: center; justify-content: center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                    <a href="#" style="background: #fff; color: var(--topbar-bg); border-radius: 4px; width: 26px; height: 26px; display: flex; align-items: center; justify-content: center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                    <a href="#" style="background: #fff; color: var(--topbar-bg); border-radius: 4px; width: 26px; height: 26px; display: flex; align-items: center; justify-content: center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></a>
                    <a href="#" style="background: #fff; color: var(--topbar-bg); border-radius: 4px; width: 26px; height: 26px; display: flex; align-items: center; justify-content: center;"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29 29 0 001 11.75a29 29 0 00.46 5.33 2.78 2.78 0 001.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 001.94-2 29 29 0 00.46-5.33 29 29 0 00-.46-5.33zM9.75 15.02V8.48l6.19 3.27-6.19 3.27z"/></svg></a>
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

    <div class="header-main header-container" style="display: flex; align-items: center; min-height: 90px;">
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
            <li><a href="/blog/" style="color: var(--primary-color); text-decoration: none; font-weight: 700; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 15px;">Blog</a></li>
        </ul>
        
        <div style="display: flex; align-items: center; gap: 24px; flex-shrink: 0; margin-left: 30px;">
            <button class="search-trigger-btn" style="background: none; border: none; cursor: pointer; color: var(--primary-color); padding: 0; display: flex; align-items: center;" onclick="document.getElementById('desktopSearchForm').style.display='flex';">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
            
            <a href="/request-quote/" class="get-quote-btn" style="background-color: var(--secondary-color); color: var(--primary-color); height: 48px; padding: 0 24px; border-radius: 4px; text-decoration: none; font-weight: 700; font-size: 16px; font-family: 'Plus Jakarta Sans', sans-serif; display: flex; align-items: center; justify-content: center; box-shadow: none; white-space: nowrap;">Get a Quote</a>
            
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()" style="display: none; background: none; border: none; color: var(--primary-color);">
                <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path></svg>
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
    </div>
HTML;
    $content = substr($content, 0, $start_pos) . $new_html . substr($content, $end_pos);
}

// Set up header logo everywhere else in the file (like the mobile menu)
$content = str_replace("asset('uploads/logo-rigid-boxes.svg')", "asset('uploads/header-logo.svg')", $content);

// Ensure responsive overrides
if (strpos($content, "@media (max-width: 991px)") === false) {
    $content .= "\n<style>\n@media (max-width: 991px) {\n    .header-nav { display: none !important; }\n    .get-quote-btn { display: none !important; }\n    .mobile-menu-btn { display: block !important; }\n    .header-topbar { display: none !important; }\n}\n</style>\n";
}

file_put_contents($file, $content);
echo "Done";
