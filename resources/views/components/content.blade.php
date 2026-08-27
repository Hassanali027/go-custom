<style>
    /* ─────────────────────────────────────────
       TEXT CONTENT SECTION
    ───────────────────────────────────────── */
    .text-content-section {
        background: var(--background-color);
        padding: 0 0 25px 0;
    }

    .text-content-container {
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 24px;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
    }

    .text-content-card {
        width: 100%;
        max-width: 1030px;
        background: #FAF5EC;
        border-radius: 10px;
        border: none;
        padding: 48px 20px 48px 56px;
        box-sizing: border-box;
        max-height: 787px;
    }

    .text-content-inner {
        max-height: calc(787px - 96px);
        overflow-y: auto;
        padding-right: 26px;
        scrollbar-width: thin;
        scrollbar-color: var(--primary-color) #F0F0F0;
    }

    .text-content-inner::-webkit-scrollbar {
        width: 10px;
    }

    .text-content-inner::-webkit-scrollbar-track {
        background: #F0F0F0;
        border-radius: 20px;
    }

    .text-content-inner::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 20px;
    }

    .text-content-inner::-webkit-scrollbar-thumb:hover {
        background: var(--footer-color);
    }

    .text-content-heading {
        font-family: 'Open Sans', sans-serif;
        font-size: 24px;
        font-weight: 700;
        color: #000000;
        margin-bottom: 20px;
        line-height: 1.4;
    }

    .text-content-body p {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #000000;
        line-height: 1.7;
        margin-bottom: 14px;
    }

    .text-content-body p:last-child {
        margin-bottom: 0;
    }

    .text-content-body ul,
    .text-content-body ol {
        padding-left: 2rem;
        margin: 0 0 14px 0;
    }

    .text-content-body ul {
        list-style-type: disc;
    }

    .text-content-body ol {
        list-style-type: decimal;
    }

    .text-content-body li {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #333;
        line-height: 1.7;
        padding-left: 4px;
        margin-bottom: 4px;
    }

    .text-content-body li::marker {
        color: #333;
        font-weight: 600;
    }

    .text-content-body a,
    .text-content-body a * {
        color: #5b2829 !important;
        text-decoration: underline !important;
        text-decoration-color: #5b2829 !important;
    }

    .text-content-body a:hover,
    .text-content-body a:hover * {
        color: #5b2829 !important;
        text-decoration: underline !important;
        text-decoration-color: #5b2829 !important;
    }

    .text-content-body ul li a,
    .text-content-body ol li a,
    .text-content-body ul li a *,
    .text-content-body ol li a * {
        color: #5b2829 !important;
        text-decoration: underline !important;
        text-decoration-color: #5b2829 !important;
    }

    .text-content-body ul li a:hover,
    .text-content-body ol li a:hover,
    .text-content-body ul li a:hover *,
    .text-content-body ol li a:hover * {
        color: #5b2829 !important;
        text-decoration: underline !important;
        text-decoration-color: #5b2829 !important;
    }

    @media (max-width: 992px) {
        .text-content-card {
            padding: 32px 12px 32px 24px;
            height: 460px;
        }
        .text-content-inner {
            height: 100%;
            overflow-y: auto;
            padding-right: 14px;
        }
    }

    @media (max-width: 768px) {
        .text-content-section {
            padding: 0 0 24px 0;
        }
        .text-content-container {
            padding: 0 16px;
        }
        .text-content-card {
            padding: 24px 8px 24px 18px;
            border-radius: 10px;
            border: none;
            height: 634px;
            position: relative;
        }
        .text-content-inner {
            height: 100%;
            overflow-y: scroll;
            padding-right: 20px;
            /* Hide native scrollbar on mobile */
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .text-content-inner::-webkit-scrollbar {
            display: none;
        }
        /* Custom scrollbar track */
        .tc-scrollbar-track {
            position: absolute;
            top: 18px;
            right: 6px;
            width: 6px;
            bottom: 18px;
            background: #EBEBEB;
            border-radius: 10px;
            display: none;
        }
        /* Custom scrollbar thumb */
        .tc-scrollbar-thumb {
            position: absolute;
            width: 6px;
            background: #0B2240;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.2s;
        }
        .text-content-heading {
            font-size: 18px;
            line-height: 1.35;
            margin-bottom: 14px;
        }
        .text-content-body p,
        .text-content-body li {
            font-size: 13.5px;
            line-height: 1.55;
            margin-bottom: 10px;
            text-align: justify;
        }
    }
</style>

{{-- ═══════════════════════════════════════
     TEXT CONTENT SECTION
═══════════════════════════════════════ --}}
<section class="text-content-section">
    <div class="text-content-container">
        <div class="text-content-card" id="tcCard">
            <!-- Custom scrollbar for mobile -->
            <div class="tc-scrollbar-track" id="tcTrack">
                <div class="tc-scrollbar-thumb" id="tcThumb"></div>
            </div>
            <div class="text-content-inner" id="tcInner">
                <div class="text-content-body">
                    <h2 class="text-content-heading">Order Custom Boxes, Custom Packaging & Shipping Boxes At Wholesale Rates</h2>
                    <p>Do You Have A Business? Big Or Small Doesn't Matter!</p>
                    <p>Want To Give Your Customers Elegance With Great Packaging And A Secure Product Within? Look No Further!</p>
                    <p>Here We Are, My Box Printing Offers Wholesale, Unbeatable Rates That Are Unbelievable For The Quality We Are Providing. We Understand Our Clients And Their Business Needs. Business Is Like A Baby That Needs To Be Taken Care Of With Great Products That Won't Get Harmed In Any Way.</p>
                    <p>In The Same Way, Your Brand Needs To Deliver With Our Custom Packaging And Material So That Your Customer Feels Luxurious With The Feel Of The Product Packaging And Printing.</p>
                    <p>We Are A Company That Provides A Complete Packaging Solution At Retail And Wholesale Prices. Let's Put Our Services Into Major Points.</p>
                    <ul>
                        <li>Custom Boxes</li>
                        <li>Custom Packaging</li>
                        <li>Custom Box Designs</li>
                        <li>Custom Mailer Boxes</li>
                        <li>Custom Printed Boxes</li>
                        <li>Custom Gift Packaging</li>
                    </ul>
                    <p>Not Only This, We Also Offer Mock-Ups And Complete Satisfaction, In Which Our Team Will Review Your Design And Make The Changes Needed. We Have A Great 3d Design Studio That Gives You A Visual Representation Of What You Are Going To Receive After The Order.</p>
                    <p>The Design Team Also Makes Sure To Keep Every Aspect Of Your Brand In Mind. After The Order Is Completed, All Is Packed In Corrugated Cardboard Shipping Boxes, Which Are Also Sustainable Packaging And Eco-Friendly.</p>
                    <p>No Matter How Unique The Design You Want, We'll Give You Your Expected Results. We Design And Ship Within Due Time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
(function() {
    function initMobileScrollbar() {
        if (window.innerWidth > 768) return;
        var inner = document.getElementById('tcInner');
        var track = document.getElementById('tcTrack');
        var thumb = document.getElementById('tcThumb');
        if (!inner || !track || !thumb) return;

        track.style.display = 'block';

        function updateThumb() {
            var trackH = track.offsetHeight;
            var ratio = inner.clientHeight / inner.scrollHeight;
            var thumbH = Math.max(30, trackH * ratio);
            thumb.style.height = thumbH + 'px';
            var scrollRatio = inner.scrollTop / (inner.scrollHeight - inner.clientHeight);
            thumb.style.top = (scrollRatio * (trackH - thumbH)) + 'px';
        }

        inner.addEventListener('scroll', updateThumb);
        window.addEventListener('resize', updateThumb);
        updateThumb();

        // Drag thumb
        var startY, startScrollTop;
        thumb.addEventListener('mousedown', function(e) {
            startY = e.clientY;
            startScrollTop = inner.scrollTop;
            document.addEventListener('mousemove', onDrag);
            document.addEventListener('mouseup', stopDrag);
        });
        thumb.addEventListener('touchstart', function(e) {
            startY = e.touches[0].clientY;
            startScrollTop = inner.scrollTop;
            document.addEventListener('touchmove', onTouchDrag);
            document.addEventListener('touchend', stopDrag);
        }, {passive: true});

        function onDrag(e) {
            var dy = e.clientY - startY;
            var trackH = track.offsetHeight;
            var thumbH = thumb.offsetHeight;
            inner.scrollTop = startScrollTop + (dy / (trackH - thumbH)) * (inner.scrollHeight - inner.clientHeight);
        }
        function onTouchDrag(e) {
            var dy = e.touches[0].clientY - startY;
            var trackH = track.offsetHeight;
            var thumbH = thumb.offsetHeight;
            inner.scrollTop = startScrollTop + (dy / (trackH - thumbH)) * (inner.scrollHeight - inner.clientHeight);
        }
        function stopDrag() {
            document.removeEventListener('mousemove', onDrag);
            document.removeEventListener('mouseup', stopDrag);
            document.removeEventListener('touchmove', onTouchDrag);
            document.removeEventListener('touchend', stopDrag);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMobileScrollbar);
    } else {
        initMobileScrollbar();
    }
})();
</script>
