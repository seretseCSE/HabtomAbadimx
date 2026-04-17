<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Sarah Thompson',
                'client_position' => 'CEO, Global Foods Inc.',
                'client_company' => 'Global Foods Inc.',
                'client_photo' => 'https://images.unsplash.com/photo-1507008570867-4d3c44a43d?w=150&h=150&fit=crop&crop=face',
                'content' => 'Habtom Abadi has been our trusted partner for Ethiopian agricultural imports for over 10 years. Their quality control, logistics, and customer service are exceptional.',
                'rating' => 5,
                'country' => 'US',
                'date_given' => '2023-11-15',
                'project_name' => 'Coffee Import Partnership',
                'is_featured' => true,
                'is_approved' => true,
                'is_active' => true, 
            ],
            [
                'client_name' => 'Chen Wei',
                'client_position' => 'Procurement Director',
                'client_company' => 'Shanghai Trading Co.',
                'client_photo' => 'https://images.unsplash.com/photo-1507008570867-4d3c44a43d?w=150&h=150&fit=crop&crop=face',
                'content' => 'Excellent communication and reliable delivery. The sesame quality consistently meets our specifications and delivery timelines.',
                'rating' => 5,
                'country' => 'CN',
                'date_given' => '2024-01-20',
                'project_name' => 'Sesame Supply Contract',
                'is_featured' => true,
                'is_approved' => true,
                'is_active' => true, 
            ],
            [
                'client_name' => 'Ahmed Hassan',
                'client_position' => 'Managing Director',
                'client_company' => 'Nairobi Commodities Exchange',
                'client_photo' => 'https://images.unsplash.com/photo-1507008570867-4d3c44a43d?w=150&h=150&fit=crop&crop=face',
                'content' => 'Professional service and deep market knowledge. Always provides valuable insights for Ethiopian agricultural markets.',
                'rating' => 5,
                'country' => 'KE',
                'date_given' => '2022-08-10',
                'project_name' => 'Coffee Trading Partnership',
                'is_featured' => false,
                'is_approved' => true,
                'is_active' => true,
            ],
            [
                'client_name' => 'Maria Rodriguez',
                'client_position' => 'Quality Assurance Manager',
                'client_company' => 'Euro Quality Foods',
                'client_photo' => 'https://images.unsplash.com/photo-1507008570867-4d3c44a43d?w=150&h=150&fit=crop&crop=face',
                'content' => 'Rigorous quality control and attention to detail. Habtom Abadi\'s products always meet European food safety standards.',
                'rating' => 4,
                'country' => 'ES',
                'date_given' => '2024-03-05',
                'project_name' => 'Quality Certification Program',
                'is_featured' => false,
                'is_approved' => true,
                'is_active' => true, 
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
