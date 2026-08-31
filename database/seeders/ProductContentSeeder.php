<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductContentSeeder extends Seeder
{
    /**
     * Ensure every product has a minimum amount of body content
     * (rendered in the product page content section).
     */
    public function run(): void
    {
        // Any product whose long_description is shorter than this many
        // characters is topped up with generated, title-aware content.
        $minLength = 400;

        $products = DB::table('admin_products')
            ->select('id', 'title', 'box_style', 'material', 'printing', 'finishing', 'moq', 'turnaround', 'long_description')
            ->get();

        foreach ($products as $p) {
            $current = trim((string) ($p->long_description ?? ''));
            if (mb_strlen(strip_tags($current)) >= $minLength) {
                continue; // already has enough content
            }

            $title = $p->title ?: 'Custom Boxes';
            $material = $p->material ?: 'premium-grade board';
            $printing = $p->printing ?: 'full-color CMYK printing';
            $finishing = $p->finishing ?: 'your choice of gloss, matte, or soft-touch lamination';
            $boxStyle = $p->box_style ?: 'custom structure';
            $moq = $p->moq ?: '100 units';
            $turnaround = $p->turnaround ?: '8–10 business days';

            $html =
                "<h2>{$title}</h2>"
                . "<p>Our <strong>{$title}</strong> are engineered to protect your product while making a lasting first impression. "
                . "Built from {$material} and printed with {$printing}, every box balances durability with a premium retail finish that reflects the quality of what is inside.</p>"

                . "<h3>Designed Around Your Product</h3>"
                . "<p>Each order is made to your exact specifications. The {$boxStyle} keeps items secure during shipping and handling, "
                . "while options like {$finishing} let you match the look to your brand. From size and structure to print and coating, "
                . "you control every detail so the packaging fits your product perfectly — no wasted space, no compromise on presentation.</p>"

                . "<h3>Built For Every Brand</h3>"
                . "<p>Whether you are launching a new line or reordering for a growing business, our {$title} scale with you. "
                . "Minimum orders start at {$moq}, production ships in {$turnaround}, and our in-house design team provides free artwork and dieline support on every order. "
                . "There are no die or plate charges and no hidden fees — the price we quote is the price you pay.</p>"

                . "<h3>Why It Matters</h3>"
                . "<p>Packaging is often the first physical touchpoint between your brand and your customer. A well-made box signals quality before the product is even revealed, "
                . "turns delivery into a memorable unboxing moment, and keeps customers coming back. Invest in {$title} that work as hard as your product does.</p>";

            // Preserve any existing content by appending generated content after it.
            $newContent = $current !== '' ? ($current . $html) : $html;

            DB::table('admin_products')
                ->where('id', $p->id)
                ->update([
                    'long_description' => $newContent,
                    'updated_at' => now(),
                ]);
        }
    }
}
