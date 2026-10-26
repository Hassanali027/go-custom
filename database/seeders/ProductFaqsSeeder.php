<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductFaqsSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin_products')->select('id', 'title')->get()->each(function ($product) {
            // Keep existing custom FAQs for products that have more than 4 FAQs already (e.g. Pillow Boxes ID 19, Cookie Boxes ID 27)
            $existingCount = DB::table('admin_product_faqs')->where('product_id', $product->id)->count();
            if ($existingCount >= 10) {
                return;
            }

            $name = $product->title;
            DB::table('admin_product_faqs')->where('product_id', $product->id)->delete();
            $faqs = [
                ["What are {$name} used for?", "{$name} provide dependable product protection with a professional, luxury branded presentation that elevates customer unboxing experiences."],
                ["Can {$name} be fully customized with our branding and artwork?", "Yes. You can customize dimensions, full-colour CMYK or Pantone printing, inside and outside artwork, logo placement, and closures."],
                ["Which materials and cardstocks are available for {$name}?", "We offer premium rigid paperboard, eco-friendly kraft stock, greyboard, corrugated fluting, and specialty textured papers."],
                ["Can I order custom die-cut inserts for {$name}?", "Yes. We offer precision custom die-cut foam, EVA, cardboard, and molded pulp inserts tailored to hold your products firmly in place."],
                ["What finishes and coatings can I choose for {$name}?", "Available finishes include matte lamination, gloss coating, soft-touch velvet feel, gold/silver foil stamping, embossing, debossing, and spot UV."],
                ["What is the minimum order quantity (MOQ) for {$name}?", "Our minimum order quantity starts from 100 units for standard custom orders, with scalable wholesale discounts for bulk quantities."],
                ["Do you offer free design assistance and digital proofing?", "Yes! Our packaging design team provides free design assistance, 2D die-line templates, and 3D digital mockups before production begins."],
                ["What is your standard production and turnaround time?", "Standard turnaround is typically 8-10 business days following final digital artwork approval. Expedited rush production options are also available."],
                ["Can I request a sample before placing a full production order?", "Yes. We can provide digital 3D proofs or custom printed structural prototypes so you can inspect material quality, fit, and print fidelity."],
                ["How do I request a custom wholesale quote for {$name}?", "Simply submit your box dimensions, estimated order quantity, material preference, and artwork via our instant quote form to receive a fast, customized quote."],
            ];
            DB::table('admin_product_faqs')->insert(collect($faqs)->map(fn($faq) => [
                'product_id' => $product->id,
                'question' => $faq[0],
                'answer' => $faq[1],
                'created_at' => now(),
                'updated_at' => now(),
            ])->all());
        });
    }
}
