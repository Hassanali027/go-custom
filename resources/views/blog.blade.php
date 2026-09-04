<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('uploads/go-custom-boxes-favicon.png') }}" type="image/png">
    @include('components.canonical')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Go Custom Boxes</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    
    <style>
        :root {
            --dark-blue: #0A2240;
            --yellow: #FFB400;
            --text-dark: #333333;
            --text-light: #666666;
            --container-width: 80rem;
            --margin-sides: 3.4375rem;
            --font-heading: 'Open Sans', sans-serif;
            --font-body: 'DM Sans', sans-serif;
        }

        body {
            margin: 0;
            font-family: var(--font-body);
            background-color: #FFFFFF;
            color: var(--text-dark);
        }

        * {
            box-sizing: border-box;
        }

        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 var(--margin-sides);
        }



        /* Content Section */
        .blog-content {
            padding: 1.875rem 0;
        }

        /* Featured Post */
        .featured-post {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            align-items: center;
            margin-bottom: 2.5rem;
        }

        .featured-img {
            width: 100%;
            height: auto;
            border-radius: 0.75rem;
            background-color: transparent;
        }

        .featured-copy h2 {
            font-family: var(--font-heading);
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin: 0 0 1.25rem 0;
            line-height: 1.3;
        }

        .featured-copy p.excerpt {
            font-size: 1rem;
            color: var(--text-light);
            line-height: 1.6;
            margin: 0 0 1.25rem 0;
        }

        .meta {
            font-size: 0.875rem;
            color: #888;
            margin-bottom: 1.5625rem;
            display: flex;
            align-items: center;
            gap: 0.3125rem;
        }

        .read-btn {
            background-color: var(--yellow);
            color: #000;
            width: 8.75rem;
            height: 2.75rem;
            border-radius: 0.375rem;
            font-weight: 700;
            font-size: 0.9375rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: background 0.3s;
        }

        .read-btn:hover {
            background-color: #e5a300;
        }

        /* Blog Grid */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 23.875rem));
            justify-content: center;
            gap: 1.875rem;
            margin-bottom: 3.125rem;
        }

        .blog-card {
            border: 1px solid #EAEAEA;
            border-radius: 1rem;
            max-width: 23.875rem;
            min-height: 27.125rem;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            background: #fff;
            box-shadow: 0 0.25rem 0.9375rem rgba(0,0,0,0.03);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .blog-card:hover {
            transform: translateY(-0.3125rem);
            box-shadow: 0 0.5rem 1.5625rem rgba(0,0,0,0.06);
        }

        .blog-card img {
            width: calc(100% - 1.75rem);
            height: auto;
            aspect-ratio: 2 / 1;
            object-fit: contain;
            background: transparent;
            border-radius: 0.75rem;
            margin: 0.875rem auto 0;
            display: block;
        }

        .card-content {
            padding: 1.25rem 1.5rem 1.5rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .card-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.9375rem;
            color: #1a1a1a;
            margin-bottom: 0.75rem;
            font-weight: 500;
        }

        .blog-card h3 {
            font-family: var(--font-heading);
            font-size: 1.25rem !important;
            font-weight: 700;
            margin: 0 0 1.25rem 0;
            color: var(--text-dark);
            line-height: 1.4;
        }

        .card-link {
            margin-top: auto;
            color: var(--dark-blue);
            font-weight: 700;
            font-size: 0.875rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.3125rem;
        }
        
        .card-link i {
            color: var(--dark-blue);
        }

        /* Load More */
        .load-more-wrap {
            text-align: center;
            margin-top: 1.25rem;
        }

        /* Responsive */
        @media (max-width: 61.9375rem) {
            .container {
                padding: 0 1.5rem;
            }
            .featured-post {
                grid-template-columns: 1fr;
                gap: 1.875rem;
                margin-bottom: 2.5rem;
            }
            .featured-img {
                height: 22.5rem;
                border-radius: 1rem;
            }
            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.25rem;
            }
        }

        @media (max-width: 48rem) {
            .container {
                padding: 0 1rem;
            }
            .blog-hero {
                padding: 0 1rem;
                height: 25rem;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .blog-hero h1 {
                font-size: 2rem;
                margin-top: 0.3125rem;
                margin-bottom: 0.625rem;
            }
            .blog-hero p {
                font-size: 0.875rem;
                line-height: 1.5;
            }
            .breadcrumb {
                display: none;
            }
            .blog-content {
                padding: 1.5rem 0 2.5rem;
            }
            .featured-post {
                grid-template-columns: 1fr;
                gap: 1.125rem;
                margin-bottom: 2.1875rem;
            }
            .featured-img {
                width: 100%;
                height: auto;
                border-radius: 1rem;
            }
            .featured-copy {
                padding: 0;
            }
            .featured-copy h2 {
                font-size: 1.3125rem;
                font-weight: 700;
                line-height: 1.35;
                margin: 0 0 0.75rem 0;
                color: #000;
            }
            .featured-copy p.excerpt {
                text-align: justify;
                font-size: 0.875rem;
                line-height: 1.6;
                color: #555;
                margin: 0 0 0.9375rem 0;
            }
            .meta {
                font-size: 0.8125rem;
                color: #888;
                margin-bottom: 1.125rem;
            }
            .read-btn {
                height: 2.5rem;
                width: 7.8125rem;
                font-size: 0.8438rem;
            }
            .blog-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }
        }
    </style>
</head>
<body>
    @include('components.header')

    <main>
        <x-about-hero 
            title="Blog"
            description="Discover packaging ideas, industry trends, design inspiration, and practical tips to help your brand stand out."
            bgImage="uploads/blog-hero.webp"
            mobileBgImage="uploads/blog-hero-mobile.webp"
          
            breadcrumb="Blog"
            overlay="rgba(10, 34, 64, 0.6)"
        />

        <section class="blog-content">
            <div class="container">
                
                @php
                    $featuredBlog = null;
                    $displayBlogs = [
                        ['title' => 'Sustainable Packaging Trends For 2026', 'blog_category' => 'packaging', 'image' => 'images/Frame 571 (1).png', 'author_name' => 'Joe Danley', 'publish_date' => '2024-11-15', 'excerpt' => 'Explore how eco-friendly rigid boxes are transforming luxury packaging with sustainable materials.', 'slug' => 'sustainable-packaging-trends'],
                        ['title' => 'The Ultimate Guide To Choosing The Right Custom Packaging For Your Brand', 'blog_category' => 'packaging', 'image' => 'images/Frame 571 (1).png', 'author_name' => 'Joe Stanley', 'publish_date' => '2024-11-15', 'excerpt' => 'Learn how to make the right packaging choices.', 'slug' => 'ultimate-guide-custom-packaging'],
                        ['title' => 'The Ultimate Guide To Choosing The Right Custom Packaging For Your Brand', 'blog_category' => 'packaging', 'image' => 'images/Frame 571 (1).png', 'author_name' => 'Joe Stanley', 'publish_date' => '2024-11-15', 'excerpt' => 'Learn how to make the right packaging choices.', 'slug' => 'ultimate-guide-custom-packaging'],
                        ['title' => 'The Ultimate Guide To Choosing The Right Custom Packaging For Your Brand', 'blog_category' => 'packaging', 'image' => 'images/Frame 571 (1).png', 'author_name' => 'Joe Stanley', 'publish_date' => '2024-11-15', 'excerpt' => 'Learn how to make the right packaging choices.', 'slug' => 'ultimate-guide-custom-packaging'],
                        ['title' => 'The Ultimate Guide To Choosing The Right Custom Packaging For Your Brand', 'blog_category' => 'packaging', 'image' => 'images/Frame 571 (1).png', 'author_name' => 'Joe Stanley', 'publish_date' => '2024-11-15', 'excerpt' => 'Learn how to make the right packaging choices.', 'slug' => 'ultimate-guide-custom-packaging'],
                        ['title' => 'The Ultimate Guide To Choosing The Right Custom Packaging For Your Brand', 'blog_category' => 'packaging', 'image' => 'images/Frame 571 (1).png', 'author_name' => 'Joe Stanley', 'publish_date' => '2024-11-15', 'excerpt' => 'Learn how to make the right packaging choices.', 'slug' => 'ultimate-guide-custom-packaging'],
                    ];
                    if (!empty($blogs) && count($blogs) > 0) {
                        $blogsArray = json_decode(json_encode($blogs), true);
                        $featuredBlog = $blogsArray[0];
                        $displayBlogs = array_slice($blogsArray, 1);
                    } else {
                        // Mock feature blog if no DB
                        $featuredBlog = [
                            'title' => '7 Packaging Trends That Will Shape Brands In 2026',
                            'image' => 'uploads/blog-content img.png',
                            'author_name' => 'Joe Stanley',
                            'publish_date' => '2026-08-12',
                            'excerpt' => 'Discover the latest packaging trends transforming how brands present their products from sustainable materials to premium designs.',
                            'slug' => '7-packaging-trends-2026'
                        ];
                    }
                @endphp

                <!-- Featured Post -->
                @if($featuredBlog)
                    @php
                        $fTitle = $featuredBlog['title'] ?? '';
                        $fExcerpt = $featuredBlog['excerpt'] ?? '';
                        $fSlug = $featuredBlog['slug'] ?? '';
                        $fImg = !empty($featuredBlog['image']) ? asset($featuredBlog['image']) : asset('uploads/about-us-banner.webp');
                        $fUrl = url('/blog/' . $fSlug);
                        $fAuthor = $featuredBlog['author_name'] ?? 'Joe Stanley';
                        $fAuthorSlug = $featuredBlog['author_slug'] ?? \Illuminate\Support\Str::slug($fAuthor);
                        $fDate = !empty($featuredBlog['publish_date']) ? date('M d, Y', strtotime($featuredBlog['publish_date'])) : 'Aug 12, 2026';
                        $fExcerptText = trim(strip_tags(html_entity_decode(html_entity_decode($fExcerpt, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
                    @endphp
                    <div class="featured-post">
                        <img src="{{ $fImg }}" alt="{{ $fTitle }}" class="featured-img" onerror="this.src='{{ asset('uploads/about-us-banner.webp') }}'">
                        <div class="featured-copy">
                            <h2>{{ $fTitle }}</h2>
                            <p class="excerpt">{{ Str::limit($fExcerptText, 150) }}</p>
                            <div class="meta">
                                <a href="{{ url('/author/' . $fAuthorSlug) }}" style="text-decoration: none; color: inherit;">{{ $fAuthor }}</a> &nbsp;|&nbsp; {{ $fDate }}
                            </div>
                            <a href="{{ $fUrl }}" class="read-btn">Read Blog <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endif

                <!-- Grid -->
                <div class="blog-grid">
                    @foreach($displayBlogs as $index => $item)
                        @php
                            $item = (array) $item;
                            $bTitle = $item['title'] ?? 'The Ultimate Guide To Choosing The Right Custom Packaging For Your Brand';
                            $bAuthor = $item['author_name'] ?? 'Joe Stanley';
                            $bAuthorSlug = $item['author_slug'] ?? \Illuminate\Support\Str::slug($bAuthor);
                            $bSlug = $item['slug'] ?? 'blog-detail';
                            $bImg = !empty($item['image']) ? asset($item['image']) : asset('uploads/about-us-banner.webp');
                            $bUrl = url('/blog/' . $bSlug);
                        @endphp
                        <div class="blog-card {{ $index >= 9 ? 'blog-card-hidden' : '' }}" onclick="window.location.href='{{ $bUrl }}';" @if($index >= 9) style="display:none;" @endif>
                            <img src="{{ $bImg }}" alt="{{ $bTitle }}" onerror="this.src='{{ asset('uploads/about-us-banner.webp') }}'">
                            <div class="card-content">
                                <div class="card-meta">
                                    <a href="{{ url('/author/' . $bAuthorSlug) }}" onclick="event.stopPropagation();" style="text-decoration: none; color: inherit;"><span>{{ $bAuthor }}</span></a>
                                    <span>8 min read</span>
                                </div>
                                <h3>{{ $bTitle }}</h3>
                                <a href="{{ $bUrl }}" class="card-link" onclick="event.stopPropagation();">Read Blog <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Load More -->
                @if(count($displayBlogs) > 9)
                <div class="load-more-wrap">
                    <button type="button" class="read-btn" id="blogLoadMore" style="border:none; cursor:pointer; width: 12.625rem; height: 3.375rem;">Load more</button>
                </div>
                <script>
                    document.getElementById('blogLoadMore').addEventListener('click', function () {
                        var hidden = document.querySelectorAll('.blog-card-hidden');
                        for (var i = 0; i < 9 && i < hidden.length; i++) {
                            hidden[i].style.display = '';
                            hidden[i].classList.remove('blog-card-hidden');
                        }
                        if (document.querySelectorAll('.blog-card-hidden').length === 0) {
                            this.parentElement.style.display = 'none';
                        }
                    });
                </script>
                @endif

            </div>
        </section>
        
        @include('components.cta')
    </main>

    @include('components.footer')
</body>
</html>

