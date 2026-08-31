<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogKeyTakeawaysSeeder extends Seeder
{
    public function run(): void
    {
        $takeaways = [
            'art-of-magnetic-closure-rigid-boxes' => '<ul>'
                . '<li>Magnetic closures deliver a crisp, satisfying snap that signals premium quality instantly.</li>'
                . '<li>Hidden neodymium magnets keep the design clean — no visible latches or ribbons.</li>'
                . '<li>2mm rigid chipboard with soft-touch lamination protects high-value products in transit.</li>'
                . '<li>Custom foam inserts secure cosmetics, jewelry, and tech for a flawless unboxing.</li>'
                . '<li>A memorable open-and-close experience strengthens brand recall and repeat purchases.</li>'
                . '</ul>',

            'eco-friendly-rigid-packaging-sustainable-materials' => '<ul>'
                . '<li>Recycled and FSC-certified boards deliver premium strength with a lower footprint.</li>'
                . '<li>Soy and water-based inks keep packaging food-safe and fully recyclable.</li>'
                . '<li>Sustainable materials no longer mean compromising on finish or shelf appeal.</li>'
                . '<li>Eco-friendly packaging builds trust with conscious, modern customers.</li>'
                . '<li>Right-sized structural design cuts material waste and shipping costs.</li>'
                . '</ul>',

            'custom-inserts-trays-protect-products-shipping' => '<ul>'
                . '<li>Custom inserts hold each product firmly in place, preventing movement damage.</li>'
                . '<li>Foam, cardboard, and molded trays each suit different product weights and shapes.</li>'
                . '<li>A snug fit elevates presentation and creates a high-end unboxing moment.</li>'
                . '<li>Well-designed trays reduce returns caused by transit breakage.</li>'
                . '<li>Inserts can be fully branded to extend your identity inside the box.</li>'
                . '</ul>',
        ];

        // Generic fallback for any published blog not listed above.
        $fallback = '<ul>'
            . '<li>Custom packaging is a key touchpoint that shapes how customers perceive your brand.</li>'
            . '<li>Material, structure, and finish should work together to protect and present your product.</li>'
            . '<li>Thoughtful design turns everyday packaging into a memorable unboxing experience.</li>'
            . '<li>Low minimums and free design support make premium packaging accessible to any brand.</li>'
            . '</ul>';

        $blogs = DB::table('admin_blogs')->select('id', 'slug')->get();

        foreach ($blogs as $blog) {
            $value = $takeaways[$blog->slug] ?? $fallback;
            DB::table('admin_blogs')
                ->where('id', $blog->id)
                ->update([
                    'key_takeaways' => $value,
                    'updated_at' => now(),
                ]);
        }
    }
}
