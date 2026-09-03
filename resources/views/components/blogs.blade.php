<style>
    /* ─────────────────────────────────────────
       BLOGS / INSIGHTS SECTION
    ───────────────────────────────────────── */
    .blogs-section {
        background: var(--background-color, #FAF8F8);
        padding: 0.3125rem 0 2.1875rem 0;
        font-family: 'DM Sans', sans-serif;
    }

    .blogs-container {
        max-width: 90rem;
        margin: 0 auto;
        padding: 0 6.25rem;
    }

    .blogs-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-bottom: 2.5rem;
    }

    .blogs-header-text {
        max-width: 50rem;
    }

    .blogs-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        color: var(--section-text-color, #111);
        margin-bottom: 0.75rem;
    }

    .blogs-subtitle {
        font-size: 1rem;
        color: #444;
        line-height: 1.5;
    }

    .view-all-blogs-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: var(--secondary-color, #FFB400);
        color: var(--primary-color, #0B2240);
        font-weight: 700;
        font-size: 1rem;
        padding: 0.75rem 1.75rem;
        border-radius: 0.25rem;
        text-decoration: none;
        transition: background 0.3s;
        border: none;
        white-space: nowrap;
    }

    .view-all-blogs-btn:hover {
        background: #e6a200;
        color: var(--primary-color, #0B2240);
    }

    .mobile-btn-wrap {
        display: none;
    }

    .blog-dots {
        display: none;
    }

    .blogs-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }

    .blog-card {
        background: #fff;
        border: 1px solid #EAEAEA;
        border-radius: 1rem;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: box-shadow 0.3s, transform 0.3s;
        position: relative;
        -webkit-tap-highlight-color: transparent;
        min-height: 27.125rem;
        box-shadow: 0 0.25rem 0.9375rem rgba(0,0,0,0.03);
        cursor: pointer;
    }

    .blog-card:hover {
        box-shadow: 0 0.625rem 1.5625rem rgba(0,0,0,0.08);
        transform: translateY(-0.25rem);
    }

    .blog-card__image {
        width: calc(100% - 1.75rem);
        height: auto;
        aspect-ratio: 2 / 1;
        object-fit: contain;
        background: transparent;
        border-radius: 0.75rem;
        margin: 0.875rem auto 0;
        display: block;
    }

    .blog-card__content {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .blog-card__meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.8125rem;
        color: #666;
        margin-bottom: 0.875rem;
    }

    .blog-card__title {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.25rem;
        font-weight: 700;
        color: #111;
        line-height: 1.3;
        margin-bottom: 0.75rem;
        text-decoration: none;
        transition: color 0.3s;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
            }

    .blog-card__title::after {
        content: '';
        position: absolute;
        inset: 0;
        z-index: 1;
        -webkit-tap-highlight-color: transparent;
        height: 100%;
    }

    .blog-card a {
        -webkit-tap-highlight-color: transparent;
        height: 100%;
    }

    .blog-card:hover .blog-card__title {
        color: var(--primary-color, #8D4445);
    }

    .blog-card__desc {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-size: 0.875rem;
        color: var(--section-text-color);
        line-height: 1.6;
        margin-bottom: 1.5rem;
        flex: 1;
    }

    .blog-card__author {
        color: var(--section-text-color);
        font-weight: 500;
    }

    .blog-card__date {
        color: var(--section-text-color);
    }

    .blog-card__readmore {
        display: inline-flex;
        align-items: center;
        gap: 0.375rem;
        font-size: 0.9375rem;
        font-weight: 700;
        color: var(--primary-color, #8D4445);
        text-decoration: none;
        transition: color 0.3s;
        position: relative;
        z-index: 2;
    }

    .blog-card:hover .blog-card__readmore {
        color: var(--primary-color, #8D4445);
    }

    /* Responsive */
    @media (max-width: 75rem) {
        .blogs-container {
            padding: 0 5%;
        }
    }

    @media (max-width: 62rem) {
        .blogs-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 48rem) {
        .blogs-section {
            display: none !important;
        }
    }

    @media (max-width: 37.5rem) {
        .blogs-section {
            display: none !important;
        }

        .blogs-container {
            padding: 0 1rem 1.5625rem;
        }

        .blogs-header {
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 1.5rem;
            gap: 0.625rem;
        }

        .blogs-header-text {
            text-align: center;
        }

        .blogs-title {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .blogs-subtitle {
            font-size: 0.875rem;
            text-align: center;
            line-height: 1.45;
        }

        .desktop-btn {
            display: none !important;
        }

        .blogs-grid {
            display: flex !important;
            overflow-x: auto !important;
            scroll-snap-type: x mandatory !important;
            gap: 1rem !important;
            scrollbar-width: none !important;
            -ms-overflow-style: none !important;
            scroll-behavior: smooth;
        }

        .blogs-grid::-webkit-scrollbar {
            display: none !important;
        }

        .blog-card {
            flex: 0 0 100% !important;
            min-width: 100% !important;
            scroll-snap-align: center !important;
            border-radius: 1rem !important;
        }

        .blog-card:hover {
            box-shadow: none !important;
        }

        .blog-card__image {
            height: 13.125rem;
        }

        .blog-card__content {
            padding: 1.125rem 1rem 1.25rem;
        }

        .blog-card__title {
            font-size: 1.125rem;
        }

        .blog-card__desc {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
            font-size: 0.8438rem;
            margin-bottom: 1.125rem;
        }

        .blog-dots {
            display: flex !important;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1.125rem;
        }

        .blog-dot {
            width: 0.625rem;
            height: 0.625rem;
            border-radius: 50%;
            border: 0.0938rem solid #8D4445;
            background: transparent;
            cursor: pointer;
            transition: background 0.3s, border-color 0.3s;
        }

        .blog-dot.active {
            background: #8D4445;
        }

        .mobile-btn-wrap {
            display: flex !important;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .mobile-btn {
            width: 12.5rem;
            height: 2.875rem;
            font-size: 0.9375rem;
            border-radius: 0.25rem;
        }
    }
</style>

<section class="blogs-section">
    <div class="blogs-container">

        <div class="blogs-header">
            <div class="blogs-header-text">
                <span class="blogs-title" style="display: block;">Packaging Insights &amp; Industry Trends</span>
                <p class="blogs-subtitle">Stay updated with packaging trends, design ideas, and expert tips to make smarter packaging decisions.</p>
            </div>
            <a href="/blog/" class="view-all-blogs-btn desktop-btn">View All Blogs</a>
        </div>

        <div class="blogs-grid" id="blogsGrid">
            @if(isset($recentBlogs) && count($recentBlogs) > 0)
                @foreach($recentBlogs->take(3) as $blog)
                    @php
                        $bTitle = $blog->title ?? 'Sustainable Packaging Trends For 2026';
                        $bAuthor = $blog->author_name ?? null;
                        $authorSlug = $blog->author_slug ?? null;
                        
                        if (!$bAuthor) {
                            $defaultAuthor = \Illuminate\Support\Facades\DB::table('admin_authors')->first();
                            if ($defaultAuthor) {
                                $bAuthor = $defaultAuthor->title;
                                $authorSlug = $defaultAuthor->slug;
                            }
                        }
                        
                        $bAuthor = $bAuthor ?: 'Joe Danley';
                        $authorSlug = $authorSlug ?: \Illuminate\Support\Str::slug($bAuthor);

                        $bDate = !empty($blog->publish_date) ? date('M d, Y', strtotime($blog->publish_date)) : (!empty($blog->created_at) ? date('M d, Y', strtotime($blog->created_at)) : 'Nov 15, 2024');
                        $bExcerpt = $blog->excerpt ?? 'Explore how eco-friendly rigid boxes are transforming luxury packaging with sustainable';
                        $bSlug = $blog->slug ?? 'blog-detail';
                        $bImg = !empty($blog->image) ? asset($blog->image) : asset('uploads/industry-custom-luxury-box.jfif');
                        $bUrl = url('/blog/' . $bSlug);
                    @endphp
                    <article class="blog-card" onclick="window.location.href='{{ $bUrl }}';" style="cursor: pointer;">
                        <img src="{{ $bImg }}" alt="{{ $bTitle }}" class="blog-card__image" onerror="this.src='https://placehold.co/400x240/dddddd/555555?text=Blog+Image'">
                        <div class="blog-card__content">
                            <div class="blog-card__meta">
                                <a href="{{ url('/author/' . $authorSlug) }}" class="blog-card__author" style="color:inherit;text-decoration:none;z-index:2;position:relative;" onclick="event.stopPropagation();">{{ $bAuthor }}</a>
                                <span class="blog-card__date">{{ $bDate }}</span>
                            </div>
                            <a href="{{ $bUrl }}" class="blog-card__title" onclick="event.stopPropagation();">{{ $bTitle }}</a>
                            <p class="blog-card__desc">{{ Str::limit(html_entity_decode(html_entity_decode(strip_tags($bExcerpt))), 90) }}</p>
                            <div>
                                <a href="{{ $bUrl }}" class="blog-card__readmore" onclick="event.stopPropagation();">
                                    Read Blog
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            @else
                <!-- Card 1 Fallback -->
                <article class="blog-card">
                    <img src="{{ asset('uploads/industry-custom-luxury-box.jfif') }}" alt="Sustainable Packaging Trends" class="blog-card__image" onerror="this.src='https://placehold.co/400x240/dddddd/555555?text=Blog+Image'">
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <span class="blog-card__author">Joe Danley</span>
                            <span class="blog-card__date">Nov 15, 2024</span>
                        </div>
                        <a href="{{ url('/blog-detail') }}" class="blog-card__title">Sustainable Packaging Trends For 2026</a>
                        <p class="blog-card__desc">Explore how eco-friendly rigid boxes are transforming luxury packaging with sustainable</p>
                        <div>
                            <a href="{{ url('/blog-detail') }}" class="blog-card__readmore">
                                Read Blog
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endif
        </div>

        <!-- Mobile Pagination Dots -->
        <div class="blog-dots" id="blogDots">
            @if(isset($recentBlogs) && count($recentBlogs) > 0)
                @foreach($recentBlogs->take(3) as $i => $b)
                    <span class="blog-dot {{ $i === 0 ? 'active' : '' }}" data-index="{{ $i }}"></span>
                @endforeach
            @else
                <span class="blog-dot active" data-index="0"></span>
            @endif
        </div>

        <!-- Mobile View All Blogs Button -->
        <div class="mobile-btn-wrap">
            <a href="/blog/" class="view-all-blogs-btn mobile-btn">View All Blogs</a>
        </div>

    </div>
</section>

<script>
    (function () {
        var grid = document.getElementById('blogsGrid');
        var dots = document.querySelectorAll('#blogDots .blog-dot');
        if (!grid || !dots.length) return;

        grid.addEventListener('scroll', function () {
            var cardWidth = grid.offsetWidth;
            if (!cardWidth) return;
            var index = Math.round(grid.scrollLeft / cardWidth);
            dots.forEach(function (dot, i) {
                if (i === index) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        });

        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () {
                var cardWidth = grid.offsetWidth;
                grid.scrollTo({ left: i * cardWidth, behavior: 'smooth' });
            });
        });
    })();
</script>

