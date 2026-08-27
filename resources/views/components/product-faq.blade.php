<style>
    /* ─────────────────────────────────────────
       PRODUCT FAQ SECTION
    ───────────────────────────────────────── */
    .product-faq-section {
        background-color: #FFFFFF !important;
        padding: 20px 0 10px;
        width: 100%;
        font-family: 'DM Sans', sans-serif;
    }



    .product-faq-heading {
        font-family: 'Open Sans', sans-serif;
        font-size: 32px;
        font-weight: 700;
        color: #0A2240;
        text-align: center;
        margin-bottom: 40px;
        margin-top: 0;
    }

    .product-faq-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .product-faq-item {
        background-color: #FFFFFF;
        border: 1px solid #EAEAEA;
        border-radius: 8px;
        overflow: hidden;
    }

    .product-faq-question {
        width: 100%;
        padding: 20px 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: none;
        border: none;
        cursor: pointer;
        font-family: 'DM Sans', sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #333333;
        text-align: left;
    }

    .product-faq-icon {
        color: #0A2240;
        font-size: 20px;
        font-weight: 300;
        line-height: 1;
        transition: transform 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
    }

    .product-faq-item.active .product-faq-icon {
        transform: rotate(45deg); /* Turns plus into cross */
    }

    .product-faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.35s ease, padding 0.35s ease;
        padding: 0 24px;
        background-color: #FFFFFF;
    }

    .product-faq-item.active .product-faq-answer {
        max-height: 300px;
        padding: 0 24px 20px 24px;
    }

    .product-faq-answer p {
        margin: 0;
        font-size: 15px;
        line-height: 1.6;
        color: #666666;
        text-align: justify;
    }

    @media (max-width: 768px) {
        .product-faq-section {
            padding-top: 10px;
        }
        .product-faq-heading {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .product-faq-question {
            padding: 16px 20px;
            font-size: 15px;
        }
        .product-faq-answer {
            padding: 0 20px;
        }
        .product-faq-item.active .product-faq-answer {
            padding: 0 20px 16px 20px;
        }
    }
</style>

<section class="product-faq-section">
    <div class="container">
        <h2 class="product-faq-heading">Frequently Asked Questions</h2>
        
        <div class="product-faq-list">
            @php
                $faqs = [
                    ['q' => 'Which printing method is best for small orders?', 'a' => 'For smaller orders, digital printing is usually the most cost-effective method. It offers quick turnaround times and excellent print quality without the need for expensive setup costs or printing plates.'],
                    ['q' => 'Do you offer free design support?', 'a' => 'Yes, our team of expert designers provides free design assistance. We can help you create custom artwork or optimize your existing designs to ensure they print perfectly on your packaging.'],
                    ['q' => 'What is the minimum order quantity?', 'a' => 'Our minimum order quantity (MOQ) typically starts at 100 units for most standard custom boxes. However, this may vary depending on the specific box style and materials you choose.'],
                    ['q' => 'Can I get a sample before placing a full order?', 'a' => 'Yes, we offer custom printed samples so you can check the material, size, and print quality before committing to a larger production run.'],
                    ['q' => 'What is your turnaround time?', 'a' => 'Our standard turnaround time is 8-10 business days after the final design approval. We also offer expedited shipping options if you need your boxes sooner.']
                ];
            @endphp
            
            @foreach($faqs as $faq)
            <div class="product-faq-item">
                <button class="product-faq-question" type="button">
                    <span>{{ $faq['q'] }}</span>
                    <span class="product-faq-icon">+</span>
                </button>
                <div class="product-faq-answer">
                    <p>{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.product-faq-item');
    
    faqItems.forEach(item => {
        const btn = item.querySelector('.product-faq-question');
        
        btn.addEventListener('click', () => {
            // Check if this item is already active
            const isActive = item.classList.contains('active');
            
            // Close all items
            faqItems.forEach(faq => {
                faq.classList.remove('active');
            });
            
            // If it wasn't active, open it
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>
