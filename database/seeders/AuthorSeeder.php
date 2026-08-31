<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'title' => 'Joe Danley',
                'slug' => 'joe-danley',
                'status' => 'published',
                'description' => 'Joe Danley is a packaging engineer and sustainability consultant with over 10 years of experience in structural packaging design, eco-friendly luxury packaging, and custom retail box manufacturing.',
                'image' => 'uploads/author.png',
                'facebook' => 'https://facebook.com',
                'twitter' => 'https://twitter.com',
                'linkedin' => 'https://linkedin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ahmed Khan',
                'slug' => 'ahmed-khan',
                'status' => 'published',
                'description' => 'Packaging specialist and lead structural designer at The Rigid Boxes, focusing on custom die-cut box engineering and premium finishing techniques.',
                'image' => 'uploads/author.png',
                'facebook' => 'https://facebook.com',
                'twitter' => 'https://twitter.com',
                'linkedin' => 'https://linkedin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($authors as $author) {
            DB::table('admin_authors')->updateOrInsert(
                ['slug' => $author['slug']],
                $author
            );
        }
    }
}
