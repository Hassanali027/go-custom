<style>
    .product-quote-section-new {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto 60px;
        background-color: #0A2240;
        border-radius: 0; /* Removed border-radius */
        overflow: hidden;
        font-family: 'DM Sans', sans-serif;
        box-sizing: border-box;
        height: 705px;
        display: flex;
        align-items: center;
        position: relative;
    }
    
    .pqn-grid {
        display: flex;
        flex-direction: row;
        width: 100%;
        position: relative;
        z-index: 1;
        gap: 30px;
        align-items: center;
    }
    
    .pqn-form-col {
        flex: 0 0 812px;
        max-width: 812px;
        height: 657px;
        background-color: #FFFDF0;
        padding: 40px;
        border-radius: 16px;
        margin: 24px 0;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }
    
    .pqn-header {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 30px;
    }
    
    .pqn-icon-box {
        width: 60px;
        height: 60px;
        background-color: #ffffff;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-bottom: 3px solid #0A2240;
    }
    
    .pqn-icon-box img {
        width: 46px;
        height: 46px;
    }
    
    .pqn-header-text h2 {
        margin: 0 0 10px 0;
        font-size: 26px;
        font-weight: 700;
        color: #000;
        font-family: 'Open Sans', sans-serif;
    }
    
    .pqn-header-text p {
        margin: 0;
        font-size: 14px;
        color: #555;
        line-height: 1.5;
    }
    
    .pqn-form-row {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
    }
    
    .pqn-form-group {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    
    .pqn-label {
        font-size: 13px;
        font-weight: 700;
        color: #000;
        font-family: 'Open Sans', sans-serif;
    }
    
    .pqn-input {
        background-color: #fff;
        border: 1px solid #EAEAEA;
        border-radius: 6px;
        padding: 12px 15px;
        font-size: 14px;
        color: #333;
        font-family: 'Open Sans', sans-serif;
        width: 100%;
        box-sizing: border-box;
        height: 48px;
    }
    
    textarea.pqn-input {
        height: 96px;
        resize: vertical;
    }
    
    select.pqn-input {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23333' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px;
        padding-right: 40px;
    }
    
    .pqn-input:focus {
        outline: none;
        border-color: #0A2240;
    }
    
    .pqn-btn {
        background-color: #F6B72D;
        color: #0A2240;
        border: none;
        border-radius: 6px;
        width: 284px;
        height: 54px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: background-color 0.2s ease;
        font-family: 'Open Sans', sans-serif;
    }
    
    .pqn-btn:hover {
        background-color: #e5a927;
    }
    
    .pqn-btn-wrapper {
        text-align: center;
        margin-top: 30px;
    }
    
    .pqn-sidebar-col {
        flex: 1;
        padding: 24px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    
    .pqn-section-dots {
        position: absolute;
        top: 0;
        right: 0;
        width: 320px;
        height: auto;
        opacity: 0.6;
        pointer-events: none;
        z-index: 0;
    }
    
    .pqn-grid {
        display: flex;
        flex-direction: row;
        width: 100%;
        position: relative;
        z-index: 1;
    }
    
    .pqn-product-img {
        width: 211px;
        height: 207px;
        object-fit: contain;
        margin-top: 60px;
        margin-bottom: 30px;
        filter: drop-shadow(0 15px 20px rgba(0,0,0,0.3));
    }
    
    .pqn-features-grid {
        display: grid;
        grid-template-columns: 133px 133px;
        justify-content: center;
        gap: 15px;
        width: 100%;
        margin-bottom: 30px;
    }
    
    .pqn-feature-card {
        width: 133px;
        height: 119.33px;
        box-sizing: border-box;
        background-color: #fff;
        border-radius: 8px;
        padding: 12px 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 8px;
    }
    
    .pqn-feature-card svg {
        width: 24px;
        height: 24px;
        color: #0A2240;
    }
    
    .pqn-feature-text {
        font-size: 12px;
        font-weight: 700;
        color: #0A2240;
        line-height: 1.3;
    }
    
    .pqn-trust-badges {
        display: flex;
        gap: 20px;
        justify-content: center;
        width: 100%;
    }
    
    .pqn-trust-badge {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .pqn-trust-badge img {
        height: 35px;
        object-fit: contain;
    }
    
    @media (max-width: 991px) {
        .product-quote-section-new {
            height: auto;
            padding: 20px 0;
        }
        .pqn-grid {
            flex-direction: column;
        }
        .pqn-form-col {
            flex: auto;
            max-width: 100%;
            height: auto;
            margin: 15px 15px 0 15px;
        }
        .pqn-sidebar-col {
            padding: 30px 15px;
        }
        .pqn-form-row {
            flex-direction: column;
        }
    }
</style>

<section class="product-quote-section-new">
    <!-- Dots background top right of section -->
    <img src="{{ asset('uploads/request-sample-kit-dots.svg') }}" alt="" class="pqn-section-dots">

    <div class="container" style="position: relative; z-index: 1; display: flex;">
        <div class="pqn-grid">
            <!-- Left Form Column -->
        <div class="pqn-form-col">
            <div class="pqn-header">
                <div class="pqn-icon-box">
                    <img src="{{ asset('uploads/request-kit-icon.svg') }}" alt="Request Kit" onerror="this.src='https://placehold.co/40x40/0a2240/ffffff?text=Box'">
                </div>
                <div class="pqn-header-text">
                    <h2>Request A Sample Kit</h2>
                    <p>Fill out the form below and we'll send you a sample kit tailored to your needs.</p>
                </div>
            </div>
            
            <form action="{{ url('/submit-quote') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(session('success'))
                    <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif
                
                <div class="pqn-form-row">
                    <div class="pqn-form-group">
                        <label class="pqn-label">Name *</label>
                        <input type="text" name="name" class="pqn-input" placeholder="Name" required>
                    </div>
                    <div class="pqn-form-group">
                        <label class="pqn-label">Email Address *</label>
                        <input type="email" name="email" class="pqn-input" placeholder="Email" required>
                    </div>
                    <div class="pqn-form-group">
                        <label class="pqn-label">Phone *</label>
                        <input type="tel" name="phone" class="pqn-input" placeholder="Phone number" required>
                    </div>
                </div>
                
                <div class="pqn-form-row">
                    <div class="pqn-form-group">
                        <label class="pqn-label">Company Name</label>
                        <input type="text" name="company_name" class="pqn-input" placeholder="Company">
                    </div>
                    <div class="pqn-form-group">
                        <label class="pqn-label">Website</label>
                        <input type="text" name="website" class="pqn-input" placeholder="Website">
                    </div>
                    <div class="pqn-form-group">
                        <label class="pqn-label">Physical Address</label>
                        <input type="text" name="physical_address" class="pqn-input" placeholder="Address">
                    </div>
                </div>
                
                <div class="pqn-form-row">
                    <div class="pqn-form-group">
                        <label class="pqn-label">Box Style *</label>
                        <select name="box_style" class="pqn-input" required>
                            <option value="{{ $product['title'] ?? 'Select your box style' }}" selected>{{ $product['title'] ?? 'Select your box style' }}</option>
                        </select>
                    </div>
                    <div class="pqn-form-group">
                        <label class="pqn-label">Quantity *</label>
                        <input type="number" name="quantity" class="pqn-input" placeholder="Enter quantity" required>
                    </div>
                </div>
                
                <div class="pqn-form-group" style="margin-bottom: 10px;">
                    <label class="pqn-label">Message</label>
                    <textarea name="message" class="pqn-input" rows="4" placeholder="Enter your message"></textarea>
                </div>
                
                <!-- Hidden inputs for validation -->
                <input type="hidden" name="width" value="N/A">
                <input type="hidden" name="length" value="N/A">
                <input type="hidden" name="depth" value="N/A">
                <input type="hidden" name="units" value="N/A">
                
                <div class="pqn-btn-wrapper">
                    <button type="submit" class="pqn-btn">Get Free Quote</button>
                </div>
            </form>
        </div>
        
        <!-- Right Sidebar Column -->
        <div class="pqn-sidebar-col">
            <img src="{{ asset('uploads/request-kit-sec-img.png') }}" alt="Premium Box" class="pqn-product-img" onerror="this.src='https://placehold.co/300x200/ffffff/0a2240?text=Premium+Box'">
            
            <div class="pqn-features-grid">
                <div class="pqn-feature-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                    <span class="pqn-feature-text">Global Sourcing</span>
                </div>
                <div class="pqn-feature-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    <span class="pqn-feature-text">3D Design<br>Services</span>
                </div>
                <div class="pqn-feature-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <span class="pqn-feature-text">Flexible Lead<br>Times</span>
                </div>
                <div class="pqn-feature-card">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    <span class="pqn-feature-text">24/7 Support</span>
                </div>
            </div>
            
            <div class="pqn-trust-badges">
                <div class="pqn-trust-badge">
                    <img src="{{ asset('uploads/google-review.svg') }}" alt="Google Rating">
                </div>
                <div class="pqn-trust-badge">
                    <img src="{{ asset('uploads/trust-pilot-review.svg') }}" alt="Trustpilot">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
