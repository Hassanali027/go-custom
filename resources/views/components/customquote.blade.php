<style>
    .quote-section {
        background: #FFFFFF;
        width: 100%;
        padding: 0 0 0.75rem 0 !important;
        margin-top: 0 !important;
        font-family: 'DM Sans', sans-serif;
        position: relative;
    }

    .quote-container {
        max-width: 90rem;
        margin: 0 auto;
        padding: 0 1.5rem;
        box-sizing: border-box;
        display: flex;
        align-items: stretch;
        gap:3.5rem;
    }

    /* ── Left column: Form Card ── */
    .quote-form-card {
        width: 48.75rem;
        flex-shrink: 0;
        background: var(--primary-color, #0B2240);
        border-radius: 0.75rem;
        padding: 2.25rem 2.5rem;
        box-sizing: border-box;
        color: #FFFFFF;
        height: auto;
        min-height: 0;
        display: flex;
        flex-direction: column;
    }

    .quote-form-title {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: #FFFFFF;
        text-align: center;
        margin-bottom: 1.875rem;
        margin-top: 0;
    }

    .quote-success-message {
        display: block;
        width: 100%;
        box-sizing: border-box;
        clear: both;
        background: #FFFFFF;
        border: 1px solid var(--primary-color, #0B2240);
        color: var(--primary-color, #0B2240);
        padding: 1.6rem 1.25rem;
        border-radius: 1.125rem;
        margin: -0.25rem 0 1.875rem;
        font-family: 'Open Sans', sans-serif;
        font-size: 1.125rem;
        font-weight: 700;
        line-height: 1.35;
        text-align: center;
        flex: 0 0 auto;
        align-self: stretch;
    }

    /* Form grid system */
    .qf-main-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 1.25rem;
        width: 100%;
    }
    .qf-span-3 { grid-column: span 3; }
    .qf-span-4 { grid-column: span 4; }
    .qf-span-8 { grid-column: span 8; }
    .qf-span-12 { grid-column: span 12; }

    .qf-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .qf-group label {
        font-size: 0.8125rem;
        font-weight: 500;
        color: #FFFFFF;
    }

    .qf-group input,
    .qf-group select,
    .qf-group textarea {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 0.375rem;
        color: #FFFFFF !important;
        -webkit-text-fill-color: #FFFFFF;
        caret-color: #FFFFFF;
        font-family: 'DM Sans', sans-serif;
        font-size: 0.875rem;
        padding: 0 0.75rem;
        height: 2.75rem;
        outline: none;
        transition: border-color 0.2s;
    }
    
    .qf-group select {
        appearance: none;
        -webkit-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="white" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 0.5rem center;
    }

    .qf-group select option {
        background: var(--primary-color, #0B2240);
        color: #FFFFFF;
    }

    .qf-group select.is-placeholder {
        color: #4B5563 !important;
        -webkit-text-fill-color: #4B5563 !important;
    }

    .qf-group input::placeholder,
    .qf-group textarea::placeholder,
    .product-search-input::placeholder {
        color: #4B5563 !important;
        -webkit-text-fill-color: #4B5563 !important;
        opacity: 1;
        font-size: 0.8125rem;
        font-weight: 300;
        letter-spacing: 0.02em;
    }

    .qf-group input:-webkit-autofill,
    .qf-group input:-webkit-autofill:hover, 
    .qf-group input:-webkit-autofill:focus, 
    .qf-group input:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 30px #0B2240 inset !important;
        -webkit-text-fill-color: #ffffff !important;
        transition: background-color 5000s ease-in-out 0s;
    }

    .qf-group input:focus,
    .qf-group select:focus,
    .qf-group textarea:focus {
        border-color: var(--secondary-color, #FFB400);
    }

    .qf-group input[type="number"]::-webkit-inner-spin-button,
    .qf-group input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .qf-group input[type="number"] { -moz-appearance: textfield; }

    .qf-group textarea {
        height: auto;
        min-height: 5rem;
        padding: 0.75rem;
        resize: none;
    }

    /* Custom File Upload */
    .qf-file-wrap {
        display: flex;
        align-items: center;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 0.375rem;
        overflow: hidden;
        height: 2.75rem;
    }

    .qf-file-wrap input[type="text"] {
        flex: 1;
        min-width: 0;
        border: none;
        background: transparent;
        color: rgba(255, 255, 255, 0.4);
        padding: 0 0.75rem;
        font-size: 0.875rem;
        height: 100%;
        outline: none;
    }

    .qf-file-btn {
        background: var(--secondary-color, #FFB400);
        color: var(--primary-color, #0B2240);
        border: none;
        height: 100%;
        padding: 0 1.25rem;
        min-width: 5.25rem;
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        font-weight: 600;
        font-size: 0.875rem;
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
        border-radius: 0.375rem;
        padding: 0;
        height: 3.125rem;
        font-size: 1rem;
        font-weight: 700;
        font-family: 'Open Sans', sans-serif;
        width: 100%;
        max-width: 14.75rem;
        margin: 0 auto;
        display: block;
        cursor: pointer;
        transition: transform 0.2s;
        margin-top: 1.5rem;
    }

    .qf-submit-btn:hover {
        transform: translateY(-0.125rem);
    }

    /* ── Right column: Features ── */
    .quote-features {
        flex: 1;
        align-self: stretch;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 2.25rem 0;
        box-sizing: border-box;
        min-height: 0;
        gap: 0;
    }

    .qf-feature {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        /* gap: px; */
    }

    .qf-feature-icon {
        width: 2.75rem;
        height: 2.75rem;
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
        font-size: 1.125rem !important;
        font-weight: 700;
        color: var(--primary-color, #0B2240);
        margin: 0 0 0.25rem 0;
        line-height: 1.3;
    }

    .qf-feature-text p {
        font-size: 0.875rem !important;
        color: #666666;
        margin: 0;
        line-height: 1.5;
    }

    @media (max-width: 68.75rem) {
        .quote-container {
            flex-direction: column;
            align-items: center;
            gap: 2.5rem;
        }
        .quote-form-card {
            width: 100%;
            max-width: 48.75rem;
        }
        .quote-features {
            width: 100%;
            max-width: 48.75rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.875rem;
        }
    }

    @media (max-width: 48rem) {
        .quote-section {
            padding: 2.5rem 0;
            margin-top: 0.25rem;
        }
        .quote-form-card {
            padding: 1.5rem;
            width: 108%;
        }
        .qf-span-6-m { grid-column: span 6; }
        .qf-span-12-m { grid-column: span 12; }
        .quote-features {
            display: none;
        }
        .qf-group select {
            padding-right: 1.25rem !important;
            padding-left: 0.375rem !important;
            background-position: right 0.25rem center !important;
            font-size: 0.6875rem !important;
        }
        .qf-group input {
            padding-left: 0.375rem !important;
            padding-right: 0.375rem !important;
            font-size: 0.6875rem !important;
        }
        .qf-file-wrap input[type="text"] {
            padding: 0 0.375rem !important;
            font-size: 0.6875rem !important;
        }
        .qf-file-btn {
            padding: 0 0.625rem !important;
            min-width: auto !important;
            font-size: 0.75rem !important;
        }
    }
</style>

<section class="quote-section">
    <div class="quote-container">

        <!-- Left: Form Card -->
        <div class="quote-form-card">
            <h2 class="quote-form-title">Get Custom Quote</h2>

            @if(session('success'))
                <div class="quote-success-message" role="alert" id="quote-success-message">
                    {{ session('success') }}
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const successMsg = document.getElementById('quote-success-message');
                        if (successMsg) {
                            successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        }
                    });
                </script>
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

                <!-- Row 3: Product, paper stock and color -->
                <div class="qf-group qf-span-4 qf-span-6-m">
                    <label>Select Box Style</label>
                    <x-searchable-product-select placeholder="Select your box style" />
                </div>
                <div class="qf-group qf-span-4 qf-span-6-m">
                    <label>Select Paper Stock</label>
                    <select name="paper_stock">
                        <option value="">Choose option</option>
                        <option>12pt Cardboard Stock</option><option>14pt Cardboard Stock</option>
                        <option>16pt Cardboard Stock</option><option>18pt Cardboard Stock</option>
                        <option>20pt Cardboard Stock</option><option>22pt Cardboard Stock</option>
                        <option>24pt Cardboard Stock</option><option>Kraft Stock</option>
                        <option>Recycled BuxBoard</option><option>Corrugated Stock</option>
                        <option>No Printing Required</option>
                    </select>
                </div>
                <div class="qf-group qf-span-4 qf-span-6-m">
                    <label>Color Options</label>
                    <select name="color">
                        <option value="">Choose option</option>
                        <option value="1 Color">1 Color</option><option value="2 Colors">2 Colors</option>
                        <option value="3 Colors">3 Colors</option><option value="Full Color">Full Color</option>
                    </select>
                </div>
                <div class="qf-group qf-span-4 qf-span-6-m">
                    <label>Quantity *</label>
                    <input type="number" name="quantity" placeholder="Enter quantity" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                </div>
                <div class="qf-group qf-span-4 qf-span-6-m">
                    <label>Paper Coating</label>
                    <select name="paper_coating">
                        <option value="">Select Paper Coating</option>
                        <option>Aqueous Coating</option><option>Semi Gloss</option>
                        <option>Gloss UV</option><option>Matte UV</option><option>Semi Matte</option>
                    </select>
                </div>
                
                <div class="qf-group qf-span-4 qf-span-6-m">
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
                    <p>High quality printing with transparent wholesale rates that fit your budget.</p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="qf-feature">
                <div class="qf-feature-icon">
                    <img src="{{ asset('uploads/no-die-icon.svg') }}" alt="No Die or Plate Charges">
                </div>
                <div class="qf-feature-text">
                    <h3>No Setup Fees</h3>
                    <p>No hidden charges on dies, plates or custom designs — ever.</p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="qf-feature">
                <div class="qf-feature-icon">
                    <img src="{{ asset('uploads/fast-turn-icon.svg') }}" alt="Fast Turnarounds">
                </div>
                <div class="qf-feature-text">
                    <h3>Fast Turnarounds</h3>
                    <p>Rush production options as fast as 4–6 business days.</p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="qf-feature">
                <div class="qf-feature-icon">
                    <img src="{{ asset('uploads/free-ship-icon.svg') }}" alt="Free Shipping">
                </div>
                <div class="qf-feature-text">
                    <h3>Free Shipping</h3>
                    <p>Anywhere in the USA, with zero hidden fees and full tracking.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<script>
document.querySelectorAll('.qf-group select').forEach(function(sel) {
    sel.classList.add('is-placeholder');
    sel.addEventListener('change', function() {
        sel.classList.remove('is-placeholder');
    });
});
</script>
