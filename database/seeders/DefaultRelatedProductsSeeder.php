<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultRelatedProductsSeeder extends Seeder
{
    /**
     * Add a one-time default selection for products that have no related products yet.
     * Admin selections are always preserved on later seed runs.
     */
    public function run(): void
    {
        DB::table('admin_products')->select('id', 'related')->orderBy('id')->get()->each(function ($product) {
            if (!blank($product->related) && $product->related !== '[]') {
                return;
            }

            $relatedIds = DB::table('admin_products')
                ->where('id', '!=', $product->id)
                ->where('status', 'published')
                ->inRandomOrder()
                ->limit(4)
                ->pluck('id')
                ->map(fn ($id) => (int) $id)
                ->all();

            DB::table('admin_products')->where('id', $product->id)->update([
                'related' => json_encode($relatedIds),
                'updated_at' => now(),
            ]);
        });
    }
}
