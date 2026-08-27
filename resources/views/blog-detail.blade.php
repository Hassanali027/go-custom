<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('uploads/favicon-rigid-boxes.webp') }}" type="image/webp">
    @include('components.canonical')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog['meta_title'] ?? ($blog['title'] ?? 'Blog Detail') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --dark-blue: #0A2240;
            --yellow: #FFB400;
            --light-yellow: #FFF8E7;
            --text-dark: #111827;
            --text-light: #4B5563;
            --border-color: #EAEAEA;
            --container-width: 1280px;
            --margin-sides: 55px;
            --font-heading: 'Open Sans', sans-serif;
            --font-body: 'DM Sans', sans-serif;
        }

        body {
            margin: 0;
            font-family: var(--font-body);
            background-color: #FFFFFF;
            color: var(--text-dark);
            line-height: 1.6;
        }

        * { box-sizing: border-box; }
        
        a { text-decoration: none; color: inherit; }

        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 var(--margin-sides);
        }

        .blog-detail-section {
            padding: 40px 0 60px 0;
        }

        /* Breadcrumb */
        .breadcrumb {
            font-family: var(--font-heading);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 30px;
            color: var(--text-dark);
        }
        .breadcrumb a {
            color: var(--text-dark);
            text-decoration: none;
        }
        .breadcrumb span { margin: 0 8px; color: #999; }

        /* Hero Image */
        .hero-img {
            width: 100%;
            height: 430px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 40px;
            background: #f5f5f5;
        }

        /* Title & Meta */
        .article-title {
            font-family: var(--font-heading); /* Or 'Plus Jakarta Sans' if added, but var(--font-heading) is fine */
            font-size: 32px;
            font-weight: 700;
            line-height: 40px;
            margin: 0 0 15px 0;
            color: #111;
            text-align: justify;
        }
        .article-subtitle {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #000;
            margin: 0 0 25px 0;
            line-height: 26px;
            text-align: justify;
        }
        .article-meta {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: #000;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 40px;
        }
        .article-meta span.divider { color: #888; }

        /* Layout Grid */
        .content-layout {
            display: grid;
            grid-template-columns: minmax(0, 3fr) minmax(0, 1fr);
            gap: 60px;
            align-items: start;
        }

        /* Main Content */
        .main-content {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #000;
            line-height: 30px;
            letter-spacing: 0px;
            text-align: justify;
        }

        .main-content h2 {
            font-family: var(--font-heading);
            font-size: 28px;
            margin: 40px 0 20px 0;
            color: var(--dark-blue);
        }
        .main-content h3 {
            font-family: var(--font-heading);
            font-size: 22px;
            margin: 30px 0 15px 0;
        }
        .main-content p {
            margin-bottom: 20px;
        }
        .main-content ul, .main-content ol {
            margin-bottom: 20px;
            padding-left: 20px;
        }
        .main-content li {
            margin-bottom: 10px;
        }

        /* Key Takeaways Box (Mapping from .callout-box) */
        .callout-box {
            background-color: #FDF9EE;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
        }
        .callout-box li {
            margin-bottom: 15px;
        }
        .callout-label {
            font-family: var(--font-heading);
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 15px;
            color: var(--dark-blue);
            letter-spacing: 0.5px;
        }
        .callout-content {
            font-size: 16px;
        }

        /* CTA Banner */
        .cta-banner {
            background-color: var(--dark-blue);
            border-radius: 12px;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 50px;
            color: #fff;
        }
        .cta-banner-text {
            font-family: var(--font-heading);
            font-size: 22px;
            font-weight: 700;
            color: var(--yellow);
        }
        .cta-banner-sub {
            font-size: 14px;
            color: #ccc;
            margin-top: 5px;
        }
        .cta-btn {
            background-color: var(--yellow);
            color: #000;
            width: 169px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            white-space: nowrap;
            text-decoration: none;
            transition: background 0.3s;
        }
        .cta-btn:hover { background-color: #e5a300; }

        /* Sidebar */
        .sidebar {
            position: sticky;
            top: 40px;
            border-left: 1px solid #eaeaea;
            padding-left: 30px;
        }

        .widget {
            margin-bottom: 40px;
        }
        .widget-title {
            font-family: var(--font-heading);
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #000;
        }

        .author-share-card {
            border: 1px solid #EAEAEA;
            border-radius: 8px;
            padding: 24px;
            margin-bottom: 30px;
            background: #fff;
        }
        .author-share-card .widget { margin-bottom: 0; }
        .card-divider {
            border: none;
            border-top: 1px dotted #ccc;
            margin: 24px 0;
        }

        /* Author Widget */
        .author-box {
            margin-bottom: 30px;
        }
        .author-profile {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }
        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
        .author-name {
            font-family: var(--font-heading);
            font-size: 18px;
            font-weight: 700;
            color: var(--dark-blue);
        }
        .author-role {
            font-size: 13px;
            color: #666;
            margin-top: 5px;
        }
        .author-bio {
            font-size: 14px;
            color: #000;
            line-height: 1.5;
            text-align: justify;
        }

        /* TOC */
        .toc-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .toc-item {
            margin-bottom: 15px;
            position: relative;
        }
        .toc-item a {
            font-size: 16px;
            color: #444;
            transition: color 0.3s;
            text-decoration: none;
        }
        .toc-item.active a {
            color: var(--dark-blue);
            font-weight: 500;
        }
        .toc-item a:hover { color: var(--dark-blue); }

        /* Social Share */
        .share-icons {
            display: flex;
            gap: 10px;
        }
        .share-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: #EAEAEA;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            font-size: 18px;
            transition: all 0.3s;
            text-decoration: none;
        }
        .share-icon:hover {
            background: var(--dark-blue);
            color: #fff;
        }

        /* Related Blogs */
        .related-section {
            padding: 20px 0 0 0;
        }
        .related-title {
            font-family: var(--font-heading);
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .blog-card {
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            background: #fff;
            transition: transform 0.3s;
        }
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }
        .blog-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-bottom: 1px solid var(--border-color);
        }
        .card-content {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .card-meta {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #888;
            margin-bottom: 15px;
            font-weight: 500;
        }
        .blog-card h3 {
            font-family: var(--font-heading);
            font-size: 18px;
            font-weight: 700;
            margin: 0 0 15px 0;
            line-height: 1.4;
        }
        .card-link {
            margin-top: auto;
            color: var(--dark-blue);
            font-weight: 700;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .card-link i { color: var(--yellow); }

        @media (max-width: 991px) {
            .content-layout { grid-template-columns: 1fr; gap: 0; }
            .sidebar { position: static; margin-top: 0; }
            .blog-grid { grid-template-columns: repeat(2, 1fr); }
            .hero-img { height: 350px; }
        }
        @media (max-width: 768px) {
            .container { padding: 0 16px; }
            .blog-detail-section { padding-top: 0; }
            .breadcrumb { display: none !important; }
            .hero-img { 
                width: 100vw; 
                margin-left: calc(-50vw + 50%); 
                border-radius: 0; 
                height: 300px;
                margin-bottom: 25px;
            }
            .article-title { 
                font-size: 24px; 
                line-height: 34px;
                text-align: left;
                width: 100%;
                display: block;
            }
            .article-meta {
                flex-wrap: wrap;
                gap: 10px 16px;
                line-height: 1.6;
            }
            .toc-widget { display: none !important; }
            .desktop-cta { display: none !important; }
            .mobile-cta { display: flex !important; margin-top: 30px; }
            .blog-grid { grid-template-columns: 1fr; }
            .cta-banner { flex-direction: column; text-align: center; gap: 20px; }
        }
        
        .mobile-cta { display: none; }
    </style>
</head>
<body>

@include('components.header')

@php 
    $authorName = !empty($blog['joined_author_name']) ? $blog['joined_author_name'] : (!empty($blog['author_name']) ? $blog['author_name'] : 'Joe Stanley');
    $authorSlug = $blog['joined_author_slug'] ?? ($blog['author_slug'] ?? 'joe-stanley');
    $authorImgPath = !empty($blog['joined_author_image']) ? $blog['joined_author_image'] : (!empty($blog['author_image']) ? $blog['author_image'] : null);
    $authorDesc = !empty($blog['joined_author_desc']) ? $blog['joined_author_desc'] : (!empty($blog['author_description']) ? $blog['author_description'] : 'Packaging Design Expert');

    $authorImg = $authorImgPath ? (\Illuminate\Support\Str::startsWith($authorImgPath, ['http', 'storage/', 'uploads/', 'images/']) ? asset($authorImgPath) : asset('storage/'.$authorImgPath)) : asset('images/ahmed-khan.png'); 
    
    $publishDate = !empty($blog['publish_date']) ? date('M j, Y', strtotime($blog['publish_date'])) : (!empty($blog['created_at']) ? date('M j, Y', strtotime($blog['created_at'])) : 'Aug 12, 2026');
    $updateDate = !empty($blog['updated_at']) ? date('M j, Y', strtotime($blog['updated_at'])) : 'May 27, 2026';
    
    $fTitle = $blog['title'] ?? '7 Packaging Trends That Will Shape Brands in 2026';
    $fImg = !empty($blog['image']) ? asset($blog['image']) : asset('uploads/about-us-banner.webp');
@endphp

<main class="blog-detail-section">
    <div class="container">
        
        <!-- Breadcrumbs -->
        <div class="breadcrumb" style="display: flex; align-items: center; gap: 8px;">
            <a href="{{ url('/') }}" style="display: flex; align-items: center; gap: 5px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg> Home
            </a> 
            <span style="color: #666; font-size: 12px;">&gt;</span>
            <a href="{{ url('/blog') }}">Blog</a> 
            <span style="color: #666; font-size: 12px;">&gt;</span>
            {{ Str::limit($fTitle, 18) }}
        </div>

        <!-- Hero Image -->
        <img src="{{ $fImg }}" alt="{{ $fTitle }}" class="hero-img" onerror="this.src='{{ asset('uploads/about-us-banner.webp') }}'">

        <!-- 2 Column Layout -->
        <div class="content-layout">
            
            <!-- Left: Main Content -->
            <div class="main-content">
                
                <!-- Title & Meta -->
                <h1 class="article-title">{{ $fTitle }}</h1>
                <p class="article-subtitle">{{ $blog['excerpt'] ?? 'Discover the latest packaging trends shaping modern brands, from sustainable materials to premium finishes and memorable unboxing experiences.' }}</p>
                
                <div class="article-meta">
                    <span>Published: {{ $publishDate }}</span>
                    <span class="divider">•</span>
                    <span>Last Updated: {{ $updateDate }}</span>
                    <span class="divider">•</span>
                    <span>8 min read</span>
                </div>
                
                @if(!empty($blog['content']))
                    {!! $blog['content'] !!}
                @else
                    <div class="callout-box">
                        <div class="callout-label">KEY TAKEAWAYS</div>
                        <div class="callout-content">
                            <ul>
                                <li>Eco-friendly and responsible materials are becoming increasingly important for modern packaging.</li>
                                <li>Clean, minimalist designs can create a stronger and more premium brand identity.</li>
                                <li>Premium finishes, such as foil, embossing, and soft-touch can make packaging more memorable.</li>
                                <li>A thoughtful unboxing experience can strengthen customer engagement and brand connection.</li>
                                <li>Effective packaging should balance appearance, functionality, protection, and brand identity.</li>
                            </ul>
                        </div>
                    </div>

                    <p>Packaging has evolved far beyond a simple way to protect a product. Today, it plays an important role in how customers recognize, experience, and remember a brand. From the moment a package arrives at a customer's doorstep to the satisfaction of opening it, every detail can influence how a product is perceived.</p>

                    <h2>What is Offset Printing?</h2>
                    <p>Offset printing is a common printing technique in which the inked image is transferred from a plate to a rubber blanket, then to the printing surface.</p>

                    <h2>Offset Lithography vs Digital Printing</h2>
                    <p>While digital printing is ideal for short runs, offset lithography remains the most cost-effective solution for high-volume jobs while delivering superior color fidelity.</p>

                    <h2>The Pre-Press Stage</h2>
                    <p>Before any ink touches the paper, the pre-press stage ensures all digital files are perfectly converted to plates, ready for the press.</p>
                    
                    <h2>The Printing Stage</h2>
                    <p>Once plates are loaded, the printing stage begins, transferring the image with incredible speed and precision.</p>

                    <h2>The Post-Press Stage</h2>
                    <p>After printing, the sheets are cut, folded, and bound, turning flat paper into finished products.</p>

                    <h2>Quality Control and Inspection</h2>
                    <p>Throughout the process, rigorous quality control ensures every printed piece meets exact standards.</p>

                    <h2>Types of Offset Litho-Printing</h2>
                    <p>There are several types of offset printing, each suited for different applications and materials.</p>

                    <h2>Web Offset Printing</h2>
                    <p>Web offset printing uses rolls of paper rather than individual sheets, making it ideal for extremely high-volume printing like newspapers and catalogs.</p>
                @endif

                <!-- CTA Banner (Desktop) -->
                <div class="cta-banner desktop-cta">
                    <div>
                        <div class="cta-banner-text">Need custom packaging for your product?</div>
                        <div class="cta-banner-sub">Get pricing, samples, and expert advice — no commitment required.</div>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="cta-btn">Get a Free Quote</a>
                </div>

            </div>

            <!-- Right: Sidebar -->
            <div class="sidebar">
                
                <div class="author-share-card">
                    <!-- Author Widget -->
                    <div class="widget">
                        <div class="widget-title">Written by</div>
                        <div class="author-box">
                            <div class="author-profile">
                                <img src="{{ $authorImg }}" alt="{{ $authorName }}" class="author-img" onerror="this.src='{{ asset('images/ahmed-khan.png') }}'">
                                <div>
                                    <div class="author-name">{{ $authorName }}</div>
                                    <div class="author-role">{{ $authorDesc }}</div>
                                </div>
                            </div>
                            <div class="author-bio">
                                5+ years in content strategy — building packaging case studies, guides, and blogs.
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="border: none; border-top: 1px dotted #ccc; margin: 30px 0;" class="toc-widget">

                <!-- TOC Widget -->
                <div class="widget toc-widget">
                    <div class="widget-title">Table Of Content</div>
                    <ul class="toc-list" id="tocList">
                        <!-- Populated by JS -->
                    </ul>
                </div>
                
                <hr style="border: none; border-top: 1px dotted #ccc; margin: 30px 0;" class="toc-widget">

                <!-- Share Widget -->
                <div class="widget">
                    <div class="widget-title">Share Article</div>
                    <div class="share-icons">
                        <a href="#" class="share-icon"><i class="fa-solid fa-link"></i></a>
                        <a href="#" class="share-icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="share-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                            </svg>
                        </a>
                        <a href="#" class="share-icon"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

                <hr style="border: none; border-top: 1px dotted #ccc; margin: 30px 0;" class="toc-widget">

                <!-- TOC Widget -->
                <div class="widget toc-widget">
                    <div class="widget-title">Table Of Content</div>
                    <ul class="toc-list" id="tocList">
                        <!-- Populated by JS -->
                    </ul>
                </div>

            </div>

        </div>

        <!-- CTA Banner (Mobile) -->
        <div class="cta-banner mobile-cta">
            <div>
                <div class="cta-banner-text">Need custom packaging for your product?</div>
                <div class="cta-banner-sub">Get pricing, samples, and expert advice — no commitment required.</div>
            </div>
            <a href="{{ url('/contact-us') }}" class="cta-btn">Get a Free Quote</a>
        </div>

    </div>
    
    <!-- FAQs Component -->
    @include('components.product-faq')

    <!-- Related Blogs -->
    <div class="container">
        <div class="related-section">
            <h2 class="related-title">Related Blogs</h2>
            <div class="blog-grid">
                @if(!empty($recentBlogs) && count($recentBlogs) > 0)
                    @foreach($recentBlogs as $rb)
                        @php
                            $bTitle = $rb->title ?? 'The Ultimate Guide To Choosing The Right Custom Packaging For Your Brand';
                            $bAuthor = $rb->author_name ?? 'Joe Stanley';
                            $bSlug = $rb->slug ?? 'blog-detail';
                            $bImg = !empty($rb->image) ? asset($rb->image) : asset('uploads/about-us-banner.webp');
                            $bUrl = url('/blog/' . $bSlug);
                        @endphp
                        <div class="blog-card" onclick="window.location.href='{{ $bUrl }}';">
                            <img src="{{ $bImg }}" alt="{{ $bTitle }}" onerror="this.src='{{ asset('uploads/about-us-banner.webp') }}'">
                            <div class="card-content">
                                <div class="card-meta">
                                    <span>{{ $bAuthor }}</span>
                                    <span>8 min read</span>
                                </div>
                                <h3>{{ $bTitle }}</h3>
                                <a href="{{ $bUrl }}" class="card-link" onclick="event.stopPropagation();">Read Blog <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback / Dummy blogs if empty -->
                    @for($i=0; $i<3; $i++)
                    <div class="blog-card" onclick="window.location.href='#';">
                        <img src="{{ asset('uploads/about-us-banner.webp') }}" alt="Packaging Box">
                        <div class="card-content">
                            <div class="card-meta">
                                <span>Joe Stanley</span>
                                <span>8 min read</span>
                            </div>
                            <h3>The Ultimate Guide To Choosing The Right Custom Packaging For Your Brand</h3>
                            <a href="#" class="card-link">Read Blog <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @endfor
                @endif
            </div>
        </div>
    </div>
</main>

@include('components.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
    var mainContent = document.querySelector('.main-content');
    var tocList = document.getElementById('tocList');
    if (!mainContent || !tocList) return;

    var headings = mainContent.querySelectorAll('h2');
    if (headings.length === 0) {
        document.getElementById('tocList').parentElement.style.display = 'none';
        return;
    }

    headings.forEach(function (heading, index) {
        var id = 'heading-' + index;
        heading.setAttribute('id', id);

        var li = document.createElement('li');
        li.className = 'toc-item';
        if(index === 0) li.classList.add('active');

        var a = document.createElement('a');
        a.href = '#' + id;
        a.textContent = heading.textContent.trim();
        
        a.addEventListener('click', function (e) {
            e.preventDefault();
            heading.scrollIntoView({ behavior: 'smooth', block: 'start' });
            document.querySelectorAll('.toc-item').forEach(i => i.classList.remove('active'));
            li.classList.add('active');
        });

        li.appendChild(a);
        tocList.appendChild(li);
    });

    window.addEventListener('scroll', function () {
        var scrollY = window.scrollY + 100;
        var activeIndex = 0;
        headings.forEach(function (heading, index) {
            if (heading.offsetTop <= scrollY) {
                activeIndex = index;
            }
        });
        tocList.querySelectorAll('.toc-item').forEach(function (item, i) {
            if (i === activeIndex) item.classList.add('active');
            else item.classList.remove('active');
        });
    });
});
</script>

</body>
</html>
