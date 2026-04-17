<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            CategorySeeder::class,
            BlogCategorySeeder::class,
            BlogPostSeeder::class,
            CertificationSeeder::class,
            PartnerSeeder::class,
            ProductSeeder::class,
            ServiceSeeder::class,
            TeamMemberSeeder::class,
            TestimonialSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
