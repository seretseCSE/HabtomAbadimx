<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
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
                'full_description' => 'We provide comprehensive international shipping services that connect Ethiopian producers with global markets. Our logistics network spans major shipping routes, ensuring timely delivery of your goods to any destination worldwide.',
                'features' => json_encode([
                    'Freight Forwarding',
                    'Customs Brokerage',
                    'Goods Insurance',
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
                'name' => 'Import Sourcing & Procurement',
                'slug' => 'import-sourcing-procurement',
                'description' => 'Strategic sourcing and procurement of construction machinery, agricultural equipment, vehicles, and industrial inputs from international manufacturers.',
                'full_description' => 'We leverage our global supplier network to source high-quality machinery, vehicles, and industrial equipment at competitive prices. From initial supplier identification to final delivery, we manage the entire procurement process to ensure you receive the right products on time and within budget.',
                'features' => json_encode([
                    'Supplier Identification',
                    'Price Negotiation',
                    'Quality Verification',
                    'Import Documentation',
                    'Delivery Coordination',
                ]),
                'benefits' => json_encode([
                    'Competitive Pricing',
                    'Verified Suppliers',
                    'End-to-End Management',
                    'Reduced Risk',
                ]),
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'National Transport & Logistics',
                'slug' => 'national-transport-logistics',
                'description' => 'Reliable nationwide transportation of goods and liquid fuel across Ethiopia with a modern fleet and experienced logistics team.',
                'full_description' => 'Our national transport division delivers all types of goods and liquid fuel throughout Ethiopia. With a growing fleet of cargo trucks and fuel tankers, we ensure safe, timely, and efficient transportation services for businesses and industries nationwide.',
                'features' => json_encode([
                    'Goods Transport',
                    'Liquid Fuel Delivery',
                    'Fleet Management',
                    'Nationwide Coverage',
                    'Real-time Tracking',
                ]),
                'benefits' => json_encode([
                    'Timely Delivery',
                    'Safe Handling',
                    'Modern Fleet',
                    'Experienced Drivers',
                ]),
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
