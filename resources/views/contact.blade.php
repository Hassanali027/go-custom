<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('uploads/favicon-rigid-boxes.webp') }}" type="image/webp">
    @include('components.canonical')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact The Rigid Boxes for premium custom packaging solutions.">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    
    <style>
        :root {
            --primary-color: #8D4445;
            --dark-blue: #0A2240;
            --light-cream: #FAF5EC;
            --yellow: #FFB400;
            --text-dark: #333333;
            --text-light: #666666;
            --container-width: 80rem;
            --margin-sides: 3.4375rem;
        }

        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            background-color: #FFFFFF;
            color: var(--text-dark);
        }

        * {
            box-sizing: border-box;
        }

        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 var(--margin-sides);
        }

        /* Hero Section */
        .contact-hero {
            background-image:
                linear-gradient(110deg, rgba(11,34,64,.82) 0%, rgba(11,34,64,.58) 48%, rgba(11,34,64,.76) 100%),
                url('{{ asset("uploads/about-us-banner.webp") }}');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            max-width: 90rem;
            width: 100%;
            height: 25rem;
            margin: 0 auto;
            position: relative;
            color: #fff;
        }

        .contact-hero .container {
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .contact-breadcrumb {
            position: absolute;
            top: 2.5rem;
            left: var(--margin-sides);
            font-size: 0.875rem;
            font-family: 'Open Sans', sans-serif;
        }
        
        .contact-breadcrumb a {
            color: #fff;
            text-decoration: none;
        }
        
        .contact-hero h1 {
            font-size: 3rem;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
            margin: 0 0 0.9375rem 0;
        }
        
        .contact-hero p {
            font-size: 1rem;
            max-width: 37.5rem;
            margin: 0 auto;
            line-height: 1.6;
            text-align: center;
        }

        /* Main Section */
        .contact-main-section {
            padding: 3.75rem 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 24.5625rem;
            gap: 1.5rem;
            align-items: stretch;
        }

        /* Form Column */
        .contact-form-box {
            background-color: #FFF8E7;
            padding: 2.5rem;
            border-radius: 0.5rem;
            height: 39.625rem;
        }

        .contact-form-box h2 {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.75rem;
            font-weight: 700;
            color: #000;
            text-align: center;
            margin: 0 0 0.9375rem 0;
        }

        .contact-form-box > p {
            text-align: center;
            color: #000;
            font-size: 0.875rem;
            line-height: 1.6;
            margin-bottom: 1.875rem;
            max-width: 31.25rem;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.25rem 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }
        
        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .contact-form label {
            font-size: 0.8125rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #000;
        }

        .contact-form input, 
        .contact-form textarea {
            padding: 0.75rem 0.9375rem;
            border: 1px solid #E0DCD5;
            border-radius: 0.375rem;
            background: #fff;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.875rem;
            outline: none;
            transition: border-color 0.3s;
            box-sizing: border-box;
            width: 100%;
        }

        .contact-form input {
            height: 3rem;
        }

        .contact-form input:focus, 
        .contact-form textarea:focus {
            border-color: var(--yellow);
        }

        .contact-form textarea {
            height: 5.75rem;
            min-height: 5.75rem;
            resize: vertical;
        }

        .submit-btn-wrap {
            grid-column: 1 / -1;
            text-align: center;
            margin-top: 2rem;
        }

        .submit-btn {
            background-color: var(--yellow);
            color: #000;
            border: none;
            width: 18.5625rem;
            height: 3.75rem;
            font-size: 1rem;
            font-weight: 700;
            border-radius: 0.375rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.625rem;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background-color: #e5a300;
        }

        /* Info Column */
        .contact-info-box {
            background-color: var(--dark-blue);
            padding: 2.5rem;
            border-radius: 0.5rem;
            color: #fff;
            display: flex;
            flex-direction: column;
            height: 39.625rem;
        }

        .contact-info-box h3 {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0 0 1.875rem 0;
            color: #fff;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 0.9375rem;
            margin-bottom: 1.5625rem;
            width: 19.125rem;
            height: 5.625rem;
        }

        .info-icon {
            background-color: var(--yellow);
            color: #000;
            width: 2.25rem;
            height: 2.25rem;
            border-radius: 0.375rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .info-content h4 {
            margin: 0 0 0.3125rem 0;
            font-size: 0.9375rem;
            font-weight: 600;
            color: #fff;
        }

        .info-content p, .info-content a {
            margin: 0;
            font-size: 0.8125rem;
            color: #B4C0CB;
            text-decoration: none;
            line-height: 1.5;
        }

        .info-content a:hover {
            color: var(--yellow);
            text-decoration: underline;
        }

        .social-media-title {
            font-size: 0.9375rem;
            font-weight: 600;
            margin: 1.25rem 0 0.9375rem 0;
            color: #fff;
        }

        .contact-info-box .social-icons {
            display: flex;
            gap: 0.75rem;
        }

        .contact-info-box .social-icon {
            background-color: #fff;
            color: #0A2240;
            width: 2rem;
            height: 2rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.125rem;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }

        .contact-info-box .social-icon i, .contact-info-box .social-icon svg {
            color: #0A2240;
            fill: #0A2240;
        }

        .contact-info-box .social-icon:hover {
            background-color: var(--yellow);
            color: #000;
        }
        
        .contact-info-box .social-icon:hover i, .contact-info-box .social-icon:hover svg {
            color: #000;
            fill: #000;
        }

        /* Map Section */
        .map-section {
            width: 100%;
            height: 25rem;
        }
        
        .map-section iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        @media (max-width: 61.9375rem) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }
        }

        @media (max-width: 48rem) {
            .contact-hero h1 { font-size: 2.25rem; }
            .contact-breadcrumb { display: none; }
            .contact-form { grid-template-columns: 1fr; }
            .contact-form-box {
                background-color: var(--section-background);
                padding: 2.5rem;
                border-radius: 0;
                height: auto;
            }
            .contact-form-box > p {
                display: none;
            }
            .contact-info-box {
                margin-top: 1.875rem;
            }
            .submit-btn {
                background-color: var(--yellow);
                color: #000;
                border: none;
                width: 17.0625rem;
                height: 3.125rem;
                font-size: 1rem;
                font-weight: 700;
                border-radius: 0.375rem;
                cursor: pointer;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 0.625rem;
                transition: background 0.3s;
            }
            .map-section {
                height: 28.75rem;
                max-width: 22.75rem;
                margin: 0 auto;
                border-radius: 0.625rem;
                overflow: hidden;
            }
            .contact-form-box h2 {
                font-family: 'Open Sans', sans-serif;
                font-size: 1.6875rem;
                font-weight: 700;
                color: #000;
                text-align: center;
                margin: 0 0 0.9375rem 0;
            }
        }

        @media (max-width: 30rem) {
            :root { --margin-sides: 1.25rem; }
            .contact-hero { padding: 3.125rem 0; }
            .contact-form-box, .contact-info-box { padding: 1.875rem 1.25rem; }
        }
    </style>
</head>
<body class="contact-page">
    @include('components.header')
    
    <main>
        <!-- Hero Section -->
        <x-about-hero 
            title="Contact Us"
            description="Have a question, need help with a project, or ready to create custom packaging? Our team is here to help you find the right solution."
            bgImage="uploads/about-us-banner.webp"
            breadcrumb="Contact Us"
            overlay="rgba(10, 34, 64, 0.5)"
        />

        <!-- Main Content -->
        <section class="contact-main-section">
            <div class="container">
                @if(session('success'))
                    <div style="background-color: #d4edda; color: #155724; padding: 0.9375rem; border-radius: 0.5rem; margin-bottom: 1.875rem; text-align: center; font-weight: 500;">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="contact-grid">
                    <!-- Form Column -->
                    <div class="contact-form-box">
                        <h2>Tell Us What You Need</h2>
                        <p>Have a question or need help choosing the right packaging from Go Custom Boxes? Feel free to reach out we're here to help.</p>
                        
                        <form class="contact-form" action="{{ url('/submit-contact') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" id="first_name" name="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Enter Your email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" name="phone" placeholder="Enter Your Number" required>
                            </div>
                            <div class="form-group full-width">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" placeholder="Tell us about your project..." required></textarea>
                            </div>
                            <div class="submit-btn-wrap">
                                <button type="submit" class="submit-btn">Send Message <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>

                    <!-- Info Column -->
                    <div class="contact-info-box">
                        <h3>We're Here to Help</h3>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info-content">
                                <h4>Office</h4>
                                @php
                                    $rawAddress = $siteSettings['company_address'] ?? '1941 Waverly Way<br>Montgomery IL 60538';
                                @endphp
                                <p>{!! $rawAddress !!}</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h4>Email Us</h4>
                                <a href="mailto:{{ $siteSettings['company_email'] ?? 'support@gocustomboxes.com' }}">{{ $siteSettings['company_email'] ?? 'support@gocustomboxes.com' }}</a>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <h4>Call Us</h4>
                                <a href="tel:{{ $siteSettings['company_phone'] ?? '847-200-0971' }}">{{ $siteSettings['company_phone'] ?? '847-200-0971' }}</a>
                            </div>
                        </div>

                        <h4 class="social-media-title">Social Media</h4>
                        <div class="social-icons">
                            <a href="#" class="social-icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="social-icon" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
                            <a href="#" class="social-icon" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="map-section">
            <div class="container" style="height: 100%;">
                <iframe title="Location map" src="https://www.openstreetmap.org/export/embed.html?bbox=-95.621%2C29.737%2C-95.592%2C29.757&amp;layer=mapnik&amp;marker=29.7469%2C-95.6066" loading="lazy"></iframe>
            </div>
        </section>

        <!-- FAQ Section -->
        @include('components.product-faq')

    </main>

    @include('components.footer')
</body>
</html>
