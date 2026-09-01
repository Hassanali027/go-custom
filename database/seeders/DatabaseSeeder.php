<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminContentSeeder::class);
        $this->call(ImportPremiumBoxesSeeder::class);
        $this->call(CategoryFaqsSeeder::class);
        $this->call(CategoryDescriptionsSeeder::class);
        $this->call(CategoryFeatureSectionsSeeder::class);
        $this->call(CategorySeoSeeder::class);
        $this->call(ProductFaqsSeeder::class);
        $this->call(RequestedCategoriesSeeder::class);
        $this->call(RequestedCategoryContentSeeder::class);
        $this->call(TenFaqsSeeder::class);
        $this->call(BlogKeyTakeawaysSeeder::class);
        $this->call(ProductContentSeeder::class);
        $this->call(DefaultRelatedProductsSeeder::class);
    }
}
