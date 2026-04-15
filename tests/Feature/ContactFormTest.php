<?php

use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_validates_required_fields()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'Test message content',
        ];

        $response = $this->post('/contact', $data);

        $response->assertStatus(200);
    }

    /** @test */
    public function it_blocks_submission_with_filled_honeypot_fields()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'Test message content',
            'website' => 'http://spam.com', // Honeypot field
            'phone2' => '+1234567890', // Honeypot field
        ];

        $response = $this->post('/contact', $data);

        $response->assertStatus(422);
        $response->assertJson(['message' => 'Spam detected']);
    }

    /** @test */
    public function it_validates_email_format()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'invalid-email', // Invalid email format
            'subject' => 'Test Subject',
            'message' => 'Test message content',
        ];

        $response = $this->post('/contact', $data);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['email']);
    }

    /** @test */
    public function it_validates_phone_format()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'Test message content',
            'phone' => '123', // Invalid phone format
        ];

        $response = $this->post('/contact', $data);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['phone']);
    }

    /** @test */
    public function it_validates_country_code()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'Test message content',
            'country' => 'XX', // Invalid country code
        ];

        $response = $this->post('/contact', $data);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['country']);
    }

    /** @test */
    public function it_allows_valid_country_code()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'Test message content',
            'country' => 'US', // Valid country code
        ];

        $response = $this->post('/contact', $data);

        $response->assertStatus(200);
    }
}
