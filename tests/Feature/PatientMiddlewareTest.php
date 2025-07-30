<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Patient;

class PatientMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    public function test_patient_not_authenticated_is_redirected_to_login()
    {
        $response = $this->get('/patient-area'); // rota protegida pelo middleware

        $response->assertRedirect(route('patient.login'));
    }

    public function test_patient_authenticated_can_access()
    {
        $patient = Patient::factory()->create();

        $response = $this->actingAs($patient, 'patient')->get('/patient-area');

        $response->assertStatus(200);
    }
}
