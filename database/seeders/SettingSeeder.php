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
        $defaultSettings = [
            'site_name' => 'Habtom Abadi Import Export',
            'site_description' => 'Your trusted partner in international trade',
            'site_url' => 'https://habtomabadimx.com',
            'contact_email' => 'info@habtomabadimx.com',
            'contact_phone' => '+251 XXX XXX XXX',
            'whatsapp_number' => '+251 XXX XXX XXX',
            'company_name' => 'Habtom Abadi Import Export',
            'company_address' => '123 Business Street, Addis Ababa, Ethiopia',
            'company_registration' => 'REG123456',
            'tax_id' => 'TAX789012',
            'facebook_url' => null,
            'twitter_url' => null,
            'linkedin_url' => null,
            'instagram_url' => null,
            'youtube_url' => null,
        ];

        foreach ($defaultSettings as $key => $value) {
            Setting::setValue($key, $value);
        }
    }
}
