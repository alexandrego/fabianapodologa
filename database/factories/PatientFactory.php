<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
<<<<<<< HEAD
            //'email_verified_at' => now(),
            'password' => bcrypt('password'), // senha padrão para testes
=======
            // 'email_verified_at' => now(),
            'password' => bcrypt('password'), // password padrão para testes
>>>>>>> 93b64f8 (chore: Atualização sem sucesso)
            'remember_token' => Str::random(10),
        ];
    }
}
