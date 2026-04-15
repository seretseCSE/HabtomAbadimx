<?php

use App\Http\Controllers\RFQController;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;

class RFQFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_validates_required_fields()
    {
        $data = [
            'company_name' => 'Test Company',
            'contact_person' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+1234567890',
            'service_type' => 1,
            'product' => 'Coffee',
            'quantity' => '100',
            'destination' => 'Addis Ababa',
            'requirements' => 'Quality beans only',
        ];

        $response = $this->post('/rfq', $data);

        $response->assertStatus(200);
        $response->assertJsonFragmentMissing(['website', 'email_confirm']);
    }

    /** @test */
    public function it_blocks_submission_with_filled_honeypot_fields()
    {
        $data = [
            'company_name' => 'Test Company',
            'contact_person' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+1234567890',
            'service_type' => 1,
            'product' => 'Coffee',
            'quantity' => '100',
            'destination' => 'Addis Ababa',
            'requirements' => 'Quality beans only',
            'website' => 'http://spam.com', // Honeypot field
            'email_confirmation' => 'spam@spam.com', // Honeypot field
        ];

        $response = $this->post('/rfq', $data);

        $response->assertStatus(422);
        $response->assertJson(['message' => 'Spam detected']);
    }

    /** @test */
    public function it_blocks_submission_with_filled_honeypot_phone2_field()
    {
        $data = [
            'company_name' => 'Test Company',
            'contact_person' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+1234567890',
            'service_type' => 1,
            'product' => 'Coffee',
            'quantity' => '100',
            'destination' => 'Addis Ababa',
            'requirements' => 'Quality beans only',
            'website' => 'http://spam.com', // Honeypot field
            'email_confirm' => 'spam@spam.com', // Honeypot field
            'phone2' => '+1234567890', // Honeypot field
        ];

        $response = $this->post('/rfq', $data);

        $response->assertStatus(422);
        $response->assertJson(['message' => 'Spam detected']);
    }

    /** @test */
    public function it_enforces_rate_limiting()
    {
        // First request should succeed
        $data = [
            'company_name' => 'Test Company',
            'contact_person' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+1234567890',
            'service_type' => 1,
            'product' => 'Coffee',
            'quantity' => '100',
            'destination' => 'Addis Ababa',
            'requirements' => 'Quality beans only',
        ];

        $response1 = $this->post('/rfq', $data);
        $response1->assertStatus(200);

        // Second request should be rate limited
        $response2 = $this->post('/rfq', $data);
        $response2->assertStatus(429);
        $response2->assertJson([
            'message' => 'Too many attempts',
            'retry_after' => 60
        ]);

        // Third request should also be rate limited
        $response3 = $this->post('/rfq', $data);
        $response3->assertStatus(429);

        // Wait for rate limit window to pass
        $this->travel(65); // Wait 65 seconds
        $response4 = $this->post('/rfq', $data);
        $response4->assertStatus(200); // Should succeed now
    }

    /** @test */
    public function it_validates_email_format()
    {
        $data = [
            'company_name' => 'Test Company',
            'contact_person' => 'John Doe',
            'email' => 'invalid-email', // Invalid email
            'phone' => '+1234567890',
            'service_type' => 1,
            'product' => 'Coffee',
            'quantity' => '100',
            'destination' => 'Addis Ababa',
            'requirements' => 'Quality beans only',
        ];

        $response = $this->post('/rfq', $data);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['email']);
    }

    /** @test */
    public function it_validates_phone_format()
    {
        $data = [
            'company_name' => 'Test Company',
            'contact_person' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '123', // Invalid phone format
            'service_type' => 1,
            'product' => 'Coffee',
            'quantity' => '100',
            'destination' => 'Addis Ababa',
            'requirements' => 'Quality beans only',
        ];

        $response = $this->post('/rfq', $data);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['phone']);
    }
}
