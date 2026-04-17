<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Coffee Categories
            [
                'name' => 'Coffee',
                'slug' => 'coffee',
                'description' => 'Premium Ethiopian coffee beans including Yirgacheffe, Harar, Sidamo, and other specialty varieties. Known for their distinctive flavors and high quality.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Specialty Coffee',
                'slug' => 'specialty-coffee',
                'description' => 'High-grade specialty coffee beans with unique flavor profiles, perfect for premium markets and discerning coffee enthusiasts.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            
            // Oilseeds Categories
            [
                'name' => 'Oilseeds',
                'slug' => 'oilseeds',
                'description' => 'High-quality oilseeds including sesame, niger seed, and sunflower seeds. Rich in oil content ideal for extraction and export.',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Sesame Seeds',
                'slug' => 'sesame-seeds',
                'description' => 'Premium Ethiopian sesame seeds known for high oil content and excellent quality. Available in different varieties and grades.',
                'sort_order' => 4,
                'is_active' => true,
            ],
            
            // Pulses/Legumes Categories
            [
                'name' => 'Pulses',
                'slug' => 'pulses',
                'description' => 'Various pulses and legumes including beans, lentils, and peas. High in protein and essential nutrients for global markets.',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Beans',
                'slug' => 'beans',
                'description' => 'Different varieties of beans including kidney beans, haricot beans, and other legumes. Sourced from Ethiopian highlands.',
                'sort_order' => 6,
                'is_active' => true,
            ],
            
            // Spices Categories
            [
                'name' => 'Spices',
                'slug' => 'spices',
                'description' => 'Aromatic and flavorful spices including turmeric, ginger, garlic, and other Ethiopian specialty spices.',
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Turmeric',
                'slug' => 'turmeric',
                'description' => 'High-quality turmeric with vibrant color and potent flavor. Sourced from the best growing regions in Ethiopia.',
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Ginger',
                'slug' => 'ginger',
                'description' => 'Fresh and dried ginger with strong flavor and aroma. Perfect for culinary and medicinal applications.',
                'sort_order' => 9,
                'is_active' => true,
            ],
            
            // Grains Categories
            [
                'name' => 'Grains',
                'slug' => 'grains',
                'description' => 'Various grain products including teff, wheat, barley, and other cereal grains. Essential food staples with high nutritional value.',
                'sort_order' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'Teff',
                'slug' => 'teff',
                'description' => 'Ethiopian super grain teff, known for its high nutritional content and gluten-free properties. Available in different colors.',
                'sort_order' => 11,
                'is_active' => true,
            ],
            
            // Fruits Categories
            [
                'name' => 'Fruits',
                'slug' => 'fruits',
                'description' => 'Fresh and dried fruits including mangoes, papayas, bananas, and other tropical fruits. Rich in vitamins and natural sugars.',
                'sort_order' => 12,
                'is_active' => true,
            ],
            [
                'name' => 'Tropical Fruits',
                'slug' => 'tropical-fruits',
                'description' => 'Exotic tropical fruits grown in Ethiopia\'s diverse climate. Perfect for fresh consumption and processing.',
                'sort_order' => 13,
                'is_active' => true,
            ],
            
            // Vegetables Categories
            [
                'name' => 'Vegetables',
                'slug' => 'vegetables',
                'description' => 'Fresh vegetables including tomatoes, onions, peppers, and leafy greens. Grown in Ethiopia\'s fertile agricultural regions.',
                'sort_order' => 14,
                'is_active' => true,
            ],
            
            // Livestock Categories
            [
                'name' => 'Livestock',
                'slug' => 'livestock',
                'description' => 'Live animals for breeding and meat production including cattle, sheep, and goats. Known for their hardiness and quality.',
                'sort_order' => 15,
                'is_active' => true,
            ],
            [
                'name' => 'Cattle',
                'slug' => 'cattle',
                'description' => 'High-quality Ethiopian cattle breeds for meat and dairy production. Well-adapted to local conditions.',
                'sort_order' => 16,
                'is_active' => true,
            ],
            
            // Leather Categories
            [
                'name' => 'Leather',
                'slug' => 'leather',
                'description' => 'Premium leather products including hides, skins, and finished leather goods. Known for excellent quality and durability.',
                'sort_order' => 17,
                'is_active' => true,
            ],
            
            // Textiles Categories
            [
                'name' => 'Textiles',
                'slug' => 'textiles',
                'description' => 'Traditional and modern textile products including cotton fabrics, hand-woven textiles, and garments.',
                'sort_order' => 18,
                'is_active' => true,
            ],
            [
                'name' => 'Cotton',
                'slug' => 'cotton',
                'description' => 'High-quality Ethiopian cotton for textile production. Known for its long fibers and excellent quality.',
                'sort_order' => 19,
                'is_active' => true,
            ],
            
            // Flowers Categories
            [
                'name' => 'Flowers',
                'slug' => 'flowers',
                'description' => 'Fresh cut flowers including roses, carnations, and other ornamental flowers. Grown for export markets worldwide.',
                'sort_order' => 20,
                'is_active' => true,
            ],
            [
                'name' => 'Roses',
                'slug' => 'roses',
                'description' => 'Premium Ethiopian roses in various colors. Known for their long vase life and vibrant colors.',
                'sort_order' => 21,
                'is_active' => true,
            ],
            
            // Natural Products Categories
            [
                'name' => 'Natural Products',
                'slug' => 'natural-products',
                'description' => 'Various natural products including honey, beeswax, and other bee products. Organic and sustainably sourced.',
                'sort_order' => 22,
                'is_active' => true,
            ],
            [
                'name' => 'Honey',
                'slug' => 'honey',
                'description' => 'Pure Ethiopian honey from various floral sources. Rich in flavor and natural enzymes.',
                'sort_order' => 23,
                'is_active' => true,
            ],
            
            // Minerals Categories
            [
                'name' => 'Minerals',
                'slug' => 'minerals',
                'description' => 'Various mineral resources including gold, tantalum, and other precious metals and industrial minerals.',
                'sort_order' => 24,
                'is_active' => true,
            ],
            
            // Other Categories
            [
                'name' => 'Other',
                'slug' => 'other',
                'description' => 'Miscellaneous products and commodities that don\'t fit into other categories. Includes specialty items and unique products.',
                'sort_order' => 25,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
