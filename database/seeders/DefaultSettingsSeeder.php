<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class DefaultSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultSettings = [
            [
                'key' => 'site_name',
                'value' => 'Habtom Abadi Import Export',
                'type' => 'text',
                'description' => 'The name of the website',
            ],
            [
                'key' => 'address_1',
                'value' => 'Noah Real Estate Building, 7th Floor, Office No. 704, 22 Area, Wereda 04, Bole Sub-City, Addis Ababa, Ethiopia',
                'type' => 'text',
                'description' => 'Primary company address',
            ],
            [
                'key' => 'address_2',
                'value' => '',
                'type' => 'text',
                'description' => 'Secondary company address',
            ],
            [
                'key' => 'email_1',
                'value' => 'info@habtomabadimx.com',
                'type' => 'email',
                'description' => 'Primary contact email address',
            ],
            [
                'key' => 'email_2',
                'value' => 'trade@habtomabadimx.com',
                'type' => 'email',
                'description' => 'Secondary contact email address',
            ],
            [
                'key' => 'phone_1',
                'value' => '+251 000 000 000',
                'type' => 'text',
                'description' => 'Primary contact phone number',
            ],
            [
                'key' => 'phone_2',
                'value' => '+251 000 000 001',
                'type' => 'text',
                'description' => 'Secondary contact phone number',
            ],
            [
                'key' => 'working_hours',
                'value' => 'Mon-Fri: 8:00 AM - 6:00 PM, Sat: 9:00 AM - 2:00 PM (EAT)',
                'type' => 'text',
                'description' => 'Business working hours',
            ],
            [
                'key' => 'whatsapp',
                'value' => '+251 000 000 000',
                'type' => 'text',
                'description' => 'WhatsApp contact number',
            ],
        ];

        foreach ($defaultSettings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
