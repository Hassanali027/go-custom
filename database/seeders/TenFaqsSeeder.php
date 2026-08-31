<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenFaqsSeeder extends Seeder
{
    public function run(): void
    {
        $homeFaqs = [
            ['question' => 'What types of custom boxes do you offer?', 'answer' => 'We create custom rigid boxes, folding cartons, corrugated shipping boxes, gift boxes, food boxes, apparel boxes, and packaging for many other product types.'],
            ['question' => 'Can I fully customize my packaging?', 'answer' => 'Yes. You can customize the size, structure, material, colours, printing, logo placement, inserts, and finishing of your packaging.'],
            ['question' => 'Do you provide free design support?', 'answer' => 'Yes. Our packaging team can help prepare and refine your artwork so it is ready for production.'],
            ['question' => 'What is the minimum order quantity?', 'answer' => 'Minimum order quantities vary by box style, size, material, and finishing. Share your requirements for an accurate quote.'],
            ['question' => 'Which printing options are available?', 'answer' => 'We offer CMYK and Pantone printing along with foil stamping, embossing, debossing, spot UV, and other premium finishes.'],
            ['question' => 'Can I order a custom size?', 'answer' => 'Yes. Every box can be produced in dimensions that fit your product, including custom inserts where required.'],
            ['question' => 'How long does production take?', 'answer' => 'Production time depends on the quantity and complexity of your order. Our team confirms the timeline once your artwork and specifications are approved.'],
            ['question' => 'Do you offer sustainable packaging materials?', 'answer' => 'Yes. Kraft, recyclable paperboard, responsibly sourced materials, and eco-conscious finishing options are available.'],
            ['question' => 'Can I get a sample before placing a bulk order?', 'answer' => 'Sample options are available for many projects. Contact us with your product and packaging requirements to discuss the best route.'],
            ['question' => 'How can I request a quote?', 'answer' => 'Send your box dimensions, quantity, product details, artwork, and preferred material or finish. We will prepare a custom quotation for you.'],
        ];

        DB::table('homepage_contents')->updateOrInsert(
            ['field_key' => 'faqs'],
            [
                'section' => 'list',
                'value' => json_encode($homeFaqs),
                'value_type' => 'json',
                'sort_order' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('admin_categories')->select('id', 'title')->orderBy('id')->get()->each(function ($category) {
            $name = $category->title;
            $faqs = [
                ["What are {$name} used for?", "{$name} are designed to protect products, improve presentation, and create a packaging experience that supports your brand."],
                ["Can I customize the size of {$name}?", "Yes. We can produce {$name} in custom dimensions based on your product, insert, and shipping requirements."],
                ["Can I add my logo and artwork to {$name}?", "Yes. Add your logo, brand colours, artwork, and messaging through custom printing and finishing options."],
                ["Which materials are available for {$name}?", "Material options depend on the box style and can include rigid board, kraft, paperboard, greyboard, and corrugated board."],
                ["Do you offer inserts for {$name}?", "Yes. Foam, paperboard, EVA, and custom die-cut inserts can be added to hold your product securely."],
                ["What finishes can I choose for {$name}?", "Popular options include matte or gloss lamination, foil stamping, embossing, debossing, spot UV, and soft-touch coatings."],
                ["What is the minimum order quantity for {$name}?", "MOQ depends on the selected size, material, printing, and finishing. Contact us with your requirements for the exact minimum."],
                ["How long does it take to produce {$name}?", "The production timeline varies with quantity and customization. We confirm it after your artwork and specifications are finalized."],
                ["Are sustainable options available for {$name}?", "Yes. We can recommend recyclable, kraft, and responsibly sourced material options for your {$name}."],
                ["How do I get a quote for {$name}?", "Send us the product size, required quantity, artwork, material preference, and desired finishing. Our team will send a tailored quote."],
            ];

            DB::table('admin_category_faqs')->where('category_id', $category->id)->delete();
            DB::table('admin_category_faqs')->insert(array_map(
                fn ($faq) => [
                    'category_id' => $category->id,
                    'question' => $faq[0],
                    'answer' => $faq[1],
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                $faqs
            ));
        });
    }
}
