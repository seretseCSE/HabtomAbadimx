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
                'name' => 'Ethiopian Commodity Exchange (ECX)',
                'website_url' => 'https://ecx.com.et',
                'country' => 'ET',
                'partnership_type' => 'supplier',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Agricultural Transformation Agency',
                'website_url' => 'https://ata.gov.et',
                'country' => 'ET',
                'partnership_type' => 'government',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Dutch Trading Company',
                'website_url' => 'https://dutchtrading.nl',
                'country' => 'NL',
                'partnership_type' => 'buyer',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Global Logistics Solutions',
                'website_url' => 'https://globallogistics.com',
                'country' => 'DE',
                'partnership_type' => 'logistics',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'International Finance Corporation',
                'website_url' => 'https://ifc.com',
                'country' => 'US',
                'partnership_type' => 'financial',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'Swiss Quality Assurance',
                'website_url' => 'https://swissqa.ch',
                'country' => 'CH',
                'partnership_type' => 'other',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
