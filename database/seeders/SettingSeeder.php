<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'site_name',
                'value' => 'Habtom Abadi Import Export',
            ],
            [
                'key' => 'site_description',
                'value' => 'Leading Ethiopian import-export company specializing in agricultural products and machinery since 2000.',
            ],
            [
                'key' => 'contact_email',
                'value' => 'info@habtomabadimx.com',
            ],
            [
                'key' => 'contact_phone',
                'value' => '+251 11 234 5678',
            ],
            [
                'key' => 'address',
                'value' => 'Bole, Addis Ababa, Ethiopia',
            ],
            [
                'key' => 'about_us',
                'value' => 'Established in 2008, we\'ve been a cornerstone of Ethiopia\'s international trade sector for over two decades, bridging Ethiopia\'s rich agricultural resources with global markets while fueling national development through cutting-edge machinery imports.',
            ],
            [
                'key' => 'mission',
                'value' => 'To be the leading Ethiopian import-export company by providing premium agricultural products, reliable machinery imports, and exceptional trade services that contribute to Ethiopia\'s economic growth and development.',
            ],
            [
                'key' => 'vision',
                'value' => 'To be the preferred partner for international trade, known for quality, reliability, and innovation in agricultural products and machinery.',
            ],
            [
                'key' => 'facebook_url',
                'value' => 'https://facebook.com/habtomabadi',
            ],
            [
                'key' => 'twitter_url',
                'value' => 'https://twitter.com/habtomabadi',
            ],
            [
                'key' => 'linkedin_url',
                'value' => 'https://linkedin.com/company/habtomabadi',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], ['value' => $setting['value']]);
        }
    }
}
