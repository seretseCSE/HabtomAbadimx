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
                'certificate_number' => 'ISO-9001-2023-001',
                'issue_date' => '2023-01-15',
                'expiry_date' => '2026-01-15',
                'document_file' => 'certificates/iso-9001.pdf',
                'logo' => 'certificates/iso-logo.png',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'ISO 14001:2015 Environmental Management',
                'issuing_body' => 'International Organization for Standardization',
                'certificate_number' => 'ISO-14001-2023-002',
                'issue_date' => '2023-02-20',
                'expiry_date' => '2026-02-20',
                'document_file' => 'certificates/iso-14001.pdf',
                'logo' => 'certificates/iso-logo.png',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'OHSAS 18001 Occupational Health & Safety',
                'issuing_body' => 'British Standards Institution',
                'certificate_number' => 'OHSAS-18001-2023-003',
                'issue_date' => '2023-03-10',
                'expiry_date' => '2026-03-10',
                'document_file' => 'certificates/ohsas-18001.pdf',
                'logo' => 'certificates/bsi-logo.png',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'HACCP Food Safety Management',
                'issuing_body' => 'SGS Ethiopia',
                'certificate_number' => 'HACCP-2023-004',
                'issue_date' => '2023-04-05',
                'expiry_date' => '2026-04-05',
                'document_file' => 'certificates/haccp.pdf',
                'logo' => 'certificates/sgs-logo.png',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Organic Certification',
                'issuing_body' => 'Ethiopian Organic Agriculture Agency',
                'certificate_number' => 'ORG-2023-005',
                'issue_date' => '2023-05-12',
                'expiry_date' => '2026-05-12',
                'document_file' => 'certificates/organic.pdf',
                'logo' => 'certificates/eoaa-logo.png',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'Fair Trade Certification',
                'issuing_body' => 'Fairtrade International',
                'certificate_number' => 'FT-2023-006',
                'issue_date' => '2023-06-18',
                'expiry_date' => '2026-06-18',
                'document_file' => 'certificates/fairtrade.pdf',
                'logo' => 'certificates/fairtrade-logo.png',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($certifications as $certification) {
            Certification::updateOrCreate(['certificate_number' => $certification['certificate_number']], $certification);
        }
    }
}
