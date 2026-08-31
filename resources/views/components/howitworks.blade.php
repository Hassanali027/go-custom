<style>
.how-it-works-section {
    background-color: #0A2240;
    padding: 2.5rem 1.25rem 2.8125rem;
    font-family: 'DM Sans', sans-serif;
    color: #fff;
    text-align: center;
    width: 100%;
    position: relative;
    overflow: hidden;
}
.hiw-container {
    max-width: 80rem;
    margin: 0 auto;
    width: 100%;
    padding: 0 3.4375rem;
    box-sizing: border-box;
}
@media (max-width: 48rem) {
    .hiw-container {
        padding: 0 1.25rem;
    }
}
@media (max-width: 30rem) {
    .hiw-container {
        padding: 0 1rem;
    }
}
.hiw-label {
    color: #F6B72D;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.0938rem;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
    font-family: 'Open Sans', sans-serif;
}
.hiw-title {
    font-size: 2rem;
    font-weight: 700;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 0.875rem;
    color: #fff;
    line-height: 1.2;
}
.hiw-subtitle {
    font-size: 0.9062rem;
    color: rgba(255, 255, 255, 0.8);
    max-width: 42.5rem;
    margin: 0 auto 2.1875rem;
    line-height: 1.5;
}
.hiw-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.875rem;
    justify-content: center;
    align-items: start;
}
.hiw-step {
    width: 100%;
    max-width: 13.75rem;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.hiw-img-wrap {
    height: 8.125rem;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.375rem;
}
.hiw-img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
    filter: drop-shadow(0 0.625rem 0.9375rem rgba(0,0,0,0.25));
}
.hiw-step-title {
    font-size: 1.125rem;
    font-weight: 700;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 0.75rem;
    color: #fff;
}
.hiw-step-desc {
    font-size: 0.8125rem;
    color: rgba(255, 255, 255, 0.75);
    line-height: 1.55;
    margin: 0;
}

@media (max-width: 61.9375rem) {
    .hiw-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 2.5rem 1.25rem;
    }
    .hiw-title {
        font-size: clamp(1rem, 3.8vw, 1.75rem);
    }
}
@media (max-width: 48rem) {
    .how-it-works-section {
        display: block;
    }
    .hiw-container {
        padding: 0 1rem !important;
    }
    .hiw-subtitle {
        text-align: justify;
    }
    .hiw-title {
        font-size: clamp(1.2rem, 5.2vw, 1.55rem) !important;
        font-weight: 700 !important;
        white-space: nowrap !important;
        overflow: visible !important;
        max-width: 100% !important;
        margin-left: auto !important;
        margin-right: auto !important;
        letter-spacing: -0.01em;
    }
    .hide-on-mobile-home {
        display: none !important;
    }
}
</style>

<section class="how-it-works-section {{ request()->is('/') || (isset($hideOnMobile) && $hideOnMobile) ? 'hide-on-mobile-home' : '' }}">
    <div class="hiw-container">
        <div class="hiw-label">HOW IT WORKS</div>
        <h2 class="hiw-title">Simple 4&ndash;Step Order Process</h2>
        <p class="hiw-subtitle">Ordering custom printed boxes is quick and easy, from your first idea to delivery at your door.</p>
        
        <div class="hiw-grid">
            <!-- Step 1 -->
            <div class="hiw-step">
                <div class="hiw-img-wrap">
                    <img src="{{ asset('uploads/explore-one.svg') }}" alt="Explore" class="hiw-img"
                         onerror="this.src='https://placehold.co/150x120/0a2240/F6B72D?text=1.+Explore'">
                </div>
                <h3 class="hiw-step-title">1. Explore</h3>
                <p class="hiw-step-desc">Select your custom box, retail display or packaging accessory to get started.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="hiw-step">
                <div class="hiw-img-wrap">
                    <img src="{{ asset('uploads/explore-two.svg') }}" alt="Choose" class="hiw-img"
                         onerror="this.src='https://placehold.co/150x120/0a2240/F6B72D?text=2.+Choose'">
                </div>
                <h3 class="hiw-step-title">2. Choose</h3>
                <p class="hiw-step-desc">Explore standard sizes and quantities to view pricing and start your design.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="hiw-step">
                <div class="hiw-img-wrap">
                    <img src="{{ asset('uploads/explore-three.svg') }}" alt="Design" class="hiw-img"
                         onerror="this.src='https://placehold.co/150x120/0a2240/F6B72D?text=3.+Design'">
                </div>
                <h3 class="hiw-step-title">3. Design</h3>
                <p class="hiw-step-desc">Upload your artwork or create your own design using our templates.</p>
            </div>
            
            <!-- Step 4 -->
            <div class="hiw-step">
                <div class="hiw-img-wrap">
                    <img src="{{ asset('uploads/explore-four.svg') }}" alt="Order" class="hiw-img"
                         onerror="this.src='https://placehold.co/150x120/0a2240/F6B72D?text=4.+Order'">
                </div>
                <h3 class="hiw-step-title">4. Order</h3>
                <p class="hiw-step-desc">We'll review your file, follow up with you if needed, and bring your vision to life.</p>
            </div>
        </div>
    </div>
</section>
