<style>
    .quote-section {
        background: #FFFFFF;
        width: 100%;
        padding: 0 0 20px 0 !important;
        margin-top: 0 !important;
        font-family: 'DM Sans', sans-serif;
        position: relative;
    }

    .quote-container {
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 24px;
        box-sizing: border-box;
        display: flex;
        align-items: stretch;
        gap: 120px;
    }

    /* ── Left column: Form Card ── */
    .quote-form-card {
        width: 780px;
        flex-shrink: 0;
        background: var(--primary-color, #0B2240);
        border-radius: 12px;
        padding: 40px;
        box-sizing: border-box;
        color: #FFFFFF;
    }

    .quote-form-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 24px;
        font-weight: 700;
        color: #FFFFFF;
        text-align: center;
        margin-bottom: 30px;
        margin-top: 0;
    }

    /* Form grid system */
    .qf-main-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 20px;
    }
    .qf-span-3 { grid-column: span 3; }
    .qf-span-4 { grid-column: span 4; }
    .qf-span-8 { grid-column: span 8; }
    .qf-span-12 { grid-column: span 12; }

    .qf-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .qf-group label {
        font-size: 13px;
        font-weight: 500;
        color: #FFFFFF;
    }

    .qf-group input,
    .qf-group select,
    .qf-group textarea {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 6px;
        color: #FFFFFF;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        padding: 0 12px;
        height: 44px;
        outline: none;
        transition: border-color 0.2s;
    }
    
    .qf-group select {
        appearance: none;
        -webkit-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="white" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 8px center;
    }

    .qf-group select option {
        background: var(--primary-color, #0B2240);
        color: #FFFFFF;
    }

    .qf-group input::placeholder,
    .qf-group textarea::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    .qf-group input:focus,
    .qf-group select:focus,
    .qf-group textarea:focus {
        border-color: var(--secondary-color, #FFB400);
    }

    .qf-group textarea {
        height: auto;
        min-height: 80px;
        padding: 12px;
        resize: vertical;
    }

    /* Custom File Upload */
    .qf-file-wrap {
        display: flex;
        align-items: center;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 6px;
        overflow: hidden;
        height: 44px;
    }

    .qf-file-wrap input[type="text"] {
        flex: 1;
        border: none;
        background: transparent;
        color: rgba(255, 255, 255, 0.4);
        padding: 0 12px;
        font-size: 14px;
        height: 100%;
        outline: none;
    }

    .qf-file-btn {
        background: var(--secondary-color, #FFB400);
        color: var(--primary-color, #0B2240);
        border: none;
        height: 100%;
        padding: 0 20px;
        font-weight: 600;
        font-size: 14px;
        cursor: pointer;
        transition: opacity 0.2s;
    }

    .qf-file-btn:hover {
        opacity: 0.9;
    }

    .qf-submit-btn {
        background: var(--secondary-color, #FFB400);
        color: var(--primary-color, #0B2240);
        border: none;
        border-radius: 6px;
        padding: 0;
        height: 50px;
        font-size: 16px;
        font-weight: 700;
        font-family: 'Open Sans', sans-serif;
        width: 100%;
        max-width: 236px;
        margin: 0 auto;
        display: block;
        cursor: pointer;
        transition: transform 0.2s;
        margin-top: 24px;
    }

    .qf-submit-btn:hover {
        transform: translateY(-2px);
    }

    /* ── Right column: Features ── */
    .quote-features {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding-top: 83px;
        padding-bottom: 90px;
        gap:30px;
    }

    .qf-feature {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        /* gap: px; */
    }

    .qf-feature-icon {
        width: 63px;
        height: 63px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .qf-feature-icon img, .qf-feature-icon svg {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .qf-feature-text h3 {
        font-family: 'Open Sans', sans-serif;
        font-size: 18px;
        font-weight: 700;
        color: var(--primary-color, #0B2240);
        margin: 0 0 4px 0;
    }

    .qf-feature-text p {
        font-size: 14px;
        color: #666666;
        margin: 0;
        line-height: 1.5;
    }

    @media (max-width: 1100px) {
        .quote-container {
            flex-direction: column;
            align-items: center;
            gap: 40px;
        }
        .quote-form-card {
            width: 100%;
            max-width: 780px;
        }
        .quote-features {
            width: 100%;
            max-width: 780px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .quote-section {
            padding: 40px 0;
            margin-top: 4px;
        }
        .quote-form-card {
            padding: 24px;
            width: 108%;
        }
        .qf-span-6-m { grid-column: span 6; }
        .qf-span-12-m { grid-column: span 12; }
        .quote-features {
            display: none;
        }
    }
</style>

<section class="quote-section">
    <div class="quote-container">

        <!-- Left: Form Card -->
        <div class="quote-form-card">
            <h2 class="quote-form-title">Get Custom Quote</h2>

            @if(session('success'))
                <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px; font-size: 14px;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ url('/submit-quote') }}" method="POST" enctype="multipart/form-data" class="qf-main-grid">
                @csrf

                <!-- Row 1: Name, Email, Phone -->
                <div class="qf-group qf-span-4 qf-span-12-m">
                    <label>Name *</label>
                    <input type="text" name="name" placeholder="Enter your name" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')" required>
                </div>
                <div class="qf-group qf-span-4 qf-span-12-m">
                    <label>Email Address *</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="qf-group qf-span-4 qf-span-12-m">
                    <label>Phone *</label>
                    <input type="tel" name="phone" placeholder="Enter your number" oninput="this.value = this.value.replace(/[^0-9+\-\s()]/g, '')" required>
                </div>

                <!-- Row 2: Dimensions -->
                <div class="qf-group qf-span-3 qf-span-6-m">
                    <label>Width *</label>
                    <input type="text" name="width" placeholder="Width" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required>
                </div>
                <div class="qf-group qf-span-3 qf-span-6-m">
                    <label>Length *</label>
                    <input type="text" name="length" placeholder="Length" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required>
                </div>
                <div class="qf-group qf-span-3 qf-span-6-m">
                    <label>Depth *</label>
                    <input type="text" name="depth" placeholder="Depth" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required>
                </div>
                <div class="qf-group qf-span-3 qf-span-6-m">
                    <label>Unit *</label>
                    <select name="units" required>
                        <option value="mm">mm</option>
                        <option value="cm">cm</option>
                        <option value="inches">inches</option>
                    </select>
                </div>

                <!-- Row 3 & 4: Material, Color, Turn Around, Quantity -->
                <div class="qf-group qf-span-4 qf-span-6-m">
                    <label>Select Material</label>
                    <select name="material">
                        <option value="">Choose option</option>
                        <option value="Rigid Board">Rigid Board</option>
                        <option value="Cardboard">Cardboard</option>
                        <option value="Kraft Paper">Kraft Paper</option>
                        <option value="Corrugated">Corrugated</option>
                    </select>
                </div>
                <div class="qf-group qf-span-4 qf-span-6-m">
                    <label>Color Options</label>
                    <select name="color">
                        <option value="">Choose option</option>
                        <option value="1 Color">1 Color</option>
                        <option value="2 Colors">2 Colors</option>
                        <option value="3 Colors">3 Colors</option>
                        <option value="Full Color">Full Color</option>
                    </select>
                </div>
                <div class="qf-group qf-span-4 qf-span-6-m">
                    <label>Turn Around Time</label>
                    <select name="turn_around_time">
                        <option value="">Choose option</option>
                        <option value="Standard (8-10 Days)">Standard (8-10 Days)</option>
                        <option value="Rush (4-6 Days)">Rush (4-6 Days)</option>
                    </select>
                </div>
                <div class="qf-group qf-span-4 qf-span-6-m">
                    <label>Quantity *</label>
                    <input type="number" name="quantity" placeholder="Enter quantity" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                </div>
                
                <div class="qf-group qf-span-8 qf-span-12-m">
                    <label>Upload File Here</label>
                    <div class="qf-file-wrap">
                        <input type="file" name="quote_file" id="qf-file-input" style="display: none;" onchange="document.getElementById('qf-file-name').value = this.files[0] ? this.files[0].name : ''">
                        <input type="text" id="qf-file-name" placeholder="No file chosen" readonly>
                        <button type="button" class="qf-file-btn" onclick="document.getElementById('qf-file-input').click()">Upload</button>
                    </div>
                </div>

                <!-- Row 5: Message -->
                <div class="qf-group qf-span-12 qf-span-12-m">
                    <label>Message</label>
                    <textarea name="message" placeholder="Enter your message"></textarea>
                </div>

                <!-- Submit -->
                <div class="qf-span-12 qf-span-12-m">
                    <button type="submit" class="qf-submit-btn" style="margin-top: 0;">Get Free Quote</button>
                </div>
            </form>
        </div>

        <!-- Right: Features -->
        <div class="quote-features">
            <!-- Feature 1 -->
            <div class="qf-feature">
                <div class="qf-feature-icon">
                    <img src="{{ asset('uploads/competitive-icon.svg') }}" alt="Competitive Pricing">
                </div>
                <div class="qf-feature-text">
                    <h3>Competitive Pricing</h3>
                    <p>High quality printing that fits your budget.</p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="qf-feature">
                <div class="qf-feature-icon">
                    <img src="{{ asset('uploads/no-die-icon.svg') }}" alt="No Die or Plate Charges">
                </div>
                <div class="qf-feature-text">
                    <h3>No Die or Plate Charges</h3>
                    <p>No hidden charges, slow or custom designs.</p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="qf-feature">
                <div class="qf-feature-icon">
                    <img src="{{ asset('uploads/fast-turn-icon.svg') }}" alt="Fast Turnarounds">
                </div>
                <div class="qf-feature-text">
                    <h3>Fast Turnarounds</h3>
                    <p>Get your packaging rapidly when you need it.</p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="qf-feature">
                <div class="qf-feature-icon">
                    <img src="{{ asset('uploads/free-ship-icon.svg') }}" alt="Free Shipping">
                </div>
                <div class="qf-feature-text">
                    <h3>Free Shipping</h3>
                    <p>Anywhere in the USA, we ship with zero hidden fees.</p>
                </div>
            </div>
        </div>

    </div>
</section>
