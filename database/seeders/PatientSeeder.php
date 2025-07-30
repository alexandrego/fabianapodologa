<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::updateOrCreate(
            ['email' => 'atendimento@fabianapodologa.com.br'],
            [
                'name' => 'Paciente Exemplo',
                'password' => Hash::make('252605'),
            ]

        );
    }
}
