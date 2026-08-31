<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestedCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $groups = [
            [
                'title' => 'Box by Industry',
                'slug' => 'box-by-industry',
                'children' => [
                    ['title' => 'Apparel Boxes', 'slug' => 'apparel-boxes'],
                    ['title' => 'Bakery Boxes', 'slug' => 'bakery-boxes'],
                    ['title' => 'Food Boxes', 'slug' => 'food-boxes'],
                ],
            ],
            [
                'title' => 'Box by Style',
                'slug' => 'box-by-style',
                'children' => [
                    ['title' => 'Two Piece Boxes', 'slug' => 'two-piece-boxes'],
                    ['title' => 'Top Closure', 'slug' => 'top-closure'],
                    ['title' => 'Figure Pattern', 'slug' => 'figure-pattern'],
                ],
            ],
            [
                'title' => 'Box by Material',
                'slug' => 'box-by-material',
                'children' => [
                    ['title' => 'Kraft Boxes', 'slug' => 'kraft-boxes'],
                    ['title' => 'Cardboard Boxes', 'slug' => 'cardboard-boxes'],
                    ['title' => 'Corrugated Boxes', 'slug' => 'corrugated-boxes'],
                    ['title' => 'Rigid Boxes', 'slug' => 'rigid-boxes'],
                ],
            ],
        ];

        foreach ($groups as $group) {
            $parent = DB::table('admin_categories')->where('slug', $group['slug'])->first();
            if (!$parent) {
                $parentId = DB::table('admin_categories')->insertGetId([
                    'title' => $group['title'],
                    'slug' => $group['slug'],
                    'parent_id' => null,
                    'status' => 'published',
                    'show_in_nav' => 1,
                    'show_home' => 0,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]);
            } else {
                $parentId = $parent->id;
            }

            foreach ($group['children'] as $child) {
                $existingChild = DB::table('admin_categories')->where('slug', $child['slug'])->exists();
                if (!$existingChild) {
                    DB::table('admin_categories')->insert([
                        'title' => $child['title'],
                        'slug' => $child['slug'],
                        'parent_id' => $parentId,
                        'status' => 'published',
                        'show_in_nav' => 1,
                        'show_home' => 0,
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]);
                }
            }
        }
    }
}
