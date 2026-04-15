<?php

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class AdminAuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_identify_admin_user()
    {
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@habtomabadimx.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        $response = $this->post('/login', [
            'email' => $admin->email,
            'password' => 'password',
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'user' => [
                'id' => true,
                'name' => $admin->name,
                'email' => $admin->email,
                'is_admin' => true,
            ],
        ]);
    }

    /** @test */
    public function it_blocks_non_admin_user_from_admin_panel()
    {
        $user = User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);

        // Act as authenticated admin
        $this->actingAs($admin)->post('/admin');

        // Try to access admin panel as regular user
        $response = $this->actingAs($user)->post('/admin');

        $response->assertStatus(403); // Forbidden
    }

    /** @test */
    public function it_allows_admin_user_to_access_admin_panel()
    {
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@habtomabadimx.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        // Act as authenticated admin
        $response = $this->actingAs($admin)->post('/admin');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'user' => [
                'id' => true,
                'name' => $admin->name,
                'email' => $admin->email,
                'is_admin' => true,
            ],
        ]);
    }
}
