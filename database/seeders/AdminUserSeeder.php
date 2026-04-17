<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@habtomabadimx.com'],
            [
                'name' => 'Admin User',
                'email' => 'admin@habtomabadimx.com',
                'password' => Hash::make('password'),
                'is_admin' => true,
            ]
        );
    }
}
