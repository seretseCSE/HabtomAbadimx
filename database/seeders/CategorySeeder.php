<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing categories and re-seed only Import and Export
        Category::query()->delete();

        $categories = [
            [
                'name' => 'Export',
                'slug' => 'export',
                'description' => 'Ethiopian agricultural products exported to international markets including coffee, oilseeds, pulses, and spices.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Import',
                'slug' => 'import',
                'description' => 'Imported machinery, vehicles, and technology to fuel national development and support Ethiopia\'s growing infrastructure.',
                'sort_order' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
