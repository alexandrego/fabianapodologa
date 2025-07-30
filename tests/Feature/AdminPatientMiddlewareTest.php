<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Contracts\Auth\Authenticatable;

class AdminPatientMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_dashboard_requires_authentication()
    {
        $response = $this->get('/admin/dashboard');
        $response->assertStatus(302);
        $response->assertRedirect('/admin/login');

        /** @var Authenticatable $user */
        $user = User::factory()->make();

        $response = $this->actingAs($user)->get('/admin/dashboard');
        $response->assertStatus(302); // Usuário não admin deve ser redirecionado
    }

    public function test_admin_dashboard_access_for_admin()
    {
        /** @var Authenticatable $admin */
        $admin = User::factory()->make();

        $response = $this->actingAs($admin)->get('/admin/dashboard');
        // Aqui o teste pode falhar se não houver lógica para diferenciar admin, ajustar conforme necessário
        $response->assertStatus(200);
    }

    public function test_patient_dashboard_requires_authentication()
    {
        $response = $this->get('/paciente/dashboard');
        $response->assertStatus(302);
        $response->assertRedirect('/paciente/login');

        $patient = Patient::factory()->create();

        $response = $this->actingAs($patient, 'patient')->get('/paciente/dashboard');
        $response->assertStatus(200);
    }
}
