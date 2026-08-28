<style>
    .testimonial-section {
        background: var(--secondary-color, #FAF8F8);
        padding: 1.25rem 0 0.3125rem;
        position: relative;
        font-family: 'DM Sans', sans-serif;
        overflow: hidden;
    }

    .testimonial-container {
        max-width: 87.5rem;
        margin: 0 auto;
        position: relative;
        padding: 0 1.5rem;
        box-sizing: border-box;
    }

    .testimonial-header {
        text-align: center;
        margin-bottom: 0.625rem;
    }

    .testimonial-title {
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        font-size: 2rem;
        line-height: 1.2;
        text-transform: capitalize;
        color: #111;
        margin-bottom: 0.75rem;
    }

    .testimonial-subtitle {
        font-family: 'DM Sans', sans-serif;
        font-weight: 400;
        font-size: 1rem;
        line-height: 1.5;
        text-align: justify;
        color: #333;
        max-width: 46.25rem;
        margin: 0 auto;
    }

    /* Slider Wrapper & Controls */
    .testimonial-slider-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.25rem;
        width: 100%;
        margin-top: 0;
    }

    .testimonial-slider {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        max-width: 76.25rem;
        position: relative;
        overflow: hidden;
    }

    .testimonial-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
    }

    /* Desktop: 2 Cards Side-by-Side */
    .testimonial-card-wrap {
        flex: 0 0 50%;
        display: flex;
        justify-content: center;
        padding: 1.875rem 1.125rem 0.9375rem 1.5625rem;
        box-sizing: border-box;
    }

    .testimonial-card {
        width: 100%;
        max-width: 32rem;
        height: 14.375rem;
        background: #0B0B0B;
        border-radius: 1rem;
        position: relative;
        display: flex;
        align-items: center;
        padding: 1.25rem 1.25rem 1.25rem 13.125rem;
        color: #FFF;
        box-sizing: border-box;
        overflow: visible;
    }

    .testimonial-img {
        position: absolute;
        left: 0;
        top: -1.25rem;
        width: 10rem;
        height: 15.625rem;
        border-radius: 1rem;
        object-fit: cover;
        z-index: 5;
    }

    .testimonial-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        width: 100%;
        height: 100%;
        text-align: left;
    }

    .testimonial-stars {
        color: #F5C518;
        font-size: 0.875rem;
        margin-bottom: 0.625rem;
        display: flex;
        align-items: center;
        gap: 0.3125rem;
    }

    .testimonial-stars span {
        color: #CCC;
        font-size: 0.75rem;
        margin-left: 0.5rem;
    }

    .testimonial-text {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.8438rem;
        line-height: 1.45;
        color: rgba(255, 255, 255, 0.95);
        margin-bottom: 0.75rem;
    }

    .testimonial-author {
        font-family: 'DM Sans', sans-serif;
        font-weight: 700;
        font-size: 0.9375rem;
        color: #FFF;
        margin-bottom: 0.125rem;
    }

    .testimonial-role {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.75rem;
        color: #AAA;
    }

    .testimonial-dots-icon {
        position: absolute;
        right: -0.875rem;
        top: 40%;
        width: 2rem;
        height: 2rem;
        background: #FFF;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color, #8D4445);
        box-shadow: 0 0.25rem 0.625rem rgba(0,0,0,0.2);
        z-index: 4;
    }

    /* Desktop Navigation Arrow Buttons */
    .nav-btn {
        width: 3rem;
        height: 3rem;
        background: var(--primary-color, #8D4445);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFF;
        border: none;
        cursor: pointer;
        z-index: 10;
        transition: background 0.3s, transform 0.2s;
        flex-shrink: 0;
    }

    .nav-btn:hover {
        background: #5F2D2F;
        transform: scale(1.05);
    }

    /* Pagination Dots */
    .pagination-dots {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
        margin-top: 0.625rem;
    }

    .page-dot {
        width: 0.75rem;
        height: 0.75rem;
        border-radius: 50%;
        border: 0.0938rem solid #000;
        background: transparent;
        cursor: pointer;
        transition: background 0.3s, border-color 0.3s;
    }

    .page-dot.active {
        background: var(--primary-color, #8D4445);
        border-color: var(--primary-color, #8D4445);
    }

    .page-dot.desktop-hide {
        display: none;
    }

    /* Mobile Responsive View — 1 Card per Slide */
    @media (max-width: 48rem) {
        .testimonial-section {
            padding: 1.25rem 0 0.3125rem;
        }

        .testimonial-container {
            padding: 0 1rem;
        }

        .testimonial-header {
            margin-bottom: 0.625rem;
        }

        .testimonial-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .testimonial-subtitle {
            font-size: 0.8438rem;
            line-height: 1.45;
            max-width: 21.25rem;
        }

        .nav-btn {
            display: none !important;
        }

        .testimonial-card-wrap {
            flex: 0 0 100%;
            padding: 1.5rem 0.9375rem 0.625rem 0.9375rem;
        }

        .testimonial-card {
            max-width: 100%;
            height: 12.1875rem;
            padding: 1.5rem 0.75rem 1rem 9.6875rem;
            border-radius: 1rem;
        }

        .testimonial-img {
            width: 8.4375rem;
            height: 13.125rem;
            left: 0;
            top: -0.9375rem;
            border-radius: 1rem;
        }

        .testimonial-dots-icon {
            right: -0.75rem;
            top: 38%;
            width: 1.625rem;
            height: 1.625rem;
        }

        .testimonial-dots-icon svg {
            width: 0.75rem;
            height: 0.25rem;
        }

        .testimonial-stars {
            font-size: 0.75rem;
            margin-bottom: 0.375rem;
            gap: 0.1875rem;
        }

        .testimonial-stars span {
            font-size: 0.6562rem;
            margin-left: 0.25rem;
        }

        .testimonial-text {
            font-size: 0.75rem;
            line-height: 1.4;
            margin-bottom: 0.5rem;
        }

        .testimonial-author {
            font-size: 0.8438rem;
        }

        .testimonial-role {
            font-size: 0.6562rem;
        }

        .pagination-dots {
            margin-top: 0.625rem;
            gap: 0.5rem;
        }

        .page-dot {
            width: 0.6875rem;
            height: 0.6875rem;
        }

        .page-dot.desktop-hide {
            display: block;
        }
    }
</style>

<section class="testimonial-section">
    <div class="testimonial-container">
        <div class="testimonial-header">
            <span class="testimonial-title" style="display: block;">Trusted by Brands, Remembered by Customers</span>
            <p class="testimonial-subtitle">Know what our customers say about our products, communication, assistance and services.
“We ordered magnetic rigid boxes and trust me our product launch was well-executed with premium presentation. Customization was exactly the way we asked them.” </p>
  </div>

        <div class="testimonial-slider-wrapper">
            <button class="nav-btn prev-btn" aria-label="Previous Testimonial">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            </button>

            <div class="testimonial-slider">
                <div class="testimonial-track" id="testimonialTrack">

                    <!-- Slide 1 -->
                    <div class="testimonial-card-wrap">
                        <div class="testimonial-card">
                            <img src="{{ asset('uploads/elisa_grant.png') }}" alt="Elisa Grant" class="testimonial-img" onerror="this.src='https://placehold.co/160x230/333/fff?text=Elisa'">
                            <div class="testimonial-content">
                                <div class="testimonial-stars">
                                    ★ ★ ★ ★ ★ <span>5.0 rating</span>
                                </div>
                                <p class="testimonial-text">“We were looking for premium appearance without costing an arm and leg. Trust me the team was so helpful and guided us about the materials and dimensions. Highly recommended. “
</p>
                                <div class="testimonial-author">Olivia Bennett</div>
                                <div class="testimonial-role">Product Manager, Lumera Skincare
</div>
                            </div>
                            <div class="testimonial-dots-icon">
                                <svg width="14" height="4" viewBox="0 0 16 4" fill="currentColor"><circle cx="2" cy="2" r="2"/><circle cx="8" cy="2" r="2"/><circle cx="14" cy="2" r="2"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="testimonial-card-wrap">
                        <div class="testimonial-card">
                            <img src="{{ asset('uploads/marcus_vance.png') }}" alt="Marcus Vance" class="testimonial-img" onerror="this.src='https://placehold.co/160x230/444/fff?text=Marcus'">
                            <div class="testimonial-content">
                                <div class="testimonial-stars">
                                    ★ ★ ★ ★ ★ <span>5.0 rating</span>
                                </div>
                                <p class="testimonial-text">“The boxes were sturdy, have smooth closure and presented all the required branded elements exceptionally. Definitely going to order again. “</p>
                                <div class="testimonial-author">Daniel Carter</div>
                                <div class="testimonial-role">Founder, North & Vale
</div>
                            </div>
                            <div class="testimonial-dots-icon">
                                <svg width="14" height="4" viewBox="0 0 16 4" fill="currentColor"><circle cx="2" cy="2" r="2"/><circle cx="8" cy="2" r="2"/><circle cx="14" cy="2" r="2"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="testimonial-card-wrap">
                        <div class="testimonial-card">
                            <img src="{{ asset('uploads/sophia_loren.png') }}" alt="Sophia Loren" class="testimonial-img" onerror="this.src='https://placehold.co/160x230/555/fff?text=Sophia'">
                            <div class="testimonial-content">
                                <div class="testimonial-stars">
                                    ★ ★ ★ ★ ★ <span>5.0 rating</span>
                                </div>
                                <p class="testimonial-text">“I asked for rush delivery and they have done it. Customized printing with premium finishing added value to our jewelry pieces. Highly impressed by their professional attitude.”</p>
                                <div class="testimonial-author">Sophia Reynolds</div>
                                <div class="testimonial-role">Creative Director, Elara Fragrances</div>
                            </div>
                            <div class="testimonial-dots-icon">
                                <svg width="14" height="4" viewBox="0 0 16 4" fill="currentColor"><circle cx="2" cy="2" r="2"/><circle cx="8" cy="2" r="2"/><circle cx="14" cy="2" r="2"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="testimonial-card-wrap">
                        <div class="testimonial-card">
                            <img src="{{ asset('uploads/david_miller.png') }}" alt="David Miller" class="testimonial-img" onerror="this.src='https://placehold.co/160x230/666/fff?text=David'">
                            <div class="testimonial-content">
                                <div class="testimonial-stars">
                                    ★ ★ ★ ★ ★ <span>5.0 rating</span>
                                </div>
                                <p class="testimonial-text">Fast delivery and flawless printing. Our customers love the premium unboxing experience.</p>
                                <div class="testimonial-author">Ethan Brooks</div>
                                <div class="testimonial-role">Operations Manager, Cedar & Finch Gifts</div>
                            </div>
                            <div class="testimonial-dots-icon">
                                <svg width="14" height="4" viewBox="0 0 16 4" fill="currentColor"><circle cx="2" cy="2" r="2"/><circle cx="8" cy="2" r="2"/><circle cx="14" cy="2" r="2"/></svg>
                            </div>
                        </div>
                    </div>

                </div><!-- end .testimonial-track -->
            </div><!-- end .testimonial-slider -->

            <button class="nav-btn next-btn" aria-label="Next Testimonial">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </button>
        </div><!-- end .testimonial-slider-wrapper -->

        <div class="pagination-dots" id="testimonialDots">
            <div class="page-dot active" data-index="0"></div>
            <div class="page-dot" data-index="1"></div>
            <div class="page-dot" data-index="2"></div>
            <div class="page-dot desktop-hide" data-index="3"></div>
        </div>
    </div>
</section>

<script>
    (function () {
        var track = document.getElementById('testimonialTrack');
        var dots = document.querySelectorAll('#testimonialDots .page-dot');
        var prevBtn = document.querySelector('.testimonial-section .prev-btn');
        var nextBtn = document.querySelector('.testimonial-section .next-btn');
        if (!track || !dots.length) return;

        var currentIndex = 0;
        var autoPlayInterval = null;

        function getVisibleCount() {
            return window.innerWidth <= 768 ? 1 : 2;
        }

        function getMaxIndex() {
            var visible = getVisibleCount();
            return visible === 2 ? 2 : 3; // 4 cards total -> 3 steps for desktop (0,1,2), 4 steps for mobile (0,1,2,3)
        }

        function goToSlide(index) {
            var maxIndex = getMaxIndex();
            if (index < 0) index = maxIndex;
            if (index > maxIndex) index = 0;
            currentIndex = index;

            var visible = getVisibleCount();
            var stepPercent = visible === 2 ? 50 : 100;
            track.style.transform = 'translateX(-' + (currentIndex * stepPercent) + '%)';

            dots.forEach(function (dot, i) {
                if (i === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        function startAutoPlay() {
            stopAutoPlay();
            autoPlayInterval = setInterval(function () {
                goToSlide(currentIndex + 1);
            }, 4000);
        }

        function stopAutoPlay() {
            if (autoPlayInterval) {
                clearInterval(autoPlayInterval);
                autoPlayInterval = null;
            }
        }

        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () {
                goToSlide(i);
                startAutoPlay();
            });
        });

        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                goToSlide(currentIndex - 1);
                startAutoPlay();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                goToSlide(currentIndex + 1);
                startAutoPlay();
            });
        }

        window.addEventListener('resize', function() {
            goToSlide(0);
        });

        // Touch swipe support
        var startX = 0;
        var distX = 0;
        track.addEventListener('touchstart', function (e) {
            startX = e.touches[0].clientX;
            distX = 0;
            stopAutoPlay();
        }, { passive: true });

        track.addEventListener('touchmove', function (e) {
            distX = e.touches[0].clientX - startX;
        }, { passive: true });

        track.addEventListener('touchend', function () {
            if (Math.abs(distX) > 40) {
                if (distX > 0) {
                    goToSlide(currentIndex - 1);
                } else {
                    goToSlide(currentIndex + 1);
                }
            }
            startAutoPlay();
        });

        startAutoPlay();
    })();
</script>
