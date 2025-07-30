<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_not_authenticated_is_redirected_to_login()
    {
        $response = $this->get('/admin-area'); // rota protegida pelo middleware

        $response->assertRedirect(route('admin.login'));
        $response->assertSessionHasErrors(['error' => 'Acesso restrito à área administrativa.']);
    }

    public function test_user_authenticated_but_not_admin_is_redirected_to_login()
    {
        $user = User::factory()->create(['role' => 'user']);

        $response = $this->actingAs($user)->get('/admin-area');

        $response->assertRedirect(route('admin.login'));
        $response->assertSessionHasErrors(['error' => 'Acesso restrito à área administrativa.']);
    }

    public function test_user_authenticated_and_admin_can_access()
    {
        $user = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($user)->get('/admin-area');

        $response->assertStatus(200);
    }
}
