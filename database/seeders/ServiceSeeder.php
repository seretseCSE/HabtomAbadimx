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
        // First, let's see what columns we actually have
        try {
            $services = Service::all();
        } catch (\Exception $e) {
            // If there's an error, we'll create minimal service data
            $this->createMinimalServices();
            return;
        }

        if ($services->count() === 0) {
            $this->createMinimalServices();
        }
    }

    private function createMinimalServices(): void
    {
        // Create services with only the columns that exist
        $services = [
            [
                'title' => 'Import Services',
                'slug' => 'import-services',
                'description' => 'Comprehensive import solutions for businesses looking to source quality products from global markets.',
                'full_description' => 'Our import services handle everything from supplier verification to customs clearance.',
                'icon' => 'truck',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Export Services',
                'slug' => 'export-services',
                'description' => 'Expert export facilitation for Ethiopian products to reach global markets with ease.',
                'full_description' => 'We help Ethiopian businesses export their products to international markets.',
                'icon' => 'globe-alt',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Logistics Solutions',
                'slug' => 'logistics-solutions',
                'description' => 'End-to-end logistics management for seamless supply chain operations.',
                'full_description' => 'Our logistics solutions cover warehousing, transportation, inventory management, and last-mile delivery.',
                'icon' => 'truck',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Trade Consulting',
                'slug' => 'trade-consulting',
                'description' => 'Expert advice on international trade regulations and market opportunities.',
                'full_description' => 'Our trade consulting services provide expert guidance on international trade regulations.',
                'icon' => 'briefcase',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Quality Assurance',
                'slug' => 'quality-assurance',
                'description' => 'Comprehensive quality control and certification services for international trade.',
                'full_description' => 'Our quality assurance services ensure your products meet international standards.',
                'icon' => 'shield-check',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Documentation Services',
                'slug' => 'documentation-services',
                'description' => 'Complete documentation support for international trade requirements.',
                'full_description' => 'We handle all documentation requirements for international trade.',
                'icon' => 'document-text',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
