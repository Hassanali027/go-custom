<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('uploads/favicon-rigid-boxes.webp') }}" type="image/webp">
    @include('components.canonical')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Instant Quote</title>
    <meta name="description" content="Request your free custom quote for luxury rigid packaging boxes. Fast estimates & high quality custom boxes.">
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <style>
        :root {
            --primary-color: #8D4445;
            --secondary-color: #F8EEEC;
            --background-color: #FAF8F8;
            --footer-color: #5F2D2F;
            --header-gradient: linear-gradient(278.74deg, #AB5A5B 0.2%, #8D4445 44.25%, #5B2829 88.3%);
            --section-text-color: #000000;
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            overflow-x: clip;
            width: 100%;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: var(--background-color, #FAF8F8);
            color: #2D2D2D;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Open Sans', sans-serif;
            color: #000000;
        }



        .iq-page-container {
            width: 100%;
            max-width: 80rem;
            margin: 0 auto;
            padding: 2.8125rem 3.4375rem 3.75rem 3.4375rem;
            display: flex;
            gap: 1.875rem;
            flex-wrap: wrap;
            align-items: stretch;
            justify-content: center;
            box-sizing: border-box;
        }

        .iq-page-form-card {
            flex: 0 1 46.875rem;
            max-width: 46.875rem;
            width: 100%;
            background-color: #FFF8E7;
            padding: 2.5rem;
            border-radius: 1rem;
            box-sizing: border-box;
            min-width: 0;
            border: none;
        }

        .iq-page-form-card h2 {
            font-size: clamp(1.375rem, 3vw, 1.75rem);
            font-weight: 700;
            text-align: center;
            margin-bottom: 1.75rem;
            color: #111111;
        }

        .iq-page-sidebar {
            flex: 0 0 21.875rem;
            width: 21.875rem;
            max-width: 21.875rem;
            display: flex;
            flex-direction: column;
            /* gap: 1.25rem; */
            box-sizing: border-box;
            margin-top:1.25rem;
        }

        .iq-page-form-card {
            display: flex;
            flex-direction: column;
        }

        .iq-page-form-card form {
            flex: 1;
        }

        .iq-msg-group {
            flex: 1;
        }

        .iq-msg-group textarea {
            flex: 1;
            min-height: 6rem;
        }

        .iq-sidebar-img {
            width: 100%;
            flex: 1 1 auto;
            min-height: 0;
            aspect-ratio: 1;
            object-fit: contain;
            border-radius: 0.75rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .iq-form-group {
            display: flex;
            flex-direction: column;
            gap: 0.375rem;
        }

        .iq-form-group label {
            font-family: 'Open Sans', sans-serif;
            font-size: 0.8125rem;
            font-weight: 700;
            color: #2D2D2D;
        }

        .iq-form-group input[type="text"],
        .iq-form-group input[type="email"],
        .iq-form-group input[type="tel"],
        .iq-form-group input[type="number"],
        .iq-form-group select,
        .iq-form-group textarea {
            width: 100%;
            height: 2.75rem;
            padding: 0 0.875rem;
            border: 1px solid #DDD6CB;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-family: 'DM Sans', sans-serif;
            background-color: #FFF8E7 !important;
            color: #2D2D2D;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            scroll-margin-top: 9.375rem;
        }
        
        .iq-form-group select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' height='16' fill='none' stroke='%23333' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            padding-right: 2.5rem;
            cursor: pointer;
        }

        /* Remove number input spinner arrows */
        .iq-form-group input[type="number"]::-webkit-inner-spin-button,
        .iq-form-group input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .iq-form-group input[type="number"] {
            -moz-appearance: textfield;
        }

        .iq-form-group textarea {
            height: auto;
            padding: 0.75rem 0.875rem;
            resize: vertical;
        }

        .iq-form-group input:focus,
        .iq-form-group select:focus,
        .iq-form-group textarea:focus {
            border-color: var(--primary-color, #0B2545) !important;
            box-shadow: 0 0 0 0.1875rem rgba(11, 37, 69, 0.12) !important;
        }

        .iq-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .iq-grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1rem;
        }

        .iq-grid-4 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 0.75rem;
        }

        .iq-sidebar-card {
            background-color: #F0F0F0;
            padding: 1.5rem;
            border-radius: 0.75rem;
            border: 1px solid #E8E2DF;
            box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,0.02);
        }

        .iq-sidebar-card h3 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: #111111;
        }

        /* Responsive Breakpoints */
        @media (max-width: 62rem) {
            
            .iq-page-container {
                padding: 0 1.25rem 3.125rem;
            }
            .iq-page-form-card {
                max-width: 100%;
                flex: 1 1 100%;
                padding: 2rem 1.5rem;
                order: 1;
            }
            .iq-page-sidebar {
                flex: 1 1 100%;
                width: 100%;
                max-width: 100%;
                order: 2;
                margin-top: 0.3125rem; /* Compensates for 1.25rem gap to equal 1.5625rem */
            }
            .iq-page-sidebar > h2,
            .iq-page-sidebar > p,
            .iq-page-sidebar > div:not(.iq-sidebar-card) {
                display: none !important;
            }
        }

        @media (max-width: 37.5rem) {
            .iq-page-hero {
                padding: 1.25rem 1.25rem 1rem;
            }
            .iq-page-hero p {
                margin-bottom: 0;
            }
            .iq-breadcrumb {
                margin-bottom: 1rem;
                display: none;
            } 
            .iq-page-container {
                padding: 0 0 2.5rem;
                gap: 1.25rem;
            }
            .iq-page-form-card {
                padding: 1.375rem 1rem;
                border-radius: 0.75rem;
                background-color: #FFF9F0;
                border: none;
                margin-top: 2.25rem;
                width: 100%;
            }
            .iq-page-form-card h2 {
                font-size: 1.1875rem;
                font-weight: 800;
                color: #000000;
                margin-bottom: 1.5rem;
            }
            .iq-page-form-card .iq-form-group input,
            .iq-page-form-card .iq-form-group select,
            .iq-page-form-card .iq-form-group textarea {
                background-color: transparent !important;
                border: 1px solid #D5C7B8 !important;
            }
            .iq-upload-wrapper {
                background-color: transparent !important;
                border: 1px solid #D5C7B8 !important;
            }
            .iq-upload-wrapper input[type="text"] {
                border: none !important;
            }
            .iq-upload-btn {
                background-color: #FFB400 !important;
                color: #000 !important;
            }
            .iq-submit-btn {
                background-color: #FFB400 !important;
                color: #001533 !important;
                max-width: 15rem !important;
                width: 100% !important;
                border-radius: 0.5rem !important;
            }
            .iq-grid-2,
            .iq-grid-3 {
                grid-template-columns: 1fr;
                gap: 0.875rem;
            }
            .iq-grid-4 {
                grid-template-columns: 1fr 1fr;
                gap: 0.75rem;
            }
        }

        @media (max-width: 25rem) {
            /* Kept for future specific small screen overrides */
        }

        .iq-features-container {
                max-width: 80rem;
    margin: 0 auto 1.5625rem auto;
    padding: 0.625rem 3.4375rem;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.875rem;
    text-align: center
        }

        .iq-feature-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .iq-feature-item img {
            width: 3.5rem;
            height: 3.5rem;
            object-fit: contain;
            margin-bottom: 0.5rem;
        }

        .iq-feature-item h4 {
            font-family: 'Open Sans', sans-serif;
            font-size: 0.9375rem;
            font-weight: 700;
            color: #333;
            margin: 0;
        }

        .iq-feature-item p {
            font-family: 'DM Sans', sans-serif;
            font-size: 0.8125rem;
            color: #000000;
            margin: 0;
            line-height: 1.5;
        }

        @media (max-width: 61.9375rem) {
            .iq-features-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 36rem) {
            .iq-features-container {
                grid-template-columns: repeat(2, 1fr);
                padding: 1.875rem 1.25rem;
                gap: 1.25rem;
            }
        }
    </style>
</head>
<body>

    @include('components.header')

    <main class="main-content">
        <x-about-hero 
            title="Get A Free Quote"
            description="Tell us about your packaging needs and our team will create a custom quote around your product, brand, and requirements."
            bgImage="uploads/qoutation-page-hero.webp"
            mobileBgImage="uploads/qoutation-page-mobile.webp"
            breadcrumb="Get a Quote"
        />

        <div class="iq-page-container">
            <!-- Left sidebar section -->
            <div class="iq-page-sidebar" style="padding: 0; background: transparent; box-shadow: none;">
                <h2 style="font-family: 'Open Sans', sans-serif; font-size: 1.5625rem; font-weight: 700; color: #000; margin-bottom: 1rem; margin-top: 0;">Let's Build Your Perfect Box</h2>
                <p style="font-family: 'DM Sans', sans-serif; font-size: 0.9375rem; color: #000000; line-height: 1.6; margin-bottom: 1.5rem; text-align: justify;">
                    From simple to premium, we create custom packaging designed around your product and brand. Tell us what you need, and our team will help bring your packaging vision to life with the right size, material, finish, and print. Fill out the form to get started.
                </p>
                <img src="{{ asset('uploads/Apparel Box .png') }}" alt="Custom packaging boxes" class="iq-sidebar-img">
                <div class="iq-sidebar-card" style="margin-bottom: 0; background-color: #F3F3F3; border: none;">
                    <h3 style="margin-bottom: 1rem; font-size: 1rem;">Need Help Immediately?</h3>
                    <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                        <div style="display: flex; gap: 0.75rem; align-items: center;">
                            <div style="background-color: #FFB400; color: white; width: 2rem; height: 2rem; border-radius: 0.375rem; display: flex; align-items: center; justify-content: center; font-size: 0.875rem; flex-shrink: 0;">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <span style="font-size: 0.9375rem; color: #000; font-family: 'DM Sans', sans-serif; font-weight: 500;">support@gocustomboxes.com</span>
                        </div>
                        <div style="display: flex; gap: 0.75rem; align-items: center;">
                            <div style="background-color: #FFB400; color: white; width: 2rem; height: 2rem; border-radius: 0.375rem; display: flex; align-items: center; justify-content: center; font-size: 0.875rem; flex-shrink: 0;">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <span style="font-size: 0.9375rem; color: #000; font-family: 'DM Sans', sans-serif; font-weight: 500;">847-200-0971</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right form section -->
            <div class="iq-page-form-card">
                <h2>Instant Quotes, Quick Service</h2>
                @if(session('success'))
                    <div style="background-color: #d4edda; color: #155724; padding: 0.625rem; border-radius: 0.3125rem; margin-bottom: 1.25rem;">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ url('/submit-quote') }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 1rem;">
                    @csrf
                    <!-- Row 1 -->
                    <div class="iq-grid-2">
                        <div class="iq-form-group">
                            <label>Name *</label>
                            <input type="text" name="name" placeholder="Enter your name" oninput="this.value = this.value.replace(/[0-9]/g, '')" required>
                        </div>
                        <div class="iq-form-group">
                            <label>Email Address *</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="iq-grid-2">
                        <div class="iq-form-group">
                            <label>Phone *</label>
                            <input type="tel" name="phone" placeholder="Enter your number" oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '')" required>
                        </div>
                        <div class="iq-form-group">
                            <label>Physical Address</label>
                            <input type="text" name="physical_address" placeholder="Enter your address">
                        </div>
                    </div>

                    <!-- Row 3: Dimensions -->
                    <div class="iq-grid-4">
                        <div class="iq-form-group">
                            <label>Width *</label>
                            <input type="text" name="width" placeholder="Width" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required>
                        </div>
                        <div class="iq-form-group">
                            <label>Length *</label>
                            <input type="text" name="length" placeholder="Length" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required>
                        </div>
                        <div class="iq-form-group">
                            <label>Depth *</label>
                            <input type="text" name="depth" placeholder="Depth" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" required>
                        </div>
                        <div class="iq-form-group">
                            <label>Units *</label>
                            <select name="units" required>
                                <option value="mm">mm</option>
                                <option value="cm">cm</option>
                                <option value="inches">inches</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 4: Product, paper stock and color -->
                    <div class="iq-grid-3">
                        <div class="iq-form-group">
                            <label>Select Box Style</label>
                            <x-searchable-product-select input-class="iq-product-search-input" placeholder="Search or select product" />
                        </div>
                        <div class="iq-form-group">
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
                        <div class="iq-form-group">
                            <label>Color Options</label>
                            <select name="color">
                                <option value="">Choose option</option>
                                <option value="1 Color">1 Color</option><option value="2 Colors">2 Colors</option>
                                <option value="3 Colors">3 Colors</option><option value="Full Color">Full Color</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 5: Quantity, coating and file upload -->
                    <div class="iq-grid-3">
                        <div class="iq-form-group">
                            <label>Quantity *</label>
                            <input type="number" name="quantity" placeholder="Enter quantity" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                        </div>
                        <div class="iq-form-group">
                            <label>Paper Coating</label>
                            <select name="paper_coating">
                                <option value="">Select Paper Coating</option>
                                <option>Aqueous Coating</option><option>Semi Gloss</option>
                                <option>Gloss UV</option><option>Matte UV</option><option>Semi Matte</option>
                            </select>
                        </div>
                        <div class="iq-form-group">
                            <label>Upload File Here</label>
                            <div class="iq-upload-wrapper" style="display: flex; align-items: center; border: 1px solid #DDD6CB; border-radius: 0.5rem; overflow: hidden; background: #FFF8E7; height: 2.75rem;">
                                <input type="file" name="quote_file" id="quote-file-input" style="display: none;" onchange="document.getElementById('quote-file-name').value = this.files[0] ? this.files[0].name : ''">
                                <input type="text" id="quote-file-name" placeholder="No file chosen" readonly style="flex: 1; padding: 0 0.875rem; border: none; font-size: 0.875rem; background: transparent; outline: none; color: #666; height: 100%;">
                                <button type="button" class="iq-upload-btn" onclick="document.getElementById('quote-file-input').click()" style="background-color: var(--secondary-color); color: var(--primary-color); border: none; padding: 0 1.25rem; font-size: 0.875rem; font-weight: 700; cursor: pointer; height: 100%; font-family: 'DM Sans', sans-serif;">Upload</button>
                            </div>
                        </div>
                    </div>

                    <!-- Row 6: Message -->
                    <div class="iq-form-group iq-msg-group">
                        <label>Message</label>
                        <textarea name="message" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                    
                    <!-- Submit button -->
                    <div style="text-align: center; margin-top: 0.625rem;">
                        <button type="submit" class="iq-submit-btn" style="background-color: var(--secondary-color); color: var(--primary-color); border: none; border-radius: 0.375rem; padding: 0.875rem 2.5rem; font-size: 1rem; font-weight: 700; font-family: 'Open Sans', sans-serif; width: 100%; max-width: 20rem; cursor: pointer; transition: background-color 0.2s ease;" onmouseover="this.style.backgroundColor='#e0d5d3'" onmouseout="this.style.backgroundColor='var(--secondary-color)'">Get a Quote</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Features Section -->
        <div class="iq-features-container">
            <div class="iq-feature-item">
                <img src="{{ asset('uploads/competitive-icon.svg') }}" alt="Competitive Pricing">
                <h4>Competitive Pricing</h4>
                <p>High-quality printing that fits your budget.</p>
            </div>
            <div class="iq-feature-item">
                <img src="{{ asset('uploads/no-die-icon.svg') }}" alt="No Die or Plate Charges">
                <h4>No Die or Plate Charges</h4>
                <p>No hidden charges, save on custom designs.</p>
            </div>
            <div class="iq-feature-item">
                <img src="{{ asset('uploads/fast-turn-icon.svg') }}" alt="Fast Turn Arounds">
                <h4>Fast Turn Arounds</h4>
                <p>Get your packaging exactly when you need it.</p>
            </div>
            <div class="iq-feature-item">
                <img src="{{ asset('uploads/free-ship-icon.svg') }}" alt="Free Shipping">
                <h4>Free Shipping</h4>
                <p>Anywhere in the USA, we ship with love not money.</p>
            </div>
        </div>
    </main>

    @include('components.footer')

</body>
</html>
