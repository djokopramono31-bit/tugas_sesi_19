<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    public function test_non_admin_users_cannot_access_the_admin_route(): void
    {
        $this->actingAs(User::factory()->create())
            ->get('/admin')
            ->assertForbidden();
    }

    public function test_admin_users_can_access_the_admin_route(): void
    {
        $user = User::factory()->create();
        $user->forceFill(['role' => 'admin'])->save();

        $this->actingAs($user)
            ->getJson('/admin')
            ->assertOk()
            ->assertJson(['message' => 'Admin access granted.']);
    }

    public function test_guests_cannot_access_the_admin_route(): void
    {
        $this->get('/admin')->assertForbidden();
    }

    public function test_new_users_have_the_user_role_by_default(): void
    {
        $user = User::factory()->create();

        $this->assertSame('user', $user->fresh()->role);
    }
}
