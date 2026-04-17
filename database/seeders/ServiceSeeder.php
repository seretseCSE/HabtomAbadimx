<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Export Documentation & Compliance',
                'slug' => 'export-documentation-compliance',
                'description' => 'Complete export documentation services including certificates of origin, phytosanitary certificates, customs clearance, and trade compliance documentation.',
                'full_description' => 'Our experienced team handles all aspects of export documentation, ensuring your shipments meet international standards and regulatory requirements. We provide comprehensive documentation packages that include all necessary certificates, quality inspections, and compliance documentation required for smooth customs clearance.',
                'features' => json_encode([
                    'Certificates of Origin',
                    'Phytosanitary Certificates',
                    'Customs Documentation',
                    'Quality Inspections',
                    'Trade Compliance',
                    'Documentation Management',
                ]),
                'benefits' => json_encode([
                    'Regulatory Compliance',
                    'Faster Customs Clearance',
                    'Risk Mitigation',
                    'Professional Documentation',
                ]),
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'International Shipping & Logistics',
                'slug' => 'international-shipping-logistics',
                'description' => 'End-to-end shipping solutions from Ethiopia to global markets, including freight forwarding, customs brokerage, and logistics coordination.',
                'full_description' => 'We provide comprehensive international shipping services that connect Ethiopian producers with global markets. Our logistics network spans major shipping routes, ensuring timely delivery of your cargo to any destination worldwide.',
                'features' => json_encode([
                    'Freight Forwarding',
                    'Customs Brokerage',
                    'Cargo Insurance',
                    'Port Operations',
                    'Supply Chain Management',
                ]),
                'benefits' => json_encode([
                    'Global Network',
                    'Cost Efficiency',
                    'Real-time Tracking',
                    'Risk Management',
                ]),
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Quality Assurance & Inspection',
                'slug' => 'quality-assurance-inspection',
                'description' => 'Professional quality inspection services for agricultural products and commodities before export.',
                'full_description' => 'Our quality assurance team conducts thorough inspections of agricultural products according to international standards. We provide detailed inspection reports, quality certifications, and pre-shipment verification services.',
                'features' => json_encode([
                    'Pre-shipment Inspection',
                    'Quality Certification',
                    'Laboratory Testing',
                    'Compliance Verification',
                    'Reporting Services',
                ]),
                'benefits' => json_encode([
                    'International Standards',
                    'Quality Assurance',
                    'Market Access',
                    'Risk Reduction',
                ]),
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Market Research & Analysis',
                'slug' => 'market-research-analysis',
                'description' => 'In-depth market analysis and research services for Ethiopian agricultural products and international trade opportunities.',
                'full_description' => 'Our market research team provides comprehensive analysis of global market trends, price forecasts, competitor analysis, and market entry strategies for Ethiopian agricultural products.',
                'features' => json_encode([
                    'Market Intelligence',
                    'Price Analysis',
                    'Competitor Research',
                    'Market Entry Strategy',
                    'Trade Data Analytics',
                ]),
                'benefits' => json_encode([
                    'Informed Decisions',
                    'Market Opportunities',
                    'Competitive Advantage',
                    'Risk Assessment',
                ]),
                'is_active' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
