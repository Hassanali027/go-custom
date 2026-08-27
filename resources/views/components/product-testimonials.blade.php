<style>
    .product-testimonials-section {
        padding: 40px 20px;
        background-color: #fff;
        font-family: 'DM Sans', sans-serif;
    }
    .product-testimonials-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 55px;
        box-sizing: border-box;
    }
    .product-testimonials-title {
        text-align: center;
        font-size: 28px;
        font-weight: 700;
        color: #0A2240;
        margin-bottom: 40px;
        font-family: 'Open Sans', sans-serif;
    }
    
    .product-testimonials-viewport {
        overflow: hidden;
        margin-bottom: 30px;
    }
    
    .product-testimonials-track {
        display: flex;
        transition: transform 0.5s ease;
        gap: 30px;
    }
    
    .product-testimonial-card {
        background-color: #FFF8E7;
        border-radius: 12px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        flex: 0 0 calc(50% - 15px); /* Show 2 per view on desktop */
        box-sizing: border-box;
    }
    
    .pt-stars {
        color: #F6B72D;
        font-size: 16px;
        letter-spacing: 2px;
    }
    .pt-stars span.grey-star {
        color: #E0E0E0;
    }
    .pt-quote {
        font-size: 14px;
        line-height: 1.6;
        color: #333;
        margin: 0;
        flex-grow: 1;
    }
    .pt-author {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 10px;
    }
    .pt-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #E74C3C;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 18px;
    }
    .pt-author-info {
        display: flex;
        flex-direction: column;
    }
    .pt-author-name {
        font-weight: 700;
        font-size: 14px;
        color: #000;
    }
    .pt-author-role {
        font-size: 12px;
        color: #666;
    }
    .pt-dots {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 20px;
    }
    .pt-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: #E0E0E0;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .pt-dot.active {
        background-color: #0A2240;
        width: 20px;
        border-radius: 4px;
    }
    
    @media (max-width: 768px) {
        .product-testimonials-section {
            padding: 15px 20px;
        }
        .product-testimonials-viewport {
            margin-bottom: 20px;
        }
        .product-testimonials-container {
            padding: 0 20px;
        }
        .product-testimonial-card {
            flex: 0 0 100%; /* Show 1 per view on mobile */
            height: 253px;
        }
        .product-testimonials-track {
            gap: 0;
        }
        .pt-quote {
            text-align: justify;
        }
        .product-testimonials-title {
            margin-bottom: 20px;
        }
    }
</style>

<section class="product-testimonials-section">
    <div class="product-testimonials-container">
        <h2 class="product-testimonials-title">What Our Clients Say</h2>
        
        <div class="product-testimonials-viewport">
            <div class="product-testimonials-track" id="ptTrack">
                <!-- Testimonial 1 -->
                <div class="product-testimonial-card">
                    <div class="pt-stars">
                        &#9733;&#9733;&#9733;&#9733;<span class="grey-star">&#9733;</span>
                    </div>
                    <p class="pt-quote">"Beautiful custom boxes that perfectly represent our brand. The foil stamping and matte finish give our products a luxury feel. Highly recommend for any beauty brand."</p>
                    <div class="pt-author">
                        <div class="pt-avatar" style="background-color: #E74C3C;">E</div>
                        <div class="pt-author-info">
                            <span class="pt-author-name">Emily Rodriguez</span>
                            <span class="pt-author-role">Beauty Corporation</span>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="product-testimonial-card">
                    <div class="pt-stars">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                    <p class="pt-quote">"The quality of the packaging exceeded our expectations. Our customers love the unboxing experience. Turnaround time was fantastic!"</p>
                    <div class="pt-author">
                        <div class="pt-avatar" style="background-color: #3498DB;">J</div>
                        <div class="pt-author-info">
                            <span class="pt-author-name">James Chen</span>
                            <span class="pt-author-role">Tech Accessories Inc.</span>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="product-testimonial-card">
                    <div class="pt-stars">
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    </div>
                    <p class="pt-quote">"Their design team helped us create the perfect retail boxes. The vibrant colors and sturdy material really make our products stand out on the shelves."</p>
                    <div class="pt-author">
                        <div class="pt-avatar" style="background-color: #2ECC71;">S</div>
                        <div class="pt-author-info">
                            <span class="pt-author-name">Sarah Jenkins</span>
                            <span class="pt-author-role">Organic Foods</span>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 4 -->
                <div class="product-testimonial-card">
                    <div class="pt-stars">
                        &#9733;&#9733;&#9733;&#9733;<span class="grey-star">&#9733;</span>
                    </div>
                    <p class="pt-quote">"Great customer service and fast shipping. The custom inserts fit perfectly. Will definitely be reordering for our next product launch."</p>
                    <div class="pt-author">
                        <div class="pt-avatar" style="background-color: #9B59B6;">M</div>
                        <div class="pt-author-info">
                            <span class="pt-author-name">Michael Chang</span>
                            <span class="pt-author-role">Glow Cosmetics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="pt-dots" id="ptDots">
            <!-- Dots will be generated by JS -->
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('ptTrack');
        const dotsContainer = document.getElementById('ptDots');
        const cards = track.querySelectorAll('.product-testimonial-card');
        
        let currentIndex = 0;
        let cardsPerView = window.innerWidth <= 768 ? 1 : 2;
        let totalViews = Math.ceil(cards.length / cardsPerView);
        let slideInterval;
        
        // Generate dots
        function generateDots() {
            dotsContainer.innerHTML = '';
            for (let i = 0; i < totalViews; i++) {
                const dot = document.createElement('div');
                dot.className = 'pt-dot' + (i === 0 ? ' active' : '');
                dot.addEventListener('click', () => {
                    goToSlide(i);
                    resetInterval();
                });
                dotsContainer.appendChild(dot);
            }
        }
        
        // Update slider position
        function updateSlider() {
            const dotElements = dotsContainer.querySelectorAll('.pt-dot');
            dotElements.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
            
            // Calculate percentage to slide (100% per view)
            const slidePercentage = currentIndex * 100;
            const gapAdjustment = window.innerWidth <= 768 ? 0 : (currentIndex * 30); // account for gap
            
            if (window.innerWidth <= 768) {
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
            } else {
                // On desktop, we have to be careful with the gap calculation
                // Let's just use exact pixel widths or percentage logic
                track.style.transform = `translateX(calc(-${currentIndex * 100}% - ${currentIndex * 30}px))`;
            }
        }
        
        function goToSlide(index) {
            currentIndex = index;
            updateSlider();
        }
        
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalViews;
            updateSlider();
        }
        
        function startInterval() {
            slideInterval = setInterval(nextSlide, 4000);
        }
        
        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }
        
        // Handle window resize
        window.addEventListener('resize', () => {
            const newCardsPerView = window.innerWidth <= 768 ? 1 : 2;
            if (newCardsPerView !== cardsPerView) {
                cardsPerView = newCardsPerView;
                totalViews = Math.ceil(cards.length / cardsPerView);
                currentIndex = 0;
                generateDots();
                updateSlider();
                resetInterval();
            }
        });
        
        // Initialization
        generateDots();
        startInterval();
    });
</script>
