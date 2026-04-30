<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Site Identity
            ['key' => 'site_name', 'value' => 'Habtom Abadi Import Export'],
            ['key' => 'site_description', 'value' => 'Leading Ethiopian import-export company specializing in agricultural products and machinery since 2008.'],

            // Contact Info
            ['key' => 'email_1', 'value' => 'info@habtomabadimx.com'],
            ['key' => 'email_2', 'value' => 'trade@habtomabadimx.com'],
            ['key' => 'phone_1', 'value' => '+251 911 123 456'],
            ['key' => 'phone_2', 'value' => '+251 922 654 321'],
            ['key' => 'address_1', 'value' => 'Noah Real Estate Building, 7th Floor, Office No. 704'],
            ['key' => 'address_full', 'value' => "Noah Real Estate Building, 7th Floor, Office No. 704\n22 Area, Wereda 04, Bole Sub-City\nAddis Ababa, Ethiopia"],
            ['key' => 'working_hours', 'value' => "Monday - Friday: 8:00 AM - 6:00 PM\nSaturday: 9:00 AM - 2:00 PM (EAT)"],

            // Social Links
            ['key' => 'facebook_url', 'value' => 'https://facebook.com/habtomabadi'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/habtomabadi'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com/company/habtomabadi'],
            ['key' => 'instagram_url', 'value' => ''],
            ['key' => 'youtube_url', 'value' => ''],

            // Content
            ['key' => 'about_us', 'value' => 'Established in 2008, Habtom Abadi Import and Export has been a cornerstone of Ethiopia\'s international trade sector for over two decades. Based in the heart of Addis Ababa, we specialize in bridging the gap between Ethiopia\'s rich agricultural resources and the global market, while simultaneously fueling national development through the importation of cutting-edge machinery and technology.'],
            ['key' => 'mission', 'value' => 'To export standard quality Ethiopian agricultural products (coffee seeds, pulses, oilseeds, spices) to earn foreign currency, import construction and agricultural machinery, deliver national transport services, and in the long run manufacture and distribute metals, edible oils, and other demand-based products.'],
            ['key' => 'vision', 'value' => 'To be a competitive and preferred global player on transportation service provider, and manufacturer.'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], ['value' => $setting['value']]);
        }
    }
}
