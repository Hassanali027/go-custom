@include('components.htmlboilerplate')
<style>
/* Base Styles */
.about-us-page {
    font-family: 'Inter', sans-serif;
    color: #000;
}
.about-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
.section-padding {
    padding: 80px 0;
}

/* 1. Hero Section */
.about-hero {
    background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('uploads/about-us-banner.webp') }}');
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 40px 0 100px 0;
    position: relative;
}
.hero-text-content {
    margin-top: 60px;
}
.about-breadcrumb {
    font-size: 14px;
    margin-bottom: 20px;
    opacity: 1;
    color: #ffffff !important;
}
.about-hero h1 {
    font-family: var(--font-heading);
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #ffffff !important;
}
.about-hero p {
    font-size: 18px;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
    color: #ffffff !important;
}

/* 2. Who We Are */
.who-we-are {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}
.who-we-are-text h2 {
    font-family: var(--font-heading);
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
}
.who-we-are-text p {
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #000;
    text-align: justify;
}
.who-we-are-grid {
    display: flex;
    gap: 15px;
}
.who-we-are-col {
    display: flex;
    flex-direction: column;
    gap: 15px;
    flex: 1;
}
.who-we-are-col img {
    width: 100%;
    object-fit: cover;
    border-radius: 8px;
}
.img-tall {
    aspect-ratio: 250 / 290;
}
.img-short {
    aspect-ratio: 250 / 150;
}

/* 3. Making Custom Packaging Simple */
.making-simple {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}
.making-simple-img {
    width: 100%;
    aspect-ratio: 520 / 400;
    object-fit: cover;
    border-radius: 12px;
}
.making-simple-text h2 {
    font-family: var(--font-heading);
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 20px;
}
.making-simple-text p {
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #000;
    text-align: justify;
}
.callout-box {
    background: #FDF9EE;
    padding: 20px;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    color: #000;
}

/* 4. Built Around What Matters */
.built-around {
    text-align: center;
}
.built-around h2 {
    font-family: var(--font-heading);
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 15px;
}
.built-around p.subtitle {
    font-size: 14px;
    color: #000 !important;
    margin-bottom: 50px;
}
.features-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}
.feature-card {
    background: #FDF9EE;
    padding: 30px 20px;
    border-radius: 12px;
    text-align: center;
    min-height: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
}
.feature-icon {
    background: #0b1c31;
    width: 50px;
    height: 50px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}
.feature-icon img {
    width: 30px;
}
.feature-card h3 {
    font-family: var(--font-heading);
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #000;
}
.feature-card p {
    font-size: 14px;
    color: #000;
    line-height: 1.6;
    text-align: justify;
}

/* 6. Our Valued Customers */
.valued-customers {
    text-align: center;
    padding: 40px 0 !important;
}
.valued-customers h2 {
    font-family: var(--font-heading);
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 40px;
}
.logo-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.logo-box {
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 115px;
}
.logo-box img {
    max-height: 108px;
    max-width: 108px;
    object-fit: contain;
}

/* Responsive */
@media (max-width: 991px) {
    .bottom-cta-banner {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    .making-simple {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    .who-we-are {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    .who-we-are-text {
        order: 2;
    }
    .who-we-are-text p:last-child {
        margin-bottom: 0;
    }
    .who-we-are-grid {
        order: 1;
    }
    .features-grid, .steps-grid, .logo-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .bottom-cta-banner {
        flex-direction: column;
        text-align: center;
        padding: 40px 20px;
    }
    .cta-image {
        margin-top: 30px;
    }
}
@media (max-width: 768px) {
    .features-grid, .steps-grid {
        grid-template-columns: 1fr;
    }
    .about-hero {
        padding: 100px 20px;
    }
    .about-breadcrumb {
        display: none !important;
    }
    .hero-text-content {
        margin-top: 0;
    }
    .about-hero h1 {
        font-size: 36px;
    }
    .who-we-are-text h2, .making-simple-text h2, .built-around h2, .order-process h2, .cta-text h2 {
        font-size: 28px;
    }
    .built-around p.subtitle {
        text-align: justify;
        color: #000 !important;
    }
    .feature-card {
        min-height: 213px;
    }
}
</style>

<main class="about-us-page">
@include('components.header')

<!-- 1. Hero Section -->
<section class="about-hero">
    <div class="about-container" style="text-align: left;">
        <div class="about-breadcrumb"><i class="fa fa-home"></i> Home > About Us</div>
    </div>
    <div class="hero-text-content" style="text-align: center;">
        <h1>About Us</h1>
        <p>From box styles and materials to custom sizes, pricing, and delivery, find quick answers to the questions we hear most.</p>
    </div>
</section>

<!-- 2. Who We Are -->
<section class="section-padding" style="padding: 40px 0;">
    <div class="about-container who-we-are">
        <div class="who-we-are-text">
            <h2>Who We Are</h2>
            <p>At Go Custom Boxes, we believe packaging is more than something that holds a product. It's an important part of your brand experience. Every box is an opportunity to make a strong first impression, communicate your brand identity, and give customers an experience worth remembering.</p>
            <p>We work with businesses to create custom packaging that balances design, durability, and functionality. From choosing the right material and dimensions to selecting printing and finishing options, we focus on the details that make your packaging truly fit your product.</p>
        </div>
        <div class="who-we-are-grid">
            <div class="who-we-are-col">
                <img src="{{ asset('uploads/best-seller-p1.png') }}" alt="Custom Perfume Box" class="img-tall" onerror="this.src='https://placehold.co/250x290/brown/white'">
                <img src="{{ asset('uploads/best-seller-p2.png') }}" alt="Custom Blue Box" class="img-short" onerror="this.src='https://placehold.co/250x150/blue/white'">
            </div>
            <div class="who-we-are-col">
                <img src="{{ asset('uploads/best-seller-p3.png') }}" alt="Custom Hexagon Box" class="img-short" onerror="this.src='https://placehold.co/250x150/tan/white'">
                <img src="{{ asset('uploads/category-natural-brown-kraft.png') }}" alt="Custom Beige Box" class="img-tall" onerror="this.src='https://placehold.co/250x290/tan/white'">
            </div>
        </div>
    </div>
</section>

<!-- 3. Making Custom Packaging Simple -->
<section class="section-padding" style="padding-top: 0; padding-bottom: 20px;">
    <div class="about-container making-simple">
        <div>
            <img src="{{ asset('uploads/category-textured.png') }}" alt="Custom Packaging" class="making-simple-img" onerror="this.src='https://placehold.co/600x600/darkgreen/white'">
        </div>
        <div class="making-simple-text">
            <h2>Making Custom Packaging Simple</h2>
            <p>Our purpose is to make custom packaging easier, more accessible, and more effective for businesses of all sizes. We help turn packaging ideas into practical, well-designed boxes that reflect each brand's unique identity.</p>
            <p>From selecting the right materials and dimensions to choosing printing and finishing options, we guide every project with care and attention to detail. Our goal is simple: create packaging that protects your product, strengthens your brand, and leaves a lasting impression.</p>
            <div class="callout-box">
                <span style="font-size: 28px; font-weight: 900; font-family: serif; line-height: 0; position: relative; top: 8px;">&ldquo;</span> 
                <span>Durable and high-quality materials for product protection.</span>
                <span style="font-size: 28px; font-weight: 900; font-family: serif; line-height: 0; position: relative; top: 8px;">&rdquo;</span>
            </div>
        </div>
    </div>
</section>

<!-- 4. Built Around What Matters -->
<section class="section-padding" style="padding-top: 10px; padding-bottom: 30px;">
    <div class="about-container built-around">
        <h2>Built Around What Matters</h2>
        <p class="subtitle">Every project starts with your product and ends with packaging designed to work for your brand.</p>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="{{ asset('uploads/premium-quality.svg') }}" alt="Premium Quality" onerror="this.src='https://placehold.co/30x30/transparent/white?text=Q'">
                </div>
                <h3>Premium Quality</h3>
                <p>Every order undergoes a 12-point quality inspection. We use only premium-grade materials that look and feel exceptional.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="{{ asset('uploads/fast-and-flexible.svg') }}" alt="Fast & Flexible" onerror="this.src='https://placehold.co/30x30/transparent/white?text=F'">
                </div>
                <h3>Fast & Flexible</h3>
                <p>Average production time is just 7 days. Rush options are available on select products to help keep your packaging on schedule.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="{{ asset('uploads/design-and-support.svg') }}" alt="Design & Support" onerror="this.src='https://placehold.co/30x30/transparent/white?text=D'">
                </div>
                <h3>Design & Support</h3>
                <p>Enjoy unlimited design revisions and dedicated support from a packaging expert who understands your brand, specifications, and preferences from start to finish.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="{{ asset('uploads/clear-and-sustainable.svg') }}" alt="Clear & Sustainable" onerror="this.src='https://placehold.co/30x30/transparent/white?text=S'">
                </div>
                <h3>Clear & Sustainable</h3>
                <p>No hidden fees or surprise charges. Get transparent pricing and recyclable packaging made from responsibly sourced materials.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. How It Works -->
@include('components.howitworks')

<!-- 6. Our Valued Customers -->
<section class="section-padding valued-customers">
    <div class="about-container">
        <h2>Our Valued Customers</h2>
        <div class="logo-grid">
            <div class="logo-box"><img src="{{ asset('uploads/trusted-true-girl.svg') }}" alt="TrueGirl" onerror="this.src='https://placehold.co/150x50/white/grey?text=Logo'"></div>
            <div class="logo-box"><img src="{{ asset('uploads/trusted-organics.svg') }}" alt="Organics" onerror="this.src='https://placehold.co/150x50/white/grey?text=Logo'"></div>
            <div class="logo-box"><img src="{{ asset('uploads/trusted-jeeter-mart.svg') }}" alt="Jeeter Mart" onerror="this.src='https://placehold.co/150x50/white/grey?text=Logo'"></div>
            <div class="logo-box"><img src="{{ asset('uploads/trusted-bass-pro-shop.svg') }}" alt="Bass Pro Shops" onerror="this.src='https://placehold.co/150x50/white/grey?text=Logo'"></div>
            <div class="logo-box"><img src="{{ asset('uploads/trusted-burger-bar.svg') }}" alt="Burger Bar" onerror="this.src='https://placehold.co/150x50/white/grey?text=Logo'"></div>
            <div class="logo-box"><img src="{{ asset('uploads/trusted-hulu-motor.svg') }}" alt="Hulu Motel" onerror="this.src='https://placehold.co/150x50/white/grey?text=Logo'"></div>
            <div class="logo-box"><img src="{{ asset('uploads/trusted-organics.svg') }}" alt="Organics" onerror="this.src='https://placehold.co/150x50/white/grey?text=Logo'"></div>
            <div class="logo-box"><img src="{{ asset('uploads/trusted-hulu-motor.svg') }}" alt="Hulu Motel" onerror="this.src='https://placehold.co/150x50/white/grey?text=Logo'"></div>
        </div>
    </div>
</section>

<!-- 7. Bottom CTA -->
@include('components.cta')

@include('components.footer')
</main>
