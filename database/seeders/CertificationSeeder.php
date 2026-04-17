<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certification;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $certifications = [
            [
                'name' => 'ISO 9001:2015 Quality Management',
                'issuing_body' => 'International Organization for Standardization',
                'certificate_number' => 'ISO-9001-2015-QM-12345',
                'issue_date' => '2024-01-15',
                'expiry_date' => '2027-01-15',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Organic Certification: EU Standards',
                'issuing_body' => 'European Union Organic Certification Body',
                'certificate_number' => 'ORG-2024-EU-001',
                'issue_date' => '2024-03-20',
                'expiry_date' => '2026-03-20',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Fair Trade Certification',
                'issuing_body' => 'Fair Trade International',
                'certificate_number' => 'FT-2024-001',
                'issue_date' => '2023-12-01',
                'expiry_date' => '2025-12-01',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Food Safety Management System',
                'issuing_body' => 'Ethiopian Food and Drug Authority',
                'certificate_number' => 'FSMS-2024-001',
                'issue_date' => '2024-06-01',
                'expiry_date' => '2026-06-01',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'GlobalG.A.P. Certification',
                'issuing_body' => 'Global Good Agricultural Practices',
                'certificate_number' => 'GAP-2024-001',
                'issue_date' => '2024-09-15',
                'expiry_date' => '2025-09-15',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($certifications as $cert) {
            Certification::create($cert);
        }
    }
}
