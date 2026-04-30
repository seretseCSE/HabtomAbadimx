<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Carbon\Carbon;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = BlogCategory::pluck('id', 'name')->toArray();
        
        $posts = [
            [
                'title' => 'Why Ethiopian Coffee Commands a high value on Global Markets',
                'slug' => 'why-ethiopian-coffee-commands-high value-global-markets',
                'excerpt' => 'Ethiopian Arabica coffee is the world\'s most complex and sought-after — but what exactly makes buyers pay a high value? We explore the origin story, flavor profiles, and why Yirgacheffe continues to lead.',
                'body' => '<h2>The Rich Heritage of Ethiopian Coffee</h2><p>Ethiopia, the birthplace of coffee, offers some of the world\'s most distinctive and prized Arabica beans. The country\'s unique growing conditions, altitude variations, and processing methods create flavor profiles that coffee connoisseurs worldwide actively seek.</p><h2>Understanding the high value Factor</h2><p>Several key factors contribute to Ethiopian coffee\'s high value status in global markets...</p>',
                'author' => 'Admin',
                'category_id' => $categories['Market Insights'] ?? 2,
                'tags' => 'coffee,ethiopia,high value markets,arabica',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => Carbon::now()->subDays(7),
                'reading_time' => 8,
                'views' => 0,
            ],
            [
                'title' => 'A Complete Guide to Exporting Sesame from Ethiopia',
                'slug' => 'complete-guide-exporting-sesame-ethiopia',
                'excerpt' => 'From Humera fields to Asian ports — everything you need to know about grading, documentation, packaging, and pricing Ethiopian sesame for international buyers.',
                'body' => '<h2>Ethiopia\'s Sesame Export Potential</h2><p>Ethiopia is one of Africa\'s largest sesame producers, with ideal growing conditions and quality varieties that are highly valued in international markets...</p>',
                'author' => 'Admin',
                'category_id' => $categories['Export Tips'] ?? 1,
                'tags' => 'sesame,export,ethiopia,agriculture',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => Carbon::now()->subDays(5),
                'reading_time' => 10,
                'views' => 0,
            ],
            [
                'title' => 'Teff: Ethiopia\'s Ancient Superfood Goes Global',
                'slug' => 'teff-ethiopia-ancient-superfood-global',
                'excerpt' => 'Gluten-free, iron-rich, and packed with nutrition — teff is capturing health food markets worldwide.',
                'body' => '<h2>The Nutritional Powerhouse</h2><p>Teff, Ethiopia\'s indigenous grain, has been a staple food for thousands of years. Now, this ancient superfood is gaining international attention...</p>',
                'author' => 'Admin',
                'category_id' => $categories['Market Insights'] ?? 2,
                'tags' => 'teff,nutrition,gluten-free,health food',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => Carbon::now()->subDays(3),
                'reading_time' => 6,
                'views' => 0,
            ],
            [
                'title' => 'How to Import Agricultural Equipment into Ethiopia',
                'slug' => 'import-agricultural-equipment-ethiopia',
                'excerpt' => 'A step-by-step overview of the import process for tractors, irrigation systems, and farm machinery into Ethiopia.',
                'body' => '<h2>Import Requirements and Regulations</h2><p>Ethiopia\'s agricultural modernization drive creates opportunities for equipment importers...</p>',
                'author' => 'Admin',
                'category_id' => $categories['Export Tips'] ?? 1,
                'tags' => 'import,equipment,agriculture,ethiopia',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => Carbon::now()->subDays(1),
                'reading_time' => 7,
                'views' => 0,
            ],
            [
                'title' => 'Understanding Phytosanitary Certificates for Grain Exports',
                'slug' => 'phytosanitary-certificates-grain-exports',
                'excerpt' => 'Every grain shipment leaving Ethiopia requires a valid phytosanitary certificate. We explain what it is, who issues it, and how to ensure your cargo passes inspection.',
                'body' => '<h2>What is a Phytosanitary Certificate?</h2><p>A phytosanitary certificate is an official document issued by the national plant protection organization...</p>',
                'author' => 'Admin',
                'category_id' => $categories['Trade News'] ?? 4,
                'tags' => 'phytosanitary,certificate,exports,grain,trade',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => Carbon::now()->subDays(2),
                'reading_time' => 5,
                'views' => 0,
            ],
            [
                'title' => 'Ethiopia\'s Agricultural Season 2025: What to Expect',
                'slug' => 'ethiopia-agricultural-season-2025',
                'excerpt' => 'An overview of rainfall patterns, projected harvest volumes, and commodity price forecasts for Ethiopian coffee, sesame, and grains in 2025 export season.',
                'body' => '<h2>Weather Patterns and Crop Forecasts</h2><p>Meteorological predictions suggest favorable conditions for the upcoming growing season...</p>',
                'author' => 'Admin',
                'category_id' => $categories['Agriculture'] ?? 3,
                'tags' => 'agriculture,season,weather,harvest,ethiopia,2025',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => Carbon::now()->subDays(10),
                'reading_time' => 4,
                'views' => 0,
            ],
        ];

        foreach ($posts as $postData) {
            BlogPost::updateOrCreate(['slug' => $postData['slug']], $postData);
        }
    }
}
