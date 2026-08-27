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

        .iq-page-hero {
            width: 100%;
            max-width: 1440px;
            height: 400px;
            margin: 0 auto;
            text-align: center;
            box-sizing: border-box;
            background: url("{{ asset('uploads/quote-hero-img.png') }}") center/cover no-repeat;
            position: relative;
            color: #ffffff;
        }

        .iq-hero-inner {
            width: 100%;
            max-width: 1280px;
            height: 100%;
            margin: 0 auto;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 2;
        }

        .iq-page-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.58);
            z-index: 1;
        }

        .iq-page-hero > * {
            position: relative;
            z-index: 2;
        }

        .iq-breadcrumb {
            position: absolute;
            top: 40px;
            left: 55px;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            letter-spacing: 0.5px;
            font-family: 'DM Sans', sans-serif;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .iq-breadcrumb a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .iq-breadcrumb span {
            color: #fff;
        }

        .iq-page-hero h1 {
            font-family: 'Open Sans', sans-serif;
            font-size: clamp(32px, 4vw, 46px);
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 16px;
            line-height: 1.2;
        }

        .iq-page-hero p {
            font-family: 'DM Sans', sans-serif;
            color: #ffffff;
            font-size: 17px;
            max-width: 680px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .iq-page-container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 45px 55px 60px 55px;
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: center;
            box-sizing: border-box;
        }

        .iq-page-form-card {
            flex: 0 1 750px;
            max-width: 750px;
            width: 100%;
            background-color: var(--section-background);
            padding: 40px;
            border-radius: 16px;
            box-sizing: border-box;
            min-width: 0;
            border: 1px solid #EFEAE7;
        }

        .iq-page-form-card h2 {
            font-size: clamp(22px, 3vw, 28px);
            font-weight: 800;
            text-align: center;
            margin-bottom: 28px;
            color: #111111;
        }

        .iq-page-sidebar {
            flex: 0 0 350px;
            width: 350px;
            max-width: 350px;
            display: flex;
            flex-direction: column;
            /* gap: 20px; */
            box-sizing: border-box;
            margin-top:20px;
        }

        .iq-form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .iq-form-group label {
            font-family: 'Open Sans', sans-serif;
            font-size: 13px;
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
            height: 44px;
            padding: 0 14px;
            border: 0.5px solid black;
            border-radius: 8px;
            font-size: 14px;
            font-family: 'DM Sans', sans-serif;
            background-color: transparent !important;
            color: #2D2D2D;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            scroll-margin-top: 150px;
        }
        
        .iq-form-group select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='16' height='16' fill='none' stroke='%23333' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 40px;
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
            padding: 12px 14px;
            resize: vertical;
        }

        .iq-form-group input:focus,
        .iq-form-group select:focus,
        .iq-form-group textarea:focus {
            border-color: var(--primary-color, #8D4445) !important;
            box-shadow: 0 0 0 3px rgba(141, 68, 69, 0.12) !important;
        }

        .iq-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .iq-grid-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 16px;
        }

        .iq-grid-4 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 12px;
        }

        .iq-sidebar-card {
            background-color: #F0F0F0;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid #E8E2DF;
            box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        }

        .iq-sidebar-card h3 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #111111;
        }

        /* Responsive Breakpoints */
        @media (max-width: 992px) {
            
            .iq-page-container {
                padding: 0 20px 50px;
            }
            .iq-page-form-card {
                max-width: 100%;
                flex: 1 1 100%;
                padding: 32px 24px;
                order: 1;
            }
            .iq-page-sidebar {
                flex: 1 1 100%;
                width: 100%;
                max-width: 100%;
                order: 2;
                margin-top: 5px; /* Compensates for 20px gap to equal 25px */
            }
            .iq-page-sidebar > h2,
            .iq-page-sidebar > p,
            .iq-page-sidebar > div:not(.iq-sidebar-card) {
                display: none !important;
            }
        }

        @media (max-width: 600px) {
            .iq-page-hero {
                padding: 20px 20px 16px;
            }
            .iq-page-hero p {
                margin-bottom: 0;
            }
            .iq-breadcrumb {
                margin-bottom: 16px;
                display: none;
            } 
            .iq-page-container {
                padding: 0 0 40px;
                gap: 20px;
            }
            .iq-page-form-card {
                padding: 22px 16px;
                border-radius: 12px;
                background-color: #FFF9F0;
                border: none;
                margin-top: 36px;
                width: 100%;
            }
            .iq-page-form-card h2 {
                font-size: 19px;
                font-weight: 800;
                color: #000000;
                margin-bottom: 24px;
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
                max-width: 240px !important;
                width: 100% !important;
                border-radius: 8px !important;
            }
            .iq-grid-2,
            .iq-grid-3 {
                grid-template-columns: 1fr;
                gap: 14px;
            }
            .iq-grid-4 {
                grid-template-columns: 1fr 1fr;
                gap: 12px;
            }
        }

        @media (max-width: 400px) {
            /* Kept for future specific small screen overrides */
        }

        .iq-features-container {
                max-width: 1280px;
    margin: 0px auto 25px auto;
    padding: 10px 55px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    text-align: center
        }

        .iq-feature-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .iq-feature-item img {
            width: 56px;
            height: 56px;
            object-fit: contain;
            margin-bottom: 8px;
        }

        .iq-feature-item h4 {
            font-family: 'Open Sans', sans-serif;
            font-size: 15px;
            font-weight: 700;
            color: #333;
            margin: 0;
        }

        .iq-feature-item p {
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            color: #666;
            margin: 0;
            line-height: 1.5;
        }

        @media (max-width: 991px) {
            .iq-features-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .iq-features-container {
                grid-template-columns: repeat(2, 1fr);
                padding: 30px 20px;
                gap: 20px;
            }
        }
    </style>
</head>
<body>

    @include('components.header')

    <main class="main-content">
        <div class="iq-page-hero">
            <div class="iq-hero-inner">
                <div class="iq-breadcrumb">
                    <a href="/"><i class="fa-solid fa-house" style="font-size: 14px;"></i> Home</a> <i class="fa-solid fa-angle-right" style="font-size: 12px; margin: 0 2px;"></i> <span>Get a Quote</span>
                </div>
                <h1>Get A Free Quote</h1>
                <p>Tell us about your packaging needs and our team will create a custom quote around your product, brand, and requirements.</p>
            </div>
        </div>

        <div class="iq-page-container">
            <!-- Left sidebar section -->
            <div class="iq-page-sidebar" style="padding: 0; background: transparent; box-shadow: none;">
                <h2 style="font-family: 'Open Sans', sans-serif; font-size: 25px; font-weight: 700; color: #000; margin-bottom: 16px; margin-top: 0;">Let's Build Your Perfect Box</h2>
                <p style="font-family: 'DM Sans', sans-serif; font-size: 15px; color: #333; line-height: 1.6; margin-bottom: 24px; text-align: justify;">
                    From simple to premium, we create custom packaging designed around your product and brand. Tell us what you need, and our team will help bring your packaging vision to life with the right size, material, finish, and print. Fill out the form to get started.
                </p>
                <div style="width: 100%; aspect-ratio: 1; background-color: #D9D9D9; border-radius: 12px; margin-bottom: 24px; display: flex; justify-content: center; align-items: center;">
                    <i class="fa-solid fa-image" style="font-size: 48px; color: #999;"></i>
                </div>
                <div class="iq-sidebar-card" style="margin-bottom: 0; background-color: #F3F3F3; border: none;">
                    <h3 style="margin-bottom: 16px; font-size: 16px;">Need Help Immediately?</h3>
                    <div style="display: flex; flex-direction: column; gap: 12px;">
                        <div style="display: flex; gap: 12px; align-items: center;">
                            <div style="background-color: #FFB400; color: white; width: 32px; height: 32px; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0;">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <span style="font-size: 15px; color: #000; font-family: 'DM Sans', sans-serif; font-weight: 500;">support@gocustomboxes.com</span>
                        </div>
                        <div style="display: flex; gap: 12px; align-items: center;">
                            <div style="background-color: #FFB400; color: white; width: 32px; height: 32px; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0;">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <span style="font-size: 15px; color: #000; font-family: 'DM Sans', sans-serif; font-weight: 500;">847-200-0971</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right form section -->
            <div class="iq-page-form-card">
                <h2>Instant Quotes, Quick Service!</h2>
                @if(session('success'))
                    <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ url('/submit-quote') }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 16px;">
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

                    <!-- Row 4: Select options -->
                    <div class="iq-grid-3">
                        <div class="iq-form-group">
                            <label>Select Material</label>
                            <select name="material">
                                <option value="">Choose option</option>
                                <option value="Rigid Board">Rigid Board</option>
                                <option value="Cardboard">Cardboard</option>
                                <option value="Kraft Paper">Kraft Paper</option>
                                <option value="Corrugated">Corrugated</option>
                            </select>
                        </div>
                        <div class="iq-form-group">
                            <label>Color Options</label>
                            <select name="color">
                                <option value="">Color Options</option>
                                <option value="1 Color">1 Color</option>
                                <option value="2 Colors">2 Colors</option>
                                <option value="3 Colors">3 Colors</option>
                                <option value="Full Color">Full Color</option>
                            </select>
                        </div>
                        <div class="iq-form-group">
                            <label>Turn Around Time</label>
                            <select name="turn_around_time">
                                <option value="">Choose option</option>
                                <option value="Standard (8-10 Days)">Standard (8-10 Days)</option>
                                <option value="Rush (4-6 Days)">Rush (4-6 Days)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 5: Quantity & File Upload -->
                    <div class="iq-grid-2">
                        <div class="iq-form-group">
                            <label>Quantity *</label>
                            <input type="number" name="quantity" placeholder="Enter quantity" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                        </div>
                        <div class="iq-form-group">
                            <label>Upload File Here</label>
                            <div class="iq-upload-wrapper" style="display: flex; align-items: center; border: 1px solid #E2D9D5; border-radius: 8px; overflow: hidden; background: transparent; height: 44px;">
                                <input type="file" name="quote_file" id="quote-file-input" style="display: none;" onchange="document.getElementById('quote-file-name').value = this.files[0] ? this.files[0].name : ''">
                                <input type="text" id="quote-file-name" placeholder="No file chosen" readonly style="flex: 1; padding: 0 14px; border: none; font-size: 14px; background: transparent; outline: none; color: #666; height: 100%;">
                                <button type="button" class="iq-upload-btn" onclick="document.getElementById('quote-file-input').click()" style="background-color: var(--secondary-color); color: var(--primary-color); border: none; padding: 0 20px; font-size: 14px; font-weight: 700; cursor: pointer; height: 100%; font-family: 'DM Sans', sans-serif;">Upload</button>
                            </div>
                        </div>
                    </div>

                    <!-- Row 6: Message -->
                    <div class="iq-form-group">
                        <label>Message</label>
                        <textarea name="message" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                    
                    <!-- Submit button -->
                    <div style="text-align: center; margin-top: 10px;">
                        <button type="submit" class="iq-submit-btn" style="background-color: var(--secondary-color); color: var(--primary-color); border: none; border-radius: 6px; padding: 14px 40px; font-size: 16px; font-weight: 700; font-family: 'Open Sans', sans-serif; width: 100%; max-width: 320px; cursor: pointer; transition: background-color 0.2s ease;" onmouseover="this.style.backgroundColor='#e0d5d3'" onmouseout="this.style.backgroundColor='var(--secondary-color)'">Get a Quote</button>
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
