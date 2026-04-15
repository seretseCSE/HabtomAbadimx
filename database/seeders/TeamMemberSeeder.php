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
                'name' => 'Abebe Kebede',
                'position' => 'Chief Executive Officer',
                'role' => 'CEO',
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&q=80',
                'linkedin_url' => 'https://linkedin.com/in/abebekebede',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Tigist Alemu',
                'position' => 'Chief Operations Officer',
                'role' => 'COO',
                'photo' => 'https://images.unsplash.com/photo-1494790108757-9c3976256765?w=300&q=80',
                'linkedin_url' => 'https://linkedin.com/in/tigistalemu',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Mekdes Bekele',
                'position' => 'Chief Financial Officer',
                'role' => 'CFO',
                'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&q=80',
                'linkedin_url' => 'https://linkedin.com/in/mekdesbekele',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Helen Tesfaye',
                'position' => 'Head of International Trade',
                'role' => 'Director',
                'photo' => 'https://images.unsplash.com/photo-1573496359145-b3d6f4b3b5a?w=300&q=80',
                'linkedin_url' => 'https://linkedin.com/in/helentesfaye',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Dawit Mengistu',
                'position' => 'Head of Logistics',
                'role' => 'Director',
                'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&q=80',
                'linkedin_url' => 'https://linkedin.com/in/dawitmengistu',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Selam Tadesse',
                'position' => 'Quality Assurance Manager',
                'role' => 'Manager',
                'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&q=80',
                'linkedin_url' => 'https://linkedin.com/in/selamtadesse',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::updateOrCreate(['name' => $member['name']], $member);
        }
    }
}
