<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryFaqsSeeder extends Seeder
{
    public function run()
    {
        $categories = DB::table('admin_categories')->select('id', 'title')->get();

        foreach ($categories as $category) {
            $name = $category->title;

            // Keep category-specific FAQs editable from the admin panel.
            DB::table('admin_category_faqs')->where('category_id', $category->id)->delete();
            DB::table('admin_category_faqs')->insert([
                [
                    'category_id' => $category->id,
                    'question' => "What products are best suited for {$name}?",
                    'answer' => "{$name} are ideal for products that need reliable protection and a polished presentation, including retail items, gifts, beauty products, food items, and premium merchandise.",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => $category->id,
                    'question' => "Can I customize the size and design of {$name}?",
                    'answer' => "Yes. Every aspect can be tailored, including dimensions, box structure, artwork, colours, inserts, printing, and finishing details.",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => $category->id,
                    'question' => "Which materials and finishes are available for {$name}?",
                    'answer' => "You can choose from rigid board, kraft, paperboard, and greyboard, then add finishes such as matte or gloss lamination, foil stamping, embossing, spot UV, and custom inserts.",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => $category->id,
                    'question' => "What is the minimum order quantity for custom {$name}?",
                    'answer' => "Minimum order quantities depend on the selected size, material, and finishing requirements. Share your specifications with our team for an accurate quote.",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'category_id' => $category->id,
                    'question' => "How do I get a quote for {$name}?",
                    'answer' => "Send us your preferred dimensions, quantity, artwork, product details, and finishing requirements. Our packaging team will prepare a custom quote for your {$name}.",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
