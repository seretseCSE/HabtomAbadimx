<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'client_name' => 'Abeba Kebede',
                'client_position' => 'CEO & Founder',
                'client_company' => 'Habtom Abadi Import Export',
                'client_photo' => 'https://images.unsplash.com/photo-1507008570867-4d3c44a43d?w=150&h=150&fit=crop&crop=face',
                'content' => 'Leading Ethiopian import-export business with over 20 years of experience in international trade and agricultural development.',
                'rating' => 5,
                'country' => 'ET',
                'date_given' => '2020-01-01',
                'is_featured' => true,
                'is_approved' => true,
                'is_active' => true, 
            ],
            [
                'client_name' => 'Dr. Almaz Mekonnen',
                'client_position' => 'Operations Director',
                'client_company' => 'Habtom Abadi Import Export',
                'client_photo' => 'https://images.unsplash.com/photo-1507008570867-4d3c44a43d?w=150&h=150&fit=crop&crop=face',
                'content' => 'Expert in supply chain management and logistics operations with extensive experience in African trade routes.',
                'rating' => 5,
                'country' => 'ET',
                'date_given' => '2018-06-15',
                'is_featured' => true,
                'is_approved' => true,
                'is_active' => true, 
            ],
            [
                'client_name' => 'Sophie Chen',
                'client_position' => 'International Sales Manager',
                'client_company' => 'Habtom Abadi Import Export',
                'client_photo' => 'https://images.unsplash.com/photo-1507008570867-4d3c44a43d?w=150&h=150&fit=crop&crop=face',
                'content' => 'Specializing in European and Asian markets with deep expertise in agricultural commodity trading and international finance.',
                'rating' => 5,
                'country' => 'CN',
                'date_given' => '2019-03-10',
                'is_featured' => false,
                'is_approved' => true,
                'is_active' => true, 
            ],
            [
                'client_name' => 'Michael Johnson',
                'client_position' => 'Quality Control Manager',
                'client_company' => 'Habtom Abadi Import Export',
                'client_photo' => 'https://images.unsplash.com/photo-1507008570867-4d3c44a43d?w=150&h=150&fit=crop&crop=face',
                'content' => 'Ensuring highest quality standards for all Ethiopian agricultural exports through rigorous quality control processes.',
                'rating' => 5,
                'country' => 'US',
                'date_given' => '2021-09-01',
                'is_featured' => false,
                'is_approved' => true,
                'is_active' => true,
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }
    }
}
