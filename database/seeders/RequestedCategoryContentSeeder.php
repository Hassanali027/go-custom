<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestedCategoryContentSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'apparel-boxes' => [
                'name' => 'Apparel Boxes', 'focus' => 'clothing, fashion accessories, and premium apparel',
                'benefit' => 'keep garments neatly presented while strengthening your fashion brand',
                'images' => ['Apparel Box .png', 'apparel-boxes.webp', 'custom-navy-blue-rigid-gift-box.webp', 'custom-cream-square-luxury-box.webp'],
            ],
            'bakery-boxes' => [
                'name' => 'Bakery Boxes', 'focus' => 'cakes, pastries, cookies, and baked treats',
                'benefit' => 'protect freshness and create an appetizing branded presentation',
                'images' => ['Bakery-Boxes.webp', 'industry-box-with-lid.jfif', 'industry-custom-luxury-box.jfif', 'Gift-Boxes.webp'],
            ],
            'food-boxes' => [
                'name' => 'Food Boxes', 'focus' => 'restaurant meals, takeaway items, snacks, and specialty foods',
                'benefit' => 'support safe handling, freshness, and memorable food branding',
                'images' => ['Bakery-Boxes.webp', 'kraft-paperboard.webp', 'white-corrugated.webp', 'eco-friendly-packaging.webp'],
            ],
            'two-piece-boxes' => [
                'name' => 'Two Piece Boxes', 'focus' => 'gifts, cosmetics, apparel, and premium retail products',
                'benefit' => 'deliver a classic lift-off lid unboxing experience with dependable protection',
                'images' => ['industry-two-piece-box.jfif', 'gift-box.png', 'premium-rigid-boxes-showcase.webp', 'industry-custom-shoulder-box.jfif'],
            ],
            'top-closure' => [
                'name' => 'Top Closure Boxes', 'focus' => 'retail, subscription, presentation, and gifting products',
                'benefit' => 'combine secure closing with an elegant and convenient opening experience',
                'images' => ['presentation-closure.webp', 'magnetic-closure.webp', 'presentation-magnetic.webp', 'luxury-magnetic-box.webp'],
            ],
            'figure-pattern' => [
                'name' => 'Figure Pattern Boxes', 'focus' => 'distinctive products, promotional launches, and creative retail displays',
                'benefit' => 'turn unique structural shapes and patterns into recognizable brand packaging',
                'images' => ['category-custom-shaped-box.jfif', 'category-textured.png', 'category-holographic.png', 'premium-image-frame.png'],
            ],
            'kraft-boxes' => [
                'name' => 'Kraft Boxes', 'focus' => 'natural, handmade, organic, and eco-conscious products',
                'benefit' => 'offer recyclable protection with an authentic natural appearance',
                'images' => ['natural-brown-.webp', 'kraft-paperboard.webp', 'black-kraft.webp', 'eco-friendly-packaging.webp'],
            ],
            'cardboard-boxes' => [
                'name' => 'Cardboard Boxes', 'focus' => 'retail goods, cosmetics, food, apparel, and everyday products',
                'benefit' => 'provide versatile, lightweight, and highly printable product packaging',
                'images' => ['CardBoard-Boxes.webp', 'duplex-chipboard.webp', 'sbs-c2s.webp', 'Grey-Board-Boxes.webp'],
            ],
            'corrugated-boxes' => [
                'name' => 'Corrugated Boxes', 'focus' => 'shipping, e-commerce, fragile products, and heavier merchandise',
                'benefit' => 'deliver strong impact resistance and reliable protection throughout transit',
                'images' => ['white-corrugated.webp', 'kraft-corrugated.webp', 'corrugated-divider.webp', 'corrugated-box-bivider-inserts.webp'],
            ],
            'rigid-boxes' => [
                'name' => 'Rigid Boxes', 'focus' => 'luxury gifts, jewellery, cosmetics, electronics, and premium products',
                'benefit' => 'create a durable high-end presentation that adds value to every unboxing',
                'images' => ['premium-rigid-boxes-showcase.webp', 'luxury-rigid-box-detail.webp', 'luxury-magnetic.webp', 'industry-rigid-presentation-box.jfif'],
            ],
        ];

        foreach ($categories as $slug => $content) {
            $category = DB::table('admin_categories')->where('slug', $slug)->first();
            if (!$category) {
                continue;
            }

            $name = $content['name'];
            $focus = $content['focus'];
            $benefit = $content['benefit'];
            $images = array_map(fn ($image) => 'uploads/' . $image, $content['images']);

            $sections = [
                ['title' => "Custom {$name} built around your product", 'description' => "Create packaging specifically sized and structured for {$focus}. Every detail can be adjusted to protect the product and present it professionally.", 'image' => $images[0]],
                ['title' => "Premium materials and reliable construction", 'description' => "Choose suitable board thickness, inserts, and structural details to {$benefit}. Our team balances presentation with practical performance.", 'image' => $images[1]],
                ['title' => "Printing and finishes that match your brand", 'description' => "Add custom colours, artwork, logos, foil, embossing, lamination, or spot UV to make your {$name} instantly recognizable.", 'image' => $images[2]],
                ['title' => "Smart {$name} for shipping and display", 'description' => "From accurate sizing to secure inserts, we develop {$name} that look polished on shelves and remain dependable during storage and delivery.", 'image' => $images[3]],
            ];

            $defaults = [
                'hero_title' => "Custom {$name} Designed for Better Presentation",
                'hero_badge' => $name,
                'hero_description' => "Discover custom {$name} made for {$focus}. Choose your size, material, printing, and finishing to create packaging that {$benefit}.",
                'hero_image' => $images[0],
                'banner_image' => $images[0],
                'image' => $images[0],
                'products_heading' => "Explore Our Custom {$name}",
                'products_description' => "Browse {$name} assigned to this category and choose a packaging solution tailored to your product and brand.",
                'feature_title' => "Packaging Solutions with Custom {$name}",
                'feature_sections' => json_encode($sections),
            ];

            // Seed only blank values. Admin-panel content must never be replaced on future deployments.
            $missingValues = [];
            foreach ($defaults as $field => $value) {
                if (blank($category->{$field} ?? null)) {
                    $missingValues[$field] = $value;
                }
            }

            if ($missingValues) {
                $missingValues['updated_at'] = now();
                DB::table('admin_categories')->where('id', $category->id)->update($missingValues);
            }

            if (!DB::table('admin_category_faqs')->where('category_id', $category->id)->exists()) {
                DB::table('admin_category_faqs')->insert([
                    $this->faq($category->id, "What products are suitable for {$name}?", "{$name} work especially well for {$focus}. Size, structure, and inserts can be adjusted for your exact product."),
                    $this->faq($category->id, "Can I customize the size and design of {$name}?", "Yes. You can customize dimensions, structure, artwork, colours, logo placement, inserts, and the complete visual design."),
                    $this->faq($category->id, "Which printing and finishing options are available?", "Options include CMYK and Pantone printing, foil stamping, embossing, debossing, spot UV, matte or gloss lamination, and specialty coatings."),
                    $this->faq($category->id, "What is the minimum order quantity for {$name}?", "The minimum quantity depends on size, material, print, and finishing choices. Send your requirements to receive an exact quote."),
                    $this->faq($category->id, "How long does production and delivery take?", "Turnaround varies by quantity and customization. After artwork approval, our team confirms the production schedule and delivery estimate with you."),
                ]);
            }
        }
    }

    private function faq(int $categoryId, string $question, string $answer): array
    {
        return ['category_id' => $categoryId, 'question' => $question, 'answer' => $answer, 'created_at' => now(), 'updated_at' => now()];
    }
}
