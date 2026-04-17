<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Ethiopian Yirgacheffe Coffee Grade 1',
                'slug' => 'ethiopian-yirgacheffe-coffee-grade-1',
                'description' => 'Premium Ethiopian Yirgacheffe Grade 1 coffee beans, known for their wine-like acidity, bright citrus notes, and floral aroma. Grown at altitudes above 1,800 meters in the Yirgacheffe region.',
                'origin_country' => 'ET',
                'unit' => 'kg',
                'hs_code' => '0901.11.00',
                'sku' => 'COFFEE-YIRG-001',
                'status' => 'active',
                'is_featured' => true,
                'sort_order' => 1,
                'specifications' => json_encode([
                    'grade' => 'Grade 1',
                    'altitude' => '1800-2200m',
                    'processing' => 'Washed',
                    'moisture' => '11.5%',
                    'screen_size' => '14-16 mesh',
                ]),
            ],
            [
                'name' => 'Harar Coffee Grade 5',
                'slug' => 'harar-coffee-grade-5',
                'description' => 'Harar coffee beans with complex fruity and winey flavors, lower acidity, and rich body. Sourced from the eastern highlands of Ethiopia.',
                'origin_country' => 'ET',
                'unit' => 'kg',
                'hs_code' => '0901.11.00',
                'sku' => 'COFFEE-HAR-005',
                'status' => 'active',
                'is_featured' => true,
                'sort_order' => 2,
                'specifications' => json_encode([
                    'grade' => 'Grade 5',
                    'altitude' => '1400-1800m',
                    'processing' => 'Natural',
                    'moisture' => '12.0%',
                    'screen_size' => '15-18 mesh',
                ]),
            ],
            [
                'name' => 'Ethiopian White Kidney Beans',
                'slug' => 'ethiopian-white-kidney-beans',
                'description' => 'Premium quality white kidney beans from Ethiopia, known for their excellent cooking quality and high protein content.',
                'origin_country' => 'ET',
                'unit' => 'kg',
                'hs_code' => '0713.33.00',
                'sku' => 'BEANS-WHITE-001',
                'status' => 'active',
                'is_featured' => false,
                'sort_order' => 3,
                'specifications' => json_encode([
                    'protein' => '22-24%',
                    'moisture' => '14% max',
                    'foreign_matter' => '1% max',
                    'damage' => '2% max',
                ]),
            ],
            [
                'name' => 'Ethiopian Sesame Seed Type 1',
                'slug' => 'ethiopian-sesame-seed-type-1',
                'description' => 'High-quality Ethiopian sesame seeds, ideal for oil production and export. Known for high oil content and excellent germination rates.',
                'origin_country' => 'ET',
                'unit' => 'kg',
                'hs_code' => '1207.60.10',
                'sku' => 'SESAME-TYPE1-001',
                'status' => 'active',
                'is_featured' => false,
                'sort_order' => 4,
                'specifications' => json_encode([
                    'purity' => '99%',
                    'oil_content' => '45-50%',
                ]),
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
