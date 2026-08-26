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
        display: grid;
        grid-template-rows: repeat(2, 236px);
        grid-auto-columns: 100%;
        grid-auto-flow: column;
        gap: 24px;
        height: 496px; /* Exactly fits 2 cards + 1 gap */
        overflow-x: auto;
        overflow-y: hidden;
        scroll-snap-type: x mandatory;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none;  /* Internet Explorer 10+ */
    }

    .testimonial-cards-wrap::-webkit-scrollbar { 
        display: none; /* Safari and Chrome */
    }

    .tf-testimonial-card {
        width: 100%;
        max-width: 560px;
        height: 236px;
        background-color: #FFFBF0;
        border-radius: 12px;
        padding: 30px;
        box-shadow: none;
        scroll-snap-align: start;
        flex-shrink: 0;
        box-sizing: border-box;
    }

    .tf-stars {
        color: #FFB400;
        font-size: 16px;
        margin-bottom: 14px;
        letter-spacing: 2px;
    }
    
    .tf-stars span.gray {
        color: #ddd;
    }

    .tf-quote {
        font-size: 14.5px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 20px;
        font-style: normal;
    }

    .tf-author-area {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .tf-author-initial {
        width: 36px;
        height: 36px;
        background: #B4C0CB;
        border-radius: 50%;
        color: #E25C5C;
        font-weight: 700;
        font-size: 15px;
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
        font-size: 15px;
        color: #0B2240;
    }

    .tf-author-title {
        font-size: 12.5px;
        color: #777;
    }

    .tf-pagination {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 25px;
    }

    .tf-dot {
        width: 6px;
        height: 6px;
        background: #D9D9D9;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tf-dot.active {
        width: 24px;
        height: 6px;
        border-radius: 3px;
        background: #0B2240;
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
        .testimonials-faq-section {
            padding: 10px 0 40px 0;
            overflow: hidden;
            width: 100%;
        }
        .testimonials-faq-container {
            grid-template-columns: 100%;
            gap: 40px;
            padding: 0 16px;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            overflow: hidden;
        }
        .testimonials-col {
            height: auto;
            width: 100%;
            max-width: 100%;
            min-width: 0;
            contain: none;
            box-sizing: border-box;
        }
        .faq-col {
            display: none !important;
        }
        .testimonial-cards-wrap {
            display: flex;
            flex-direction: row;
            width: 100%;
            max-width: 100%;
            min-width: 0;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            height: auto;
            gap: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-overflow-scrolling: touch;
        }
        .tf-testimonial-card {
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%;
            min-width: 100%;
            height: auto;
            min-height: auto;
            padding: 24px;
            box-sizing: border-box;
            scroll-snap-align: start;
        }
        .tf-quote {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 18px;
            text-align: left;
        }
        .tf-pagination {
            justify-content: center;
            margin-top: 18px;
            gap: 8px;
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
                <!-- Dots generated by JS -->
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
        const pagination = document.querySelector('.tf-pagination');
        const cards = document.querySelectorAll('.tf-testimonial-card');
        let dots = [];
        let currentDot = 0;
        let autoSlideInterval;

        function initPagination() {
            if (!pagination || !cardWrap) return;
            
            let isMobile = window.innerWidth <= 992;
            let itemsPerPage = isMobile ? 1 : 2;
            let totalPages = Math.ceil(cards.length / itemsPerPage);
            
            if (dots.length !== totalPages) {
                pagination.innerHTML = '';
                dots = [];
                for(let i=0; i<totalPages; i++) {
                    let d = document.createElement('div');
                    d.className = 'tf-dot' + (i === 0 ? ' active' : '');
                    pagination.appendChild(d);
                    dots.push(d);
                    
                    d.addEventListener('click', () => {
                        let cardWidth = cardWrap.offsetWidth;
                        let gap = isMobile ? 0 : 24;
                        cardWrap.scrollTo({ left: i * (cardWidth + gap), behavior: 'smooth' });
                        dots.forEach(dot => dot.classList.remove('active'));
                        d.classList.add('active');
                        currentDot = i;
                    });
                }
            }
        }
        
        initPagination();
        window.addEventListener('resize', initPagination);

        // On scroll, sync active dot
        if (cardWrap) {
            cardWrap.addEventListener('scroll', () => {
                let isMobile = window.innerWidth <= 992;
                let cardWidth = cardWrap.offsetWidth;
                let gap = isMobile ? 0 : 24;
                let activeIndex = Math.round(cardWrap.scrollLeft / (cardWidth + gap));
                if (dots[activeIndex] && !dots[activeIndex].classList.contains('active')) {
                    dots.forEach(dot => dot.classList.remove('active'));
                    dots[activeIndex].classList.add('active');
                    currentDot = activeIndex;
                }
            }, { passive: true });
        }

        // Auto slide every 4 seconds
        autoSlideInterval = setInterval(() => {
            if (cardWrap && dots.length > 0) {
                currentDot = (currentDot + 1) % dots.length;
                let isMobile = window.innerWidth <= 992;
                let cardWidth = cardWrap.offsetWidth;
                let gap = isMobile ? 0 : 24;
                cardWrap.scrollTo({ left: currentDot * (cardWidth + gap), behavior: 'smooth' });
                
                dots.forEach(dot => dot.classList.remove('active'));
                dots[currentDot].classList.add('active');
            }
        }, 4000);
    });
</script>
