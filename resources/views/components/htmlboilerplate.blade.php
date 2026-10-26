<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('uploads/go-custom-boxes-favicon.png') }}" type="image/png">
    <title>{{ $title ?? 'Custom Packaging | Go Custom Boxes' }}</title>
    @if(!empty($metaDescription))
        <meta name="description" content="{{ $metaDescription }}">
    @endif
    @if(!empty($metaKeywords))
        <meta name="keywords" content="{{ $metaKeywords }}">
    @endif
    @if(!empty($robots))
        <meta name="robots" content="{{ $robots }}">
    @endif

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Custom Packaging | Go Custom Boxes' }}">
    @if(!empty($metaDescription))
    <meta property="og:description" content="{{ $metaDescription }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}/">
    <meta property="og:image" content="{{ asset('uploads/Home-Banner.webp') }}">
    <meta property="og:site_name" content="Go Custom Boxes">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Custom Packaging | Go Custom Boxes' }}">
    @if(!empty($metaDescription))
    <meta name="twitter:description" content="{{ $metaDescription }}">
    @endif
    <meta name="twitter:image" content="{{ asset('uploads/Home-Banner.webp') }}">

    @include('components.canonical')
    <!-- Import Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Open+Sans:wght@300;400;600;700;800;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            overflow-x: clip;
            width: 100%;
        }

        body {
            font-family: 'Open Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--background-color);
            color: #000000;
            line-height: 1.6;
        }

        p {
            font-family: 'DM Sans', sans-serif;
            color: var(--section-text-color);
            /* Keep paragraph copy consistent throughout every public page. */
            font-size: 16px !important;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Open Sans', sans-serif;
            color: var(--section-text-color);
            font-size: 1.5rem;
        }

        /* Shared content boundary: keep every page section aligned to header. */
        main > section > [class*="container"],
        main > section > [class*="inner"] {
            width: 100% !important;
            max-width: 80rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 3.4375rem !important;
            padding-right: 3.4375rem !important;
            box-sizing: border-box !important;
            min-width: 0;
        }

        @media (max-width: 48rem) {
            main > section > [class*="container"],
            main > section > [class*="inner"] {
                padding-left: 1.25rem !important;
                padding-right: 1.25rem !important;
            }
        }

        @media (max-width: 30rem) {
            main > section > [class*="container"],
            main > section > [class*="inner"] {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
        }
    </style>
</head>
<body>
