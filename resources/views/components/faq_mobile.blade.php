<style>
    .faq-mobile-section {
        display: none;
    }
    
    @media (max-width: 62rem) {
        .faq-mobile-section {
            display: block;
            padding: 1.25rem 1rem 2.5rem;
            background: var(--background-color, #FAF8F8);
            width: 100%;
            box-sizing: border-box;
        }

        .faq-mobile-section h2 {
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            font-size: 2rem;
            color: var(--primary-color, #0B2240);
            margin-bottom: 1.25rem;
        }
        .faq-icon {
            font-size: 1.5rem;
            font-weight: 400;
            color: #000;
            line-height: 1;
        }
        .faq-mobile-section .tf-accordion {
            border-top: none !important;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        .faq-mobile-section .tf-accordion-item {
            border: 1px solid #EAEAEA !important;
            border-radius: 0.5rem;
            background: #fff;
            padding: 0.25rem 1rem;
        }
        .faq-mobile-section .tf-accordion-btn {
            height: auto !important;
            min-height: 3.3125rem;
            padding: 0.625rem 0 !important;
            color: #000 !important;
            font-family: 'Inter', sans-serif !important;
            font-weight: 400 !important;
            font-size: 1rem !important;
            font-style: normal !important;
        }
        .faq-mobile-section .tf-accordion-content-inner {
            color: #000 !important;
            text-align: justify;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 0.875rem !important;
            padding-bottom: 0.75rem;
        }
    }
</style>

<section class="faq-mobile-section">
    <h2>Frequently Asked Questions</h2>
    <div class="tf-accordion">
        <div class="tf-accordion-item">
            <button class="tf-accordion-btn" onclick="toggleTfFaqMobile(this)">
                How fully can I customize my packaging?
                <span class="faq-icon">+</span>
            </button>
            <div class="tf-accordion-content">
                <div class="tf-accordion-content-inner">
                    You can customize everything from the box dimensions and material to the printing, coating, and add-ons like foil stamping or embossing.
                </div>
            </div>
        </div>
        <div class="tf-accordion-item">
            <button class="tf-accordion-btn" onclick="toggleTfFaqMobile(this)">
                Do you offer free design support?
                <span class="faq-icon">+</span>
            </button>
            <div class="tf-accordion-content">
                <div class="tf-accordion-content-inner">
                    Yes, we provide free design support to ensure your packaging looks exactly the way you envision it.
                </div>
            </div>
        </div>
        <div class="tf-accordion-item">
            <button class="tf-accordion-btn" onclick="toggleTfFaqMobile(this)">
                What printing options are available?
                <span class="faq-icon">+</span>
            </button>
            <div class="tf-accordion-content">
                <div class="tf-accordion-content-inner">
                    We offer offset, digital, and flexography printing, with support for CMYK, PMS, and custom spot colors.
                </div>
            </div>
        </div>
        <div class="tf-accordion-item">
            <button class="tf-accordion-btn" onclick="toggleTfFaqMobile(this)">
                What is the minimum order quantity?
                <span class="faq-icon">+</span>
            </button>
            <div class="tf-accordion-content">
                <div class="tf-accordion-content-inner">
                    Our standard minimum order quantity (MOQ) is 100 units, but we can accommodate smaller custom runs upon request.
                </div>
            </div>
        </div>
        <div class="tf-accordion-item">
            <button class="tf-accordion-btn" onclick="toggleTfFaqMobile(this)">
                Do you ship internationally?
                <span class="faq-icon">+</span>
            </button>
            <div class="tf-accordion-content">
                <div class="tf-accordion-content-inner">
                    Yes, we ship globally with various logistics partners to provide secure and timely delivery.
                </div>
            </div>
        </div>
        <div class="tf-accordion-item">
            <button class="tf-accordion-btn" onclick="toggleTfFaqMobile(this)">
                What is your turnaround time?
                <span class="faq-icon">+</span>
            </button>
            <div class="tf-accordion-content">
                <div class="tf-accordion-content-inner">
                    Standard turnaround is 10-12 business days, but we also offer expedited services if you are on a tight deadline.
                </div>
            </div>
        </div>
        <div class="tf-accordion-item">
            <button class="tf-accordion-btn" onclick="toggleTfFaqMobile(this)">
                What is the minimum order quantity?
                <span class="faq-icon">+</span>
            </button>
            <div class="tf-accordion-content">
                <div class="tf-accordion-content-inner">
                    Our standard minimum order quantity (MOQ) is 100 units, but we can accommodate smaller custom runs upon request.
                </div>
            </div>
        </div>
        <div class="tf-accordion-item">
            <button class="tf-accordion-btn" onclick="toggleTfFaqMobile(this)">
                Do you ship internationally?
                <span class="faq-icon">+</span>
            </button>
            <div class="tf-accordion-content">
                <div class="tf-accordion-content-inner">
                    Yes, we ship globally with various logistics partners to provide secure and timely delivery.
                </div>
            </div>
        </div>
        <div class="tf-accordion-item">
            <button class="tf-accordion-btn" onclick="toggleTfFaqMobile(this)">
                What is your turnaround time?
                <span class="faq-icon">+</span>
            </button>
            <div class="tf-accordion-content">
                <div class="tf-accordion-content-inner">
                    Standard turnaround is 10-12 business days, but we also offer expedited services if you are on a tight deadline.
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleTfFaqMobile(btn) {
        const item = btn.closest('.tf-accordion-item');
        const content = item.querySelector('.tf-accordion-content');
        const icon = item.querySelector('.faq-icon');
        
        // Close others in mobile section
        document.querySelectorAll('.faq-mobile-section .tf-accordion-item').forEach(other => {
            if (other !== item) {
                other.classList.remove('active');
                other.querySelector('.tf-accordion-content').style.maxHeight = null;
                if (other.querySelector('.faq-icon')) {
                    other.querySelector('.faq-icon').innerText = '+';
                }
            }
        });
        
        // Toggle current
        if (item.classList.contains('active')) {
            item.classList.remove('active');
            content.style.maxHeight = null;
            if (icon) icon.innerText = '+';
        } else {
            item.classList.add('active');
            content.style.maxHeight = content.scrollHeight + "px";
            if (icon) icon.innerText = '−';
        }
    }
</script>
