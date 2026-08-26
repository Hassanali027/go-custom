<style>
    .testimonials-faq-section {
        background: var(--background-color, #FAF8F8);
        padding: 60px 0;
        font-family: 'DM Sans', sans-serif;
    }

    .testimonials-faq-container {
        max-width: var(--site-container-width, 1280px);
        margin: 0 auto;
        padding: 0 var(--site-container-gutter, 55px);
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
    }

    /* Left Column: Testimonials */
    .testimonials-col, .faq-col {
        width: 100%;
        max-width: 560px;
    }

    .testimonials-col {
        height: 618.33px;
        contain: layout paint;
    }

    .faq-col {
        height: 597px;
    }

    .testimonials-col h2, .faq-col h2 {
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        font-size: 32px;
        color: var(--primary-color, #0B2240);
        margin-bottom: 30px;
    }

    .testimonial-cards-wrap {
        display: flex;
        flex-direction: column;
        gap: 24px;
        height: 496px; /* Exactly fits 2 cards + 1 gap */
        overflow-y: auto;
        scroll-snap-type: y mandatory;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none;  /* Internet Explorer 10+ */
        overflow-anchor: none; /* Prevents page scroll jumping */
    }

    .testimonial-cards-wrap::-webkit-scrollbar { 
        display: none; /* Safari and Chrome */
    }

    .tf-testimonial-card {
        width: 100%;
        max-width: 560px;
        height: 236px;
        background-color: var(--section-background, #FFFBF0);
        border-radius: 8px;
        padding: 30px;
        box-shadow: none;
        scroll-snap-align: start;
        flex-shrink: 0;
    }

    .tf-stars {
        color: var(--secondary-color, #FFB400);
        font-size: 18px;
        margin-bottom: 15px;
    }
    
    .tf-stars span.gray {
        color: #ddd;
    }

    .tf-quote {
        font-size: 15px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 24px;
        font-style: italic;
    }

    .tf-author-area {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .tf-author-initial {
        width: 40px;
        height: 40px;
        background: transparent;
        color: #E25C5C;
        font-weight: 700;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tf-author-details {
        display: flex;
        flex-direction: column;
    }

    .tf-author-name {
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        font-size: 16px;
        color: var(--primary-color, #000);
    }

    .tf-author-title {
        font-size: 13px;
        color: #777;
    }

    .tf-pagination {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 25px;
    }

    .tf-dot {
        width: 8px;
        height: 8px;
        background: #D9D9D9;
        border-radius: 50%;
        cursor: pointer;
    }

    .tf-dot.active {
        width: 24px;
        border-radius: 4px;
        background: var(--primary-color, #0B2240);
    }

    /* Right Column: FAQs */
    .tf-accordion {
        display: flex;
        flex-direction: column;
        border-top: 1px solid #ccc;
    }

    .tf-accordion-item {
        border-bottom: 1px solid #ccc;
    }

    .tf-accordion-btn {
        width: 100%;
        max-width: 560px;
        height: 53px;
        background: transparent;
        border: none;
        padding: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        font-family: 'DM Sans', sans-serif;
        font-weight: 500;
        font-size: 15px;
        color: var(--primary-color, #000);
        text-align: left;
    }

    .tf-accordion-btn svg {
        width: 16px;
        height: 16px;
        transition: transform 0.3s ease;
        fill: #666;
    }

    .tf-accordion-item.active .tf-accordion-btn svg {
        transform: rotate(180deg);
    }

    .tf-accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .tf-accordion-content-inner {
        padding-bottom: 20px;
        font-size: 14.5px;
        line-height: 1.5;
        color: #555;
    }

    @media (max-width: 992px) {
        .testimonials-faq-container {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }
</style>

<section class="testimonials-faq-section">
    <div class="testimonials-faq-container">
        <!-- Left: Testimonials -->
        <div class="testimonials-col">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-cards-wrap">
                <!-- Card 1 -->
                <div class="tf-testimonial-card">
                    <div class="tf-stars">★★★★<span class="gray">★</span></div>
                    <p class="tf-quote">"Beautiful custom boxes that perfectly represent our brand. The foil stamping and matte finish give our products a luxury feel. Highly recommend for any beauty brand."</p>
                    <div class="tf-author-area">
                        <div class="tf-author-initial">E</div>
                        <div class="tf-author-details">
                            <span class="tf-author-name">Emily Rodriguez</span>
                            <span class="tf-author-title">Gloom Cosmetics</span>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="tf-testimonial-card">
                    <div class="tf-stars">★★★★<span class="gray">★</span></div>
                    <p class="tf-quote">"Beautiful custom boxes that perfectly represent our brand. The foil stamping and matte finish give our products a luxury feel. Highly recommend for any beauty brand."</p>
                    <div class="tf-author-area">
                        <div class="tf-author-initial">E</div>
                        <div class="tf-author-details">
                            <span class="tf-author-name">Emily Rodriguez</span>
                            <span class="tf-author-title">Gloom Cosmetics</span>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="tf-testimonial-card">
                    <div class="tf-stars">★★★★★</div>
                    <p class="tf-quote">"Outstanding quality and incredible customer service! The team helped us perfect our design and the final boxes exceeded our expectations. Will definitely order again."</p>
                    <div class="tf-author-area">
                        <div class="tf-author-initial">M</div>
                        <div class="tf-author-details">
                            <span class="tf-author-name">Michael Chen</span>
                            <span class="tf-author-title">TechGear Pro</span>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="tf-testimonial-card">
                    <div class="tf-stars">★★★★<span class="gray">★</span></div>
                    <p class="tf-quote">"The turnaround time was amazingly fast without compromising on the quality. These custom mailer boxes have completely elevated our unboxing experience."</p>
                    <div class="tf-author-area">
                        <div class="tf-author-initial">S</div>
                        <div class="tf-author-details">
                            <span class="tf-author-name">Sarah Jenkins</span>
                            <span class="tf-author-title">Artisan Coffee Co.</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tf-pagination">
                <div class="tf-dot"></div>
                <div class="tf-dot"></div>
                <div class="tf-dot active"></div>
                <div class="tf-dot"></div>
            </div>
        </div>

        <!-- Right: FAQs -->
        <div class="faq-col">
            <h2>Frequently Asked Questions</h2>
            <div class="tf-accordion">
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" onclick="toggleTfFaq(this)">
                        How fully can I customize my packaging?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">
                            You can customize everything from the box dimensions and material to the printing, coating, and add-ons like foil stamping or embossing.
                        </div>
                    </div>
                </div>
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" onclick="toggleTfFaq(this)">
                        Do you offer free design support?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">
                            Yes, we provide free design support to ensure your packaging looks exactly the way you envision it.
                        </div>
                    </div>
                </div>
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" onclick="toggleTfFaq(this)">
                        What printing options are available?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">
                            We offer offset, digital, and flexography printing, with support for CMYK, PMS, and custom spot colors.
                        </div>
                    </div>
                </div>
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" onclick="toggleTfFaq(this)">
                        What is the minimum order quantity?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">
                            Our standard minimum order quantity (MOQ) is 100 units, but we can accommodate smaller custom runs upon request.
                        </div>
                    </div>
                </div>
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" onclick="toggleTfFaq(this)">
                        Do you ship internationally?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">
                            Yes, we ship globally with various logistics partners to provide secure and timely delivery.
                        </div>
                    </div>
                </div>
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" onclick="toggleTfFaq(this)">
                        What is your turnaround time?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">
                            Standard turnaround is 10-12 business days, but we also offer expedited services if you are on a tight deadline.
                        </div>
                    </div>
                </div>
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" onclick="toggleTfFaq(this)">
                        What is the minimum order quantity?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">
                            Our standard minimum order quantity (MOQ) is 100 units, but we can accommodate smaller custom runs upon request.
                        </div>
                    </div>
                </div>
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" onclick="toggleTfFaq(this)">
                        Do you ship internationally?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">
                            Yes, we ship globally with various logistics partners to provide secure and timely delivery.
                        </div>
                    </div>
                </div>
                <div class="tf-accordion-item">
                    <button class="tf-accordion-btn" onclick="toggleTfFaq(this)">
                        What is your turnaround time?
                        <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
                    </button>
                    <div class="tf-accordion-content">
                        <div class="tf-accordion-content-inner">
                            Standard turnaround is 10-12 business days, but we also offer expedited services if you are on a tight deadline.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleTfFaq(btn) {
        const item = btn.closest('.tf-accordion-item');
        const content = item.querySelector('.tf-accordion-content');
        
        // Close others
        document.querySelectorAll('.tf-accordion-item').forEach(other => {
            if (other !== item) {
                other.classList.remove('active');
                other.querySelector('.tf-accordion-content').style.maxHeight = null;
            }
        });
        
        // Toggle current
        if (item.classList.contains('active')) {
            item.classList.remove('active');
            content.style.maxHeight = null;
        } else {
            item.classList.add('active');
            content.style.maxHeight = content.scrollHeight + "px";
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const cardWrap = document.querySelector('.testimonial-cards-wrap');
        const dots = document.querySelectorAll('.tf-pagination .tf-dot');
        let currentDot = 0;

        if (dots.length > 0) {
            dots.forEach(d => d.classList.remove('active'));
            dots[0].classList.add('active');
        }

        if (cardWrap) {
            let scrollAmount = 260; // 236px card + 24px gap
            
            setInterval(() => {
                // Smooth scroll down
                cardWrap.scrollBy({ top: scrollAmount, behavior: 'smooth' });
                
                // Update pagination dots
                if (dots.length > 0) {
                    dots[currentDot].classList.remove('active');
                    currentDot = (currentDot + 1) % dots.length;
                    dots[currentDot].classList.add('active');
                }
                
                // Wait for the smooth scroll to finish, then move the top card to the bottom
                setTimeout(() => {
                    let firstCard = cardWrap.firstElementChild;
                    cardWrap.appendChild(firstCard);
                    // Instantly adjust scroll position back so the user doesn't notice the jump
                    cardWrap.scrollBy({ top: -scrollAmount, behavior: 'auto' });
                }, 500); // 500ms allows the smooth scroll animation to finish
                
            }, 1000); // Auto scroll every 1 second
        }
    });
</script>
