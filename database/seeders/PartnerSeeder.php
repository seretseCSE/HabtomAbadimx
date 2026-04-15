<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'name' => 'Global Trade Solutions Ltd',
                'website_url' => 'https://globaltradesolutions.com',
                'country' => 'United Kingdom',
                'partnership_type' => 'buyer',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Ethiopian Coffee Exporters Association',
                'website_url' => 'https://ecoffee.org.et',
                'country' => 'Ethiopia',
                'partnership_type' => 'supplier',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'International Shipping Co',
                'website_url' => 'https://intlshipping.com',
                'country' => 'Singapore',
                'partnership_type' => 'logistics',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'African Trade Bank',
                'website_url' => 'https://africantradebank.com',
                'country' => 'South Africa',
                'partnership_type' => 'financial',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Quality Assurance International',
                'website_url' => 'https://qai.org',
                'country' => 'Germany',
                'partnership_type' => 'other',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'Textile Manufacturers Association',
                'website_url' => 'https://textilema.org',
                'country' => 'India',
                'partnership_type' => 'supplier',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 6,
            ],
            [
                'name' => 'Global Logistics Network',
                'website_url' => 'https://globallogistics.net',
                'country' => 'Dubai',
                'partnership_type' => 'logistics',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 7,
            ],
            [
                'name' => 'European Import Group',
                'website_url' => 'https://euroimport.eu',
                'country' => 'Netherlands',
                'partnership_type' => 'buyer',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 8,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(['name' => $partner['name']], $partner);
        }
    }
}
