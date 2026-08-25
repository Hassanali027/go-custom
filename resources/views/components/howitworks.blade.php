<style>
.how-it-works-section {
    background-color: #0A2240;
    padding: 40px 20px 45px;
    font-family: 'DM Sans', sans-serif;
    color: #fff;
    text-align: center;
    width: 100%;
    position: relative;
    overflow: hidden;
}
.hiw-container {
    max-width: 1280px;
    margin: 0 auto;
    width: 100%;
    padding: 0 55px;
    box-sizing: border-box;
}
@media (max-width: 768px) {
    .hiw-container {
        padding: 0 20px;
    }
}
@media (max-width: 480px) {
    .hiw-container {
        padding: 0 16px;
    }
}
.hiw-label {
    color: #F6B72D;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 12px;
    font-family: 'Open Sans', sans-serif;
}
.hiw-title {
    font-size: 32px;
    font-weight: 700;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 14px;
    color: #fff;
    line-height: 1.2;
}
.hiw-subtitle {
    font-size: 14.5px;
    color: rgba(255, 255, 255, 0.8);
    max-width: 680px;
    margin: 0 auto 35px;
    line-height: 1.5;
}
.hiw-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    justify-content: center;
    align-items: start;
}
.hiw-step {
    width: 100%;
    max-width: 220px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.hiw-img-wrap {
    height: 130px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 22px;
}
.hiw-img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
    filter: drop-shadow(0 10px 15px rgba(0,0,0,0.25));
}
.hiw-step-title {
    font-size: 18px;
    font-weight: 700;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 12px;
    color: #fff;
}
.hiw-step-desc {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.75);
    line-height: 1.55;
    margin: 0;
}

@media (max-width: 991px) {
    .hiw-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 40px 20px;
    }
}
@media (max-width: 575px) {
    .hiw-grid {
        grid-template-columns: 1fr;
        gap: 35px;
    }
    .how-it-works-section {
        padding: 50px 15px;
    }
}
</style>

<section class="how-it-works-section">
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
