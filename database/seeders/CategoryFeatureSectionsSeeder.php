<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryFeatureSectionsSeeder extends Seeder
{
    public function run(): void
    {
        $imagePaths = [
            'uploads/section1img.png',
            'uploads/section2img.png',
            'uploads/section3img.png',
            'uploads/section4img.png',
        ];

        DB::table('admin_categories')->select('id', 'title', 'feature_sections', 'feature_title')->get()
            ->each(function ($category) use ($imagePaths) {
                if (!empty($category->feature_sections) && $category->feature_sections !== '[]') {
                    return;
                }

                $name = $category->title;
                $sections = [
                    [
                        'title' => "Premium {$name} for every product",
                        'description' => "Create a memorable first impression with custom {$name} designed around your product, brand, and customer experience.",
                        'image' => $imagePaths[0],
                    ],
                    [
                        'title' => "Built for lasting presentation",
                        'description' => "Choose high-quality materials, precise sizing, and refined finishes that make every package look polished and protect what is inside.",
                        'image' => $imagePaths[1],
                    ],
                    [
                        'title' => "Made to match your brand",
                        'description' => "From colour and print details to inserts and finishing, each element can be tailored to your brand identity and packaging needs.",
                        'image' => $imagePaths[2],
                    ],
                    [
                        'title' => "Smart custom packaging solutions",
                        'description' => "Our team helps you create packaging that is practical, durable, and ready to elevate your product on every shelf and delivery.",
                        'image' => $imagePaths[3],
                    ],
                ];

                DB::table('admin_categories')->where('id', $category->id)->update([
                    'feature_title' => $category->feature_title ?: "Explore custom {$name}",
                    'feature_sections' => json_encode($sections),
                    'updated_at' => now(),
                ]);
            });
    }
}
