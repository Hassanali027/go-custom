<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqPageSeeder extends Seeder
{
    public function run(): void
    {
        $faqSections = [
            [
                'heading' => 'General Questions',
                'faqs' => [
                    [
                        'question' => 'What services do you offer?',
                        'answer' => 'We offer custom packaging design, rigid boxes manufacturing, and eco-friendly packaging solutions for all types of industries.'
                    ],
                    [
                        'question' => 'Do you ship internationally?',
                        'answer' => 'Yes, we ship globally! Shipping costs and times will vary depending on your location and the size of your order.'
                    ],
                    [
                        'question' => 'What is your return policy?',
                        'answer' => 'Since all our packaging is custom-made to order, we do not accept returns. However, if there is a defect in manufacturing, we will replace the defective items.'
                    ]
                ]
            ],
            [
                'heading' => 'Ordering & Shipping',
                'faqs' => [
                    [
                        'question' => 'How can I track my order?',
                        'answer' => 'Once your order is shipped, we will provide you with a tracking number via email so you can monitor its delivery status.'
                    ],
                    [
                        'question' => 'What is the standard turnaround time?',
                        'answer' => 'Our standard turnaround time is 10-15 business days after final artwork approval.'
                    ],
                    [
                        'question' => 'Can I request expedited shipping?',
                        'answer' => 'Yes, expedited shipping is available for an additional fee. Please contact our sales team to arrange this.'
                    ]
                ]
            ]
        ];

        DB::table('homepage_contents')->updateOrInsert(
            [
                'section' => 'faq_page',
                'field_key' => 'faq_page_sections'
            ],
            [
                'value' => json_encode($faqSections),
                'value_type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Also add the title if it doesn't exist
        DB::table('homepage_contents')->updateOrInsert(
            [
                'section' => 'faq_page',
                'field_key' => 'faq_page_title'
            ],
            [
                'value' => 'Frequently Asked Questions',
                'value_type' => 'text',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
