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
            height: 450px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 40px;
            background: #f5f5f5;
        }

        /* Title & Meta */
        .article-title {
            font-family: var(--font-heading);
            font-size: 40px;
            font-weight: 700;
            line-height: 1.2;
            margin: 0 0 20px 0;
        }
        .article-subtitle {
            font-size: 18px;
            color: var(--text-light);
            margin: 0 0 20px 0;
        }
        .article-meta {
            font-size: 14px;
            color: #888;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 50px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }
        .article-meta span.divider { color: #ccc; }

        /* Layout Grid */
        .content-layout {
            display: grid;
            grid-template-columns: minmax(0, 3fr) minmax(0, 1fr);
            gap: 60px;
            align-items: start;
        }

        /* Main Content */
        .main-content {
            font-size: 17px;
            color: #333;
            line-height: 1.8;
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
            background-color: var(--light-yellow);
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
        }
        .callout-label {
            font-family: var(--font-heading);
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 15px;
            color: var(--dark-blue);
            letter-spacing: 1px;
        }
        .callout-content {
            font-size: 16px;
        }

        /* CTA Banner */
        .cta-banner {
            background-color: var(--dark-blue);
            border-radius: 12px;
            padding: 30px 40px;
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
        }
        .cta-banner-sub {
            font-size: 14px;
            color: #ccc;
            margin-top: 5px;
        }
        .cta-btn {
            background-color: var(--yellow);
            color: #000;
            padding: 14px 28px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 16px;
            white-space: nowrap;
            transition: background 0.3s;
        }
        .cta-btn:hover { background-color: #e5a300; }

        /* Sidebar */
        .sidebar {
            position: sticky;
            top: 40px;
        }

        .widget {
            margin-bottom: 40px;
        }
        .widget-title {
            font-family: var(--font-heading);
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        /* Author Widget */
        .author-box {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
        .author-img {
            width: 70px;
            height: 70px;
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
            color: var(--text-light);
            margin-top: -10px;
            margin-bottom: 10px;
        }
        .author-bio {
            font-size: 14px;
            color: var(--text-light);
            line-height: 1.5;
        }

        /* TOC */
        .toc-list {
            list-style: none;
            padding: 0;
            margin: 0;
            border-left: 2px solid #f0f0f0;
        }
        .toc-item {
            margin-bottom: 15px;
            padding-left: 15px;
            position: relative;
        }
        .toc-item a {
            font-size: 14px;
            color: var(--text-light);
            transition: color 0.3s;
        }
        .toc-item.active {
            border-left: 2px solid var(--yellow);
            margin-left: -2px;
        }
        .toc-item.active a {
            color: var(--yellow);
            font-weight: 700;
        }
        .toc-item a:hover { color: var(--yellow); }

        /* Social Share */
        .share-icons {
            display: flex;
            gap: 10px;
        }
        .share-icon {
            width: 40px;
            height: 40px;
            border-radius: 6px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-dark);
            transition: all 0.3s;
        }
        .share-icon:hover {
            background: var(--dark-blue);
            color: #fff;
        }

        /* Related Blogs */
        .related-section {
            padding: 60px 0;
            border-top: 1px solid var(--border-color);
            margin-top: 60px;
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
            .content-layout { grid-template-columns: 1fr; }
            .sidebar { position: static; margin-top: 40px; }
            .blog-grid { grid-template-columns: repeat(2, 1fr); }
            .hero-img { height: 350px; }
        }
        @media (max-width: 768px) {
            .blog-grid { grid-template-columns: 1fr; }
            .article-title { font-size: 32px; }
            .cta-banner { flex-direction: column; text-align: center; gap: 20px; }
        }
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
        <div class="breadcrumb">
            <a href="{{ url('/') }}"><i class="fa-solid fa-house"></i> Home</a> <span>&gt;</span>
            <a href="{{ url('/blog') }}">Blog</a> <span>&gt;</span>
            {{ $fTitle }}
        </div>

        <!-- Hero Image -->
        <img src="{{ $fImg }}" alt="{{ $fTitle }}" class="hero-img" onerror="this.src='{{ asset('uploads/about-us-banner.webp') }}'">

        <!-- Title & Meta -->
        <h1 class="article-title">{{ $fTitle }}</h1>
        <p class="article-subtitle">{{ $blog['excerpt'] ?? 'Discover the latest packaging trends shaping modern brands, from sustainable materials to premium finishes and memorable unboxing experiences.' }}</p>
        
        <div class="article-meta">
            <span>Published: {{ $publishDate }}</span>
            <span class="divider">|</span>
            <span>Last Updated: {{ $updateDate }}</span>
            <span class="divider">|</span>
            <span>8 min read</span>
        </div>

        <!-- 2 Column Layout -->
        <div class="content-layout">
            
            <!-- Left: Main Content -->
            <div class="main-content">
                
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
                    <p>As brands continue to compete for attention, packaging is becoming more thoughtful, functional, and visually distinctive. Here are seven packaging trends that are shaping the industry in 2026.</p>

                    <h2>1. Sustainable Materials Take Center Stage</h2>
                    <p>Sustainability continues to influence packaging decisions across industries. Brands are increasingly exploring recyclable, responsibly sourced, and lightweight materials that reduce environmental impact without compromising quality.</p>
                    <p>Kraft paper, recycled paperboard, and other responsible material options are becoming popular choices for brands that want their packaging to reflect their environmental values.</p>

                    <h2>2. Minimalist Packaging With a Strong Identity</h2>
                    <p>Less can often say more. Clean layouts, simple typography, restrained spacing, and balanced color palettes are helping brands create packaging that feels modern and premium.</p>

                    <h2>3. Premium Finishes Create an Unforgettable Experience</h2>
                    <p>Texture and finishing can completely change how packaging looks and feels. Matte coatings, soft-touch finishes, foil stamping, embossing, and spot UV are being used to create more distinctive packaging experiences.</p>
                @endif

                <!-- CTA Banner -->
                <div class="cta-banner">
                    <div>
                        <div class="cta-banner-text">Need custom packaging for your product?</div>
                        <div class="cta-banner-sub">Get pricing, samples, and expert advice — no commitment required.</div>
                    </div>
                    <a href="{{ url('/contact-us') }}" class="cta-btn">Get a Free Quote</a>
                </div>

            </div>

            <!-- Right: Sidebar -->
            <div class="sidebar">
                
                <!-- Author Widget -->
                <div class="widget">
                    <div class="widget-title">Written by</div>
                    <div class="author-box">
                        <img src="{{ $authorImg }}" alt="{{ $authorName }}" class="author-img" onerror="this.src='{{ asset('images/ahmed-khan.png') }}'">
                        <div>
                            <div class="author-name">{{ $authorName }}</div>
                            <div class="author-role">{{ $authorDesc }}</div>
                        </div>
                    </div>
                </div>

                <!-- TOC Widget -->
                <div class="widget">
                    <div class="widget-title">Table of Contents</div>
                    <ul class="toc-list" id="tocList">
                        <!-- Populated by JS -->
                    </ul>
                </div>

                <!-- Share Widget -->
                <div class="widget">
                    <div class="widget-title">Share Article</div>
                    <div class="share-icons">
                        <a href="#" class="share-icon"><i class="fa-solid fa-link"></i></a>
                        <a href="#" class="share-icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="share-icon"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="share-icon"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

            </div>

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
