<style>
    .brand-logos-section {
        overflow: hidden;
    }

    .brand-logos-container {
        max-width: 80rem;
        margin: 0 auto;
        padding: 0 3.4375rem;
        box-sizing: border-box;
        overflow: hidden;
    }

    @media (max-width: 48rem) {
        .brand-logos-container {
            padding: 0 1.25rem;
        }
    }

    @media (max-width: 30rem) {
        .brand-logos-container {
            padding: 0 1rem;
        }
    }

    .brand-logos-marquee {
        width: 100%;
        overflow: hidden;
    }

    .brand-logos-track {
        display: flex;
        width: max-content;
        animation: brand-logos-scroll 24s linear infinite;
        will-change: transform;
    }

    .brand-logos-set {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2.5rem;
        padding: 0.3125rem 0 1.25rem 0;
        min-height: 5rem;
    }

    .brand-logo-item {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .brand-logo-item img {
        display: block;
        width: 100%;
        max-width: 9.375rem;
        max-height: 3.125rem;
        object-fit: contain;
    }

    @keyframes brand-logos-scroll {
        to { transform: translateX(-50%); }
    }

    @media (hover: hover) {
        .brand-logos-marquee:hover .brand-logos-track {
            animation-play-state: paused;
        }
    }

    @media (max-width: 36rem) {
        .brand-logos-set {
            gap: 1.25rem;
            padding: 0.875rem 0.625rem;
            min-height: 4.75rem;
        }

        .brand-logo-item {
            padding: 0;
        }

        .brand-logo-item img {
            max-width: 6.25rem;
            max-height: 2rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .brand-logos-track {
            animation-play-state: paused;
        }
    }
</style>

@php
    $brandLogos = [
        ['file' => 'trusted-true-girl.svg', 'alt' => 'TrueGirl'],
        ['file' => 'trusted-jeeter-mart.svg', 'alt' => 'Jester Mart'],
        ['file' => 'trusted-bass-pro-shop.svg', 'alt' => 'Bass Pro Shops'],
        ['file' => 'trusted-hulu-motor.svg', 'alt' => 'The Hulu Motel'],
        ['file' => 'trusted-red-bull-logo.png', 'alt' => 'Red Bull'],
        ['file' => 'trusted-kinky.webp', 'alt' => 'Kinky'],
        ['file' => 'trusted-voli-logo.webp', 'alt' => 'Voli'],
        ['file' => 'trusted-burger-bar.svg', 'alt' => 'Burger Bar'],
        ['file' => 'trusted-flowgardens-logo.webp', 'alt' => 'Flowgardens'],
        ['file' => 'trusted-her-piece-peace-logo.webp', 'alt' => 'Her Piece Peace'],
        ['file' => 'trusted-neat-logo.webp', 'alt' => 'Neat'],
        ['file' => 'trusted-springtastic-logo.webp', 'alt' => 'Springtastic'],
    ];
@endphp

<section class="brand-logos-section" aria-label="Our clients">
    <div class="brand-logos-container">
        <div class="brand-logos-marquee">
            <div class="brand-logos-track">
                @foreach ([false, true] as $isDuplicate)
                    <div class="brand-logos-set" @if ($isDuplicate) aria-hidden="true" @endif>
                        @foreach ($brandLogos as $brandLogo)
                            <div class="brand-logo-item">
                                <img src="{{ asset('uploads/' . $brandLogo['file']) }}" alt="{{ $isDuplicate ? '' : $brandLogo['alt'] }}">
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
