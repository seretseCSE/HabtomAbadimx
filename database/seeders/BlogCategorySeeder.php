<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Export Tips',
                'slug' => 'export-tips',
                'description' => 'Guides and best practices for exporting Ethiopian products',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Market Insights',
                'slug' => 'market-insights',
                'description' => 'Analysis of global market trends and commodity prices',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Agriculture',
                'slug' => 'agriculture',
                'description' => 'Farming techniques and agricultural developments',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Trade News',
                'slug' => 'trade-news',
                'description' => 'Latest updates on trade policies and regulations',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Company Updates',
                'slug' => 'company-updates',
                'description' => 'Internal news and company announcements',
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            BlogCategory::updateOrCreate(['slug' => $category['slug']], $category);
        }
    }
}
