<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\User;
use Illuminate\Support\Facades\Hash;
=======
use Illuminate\Support\Facades\Hash;
use App\Models\User;
>>>>>>> 93b64f8 (chore: Atualização sem sucesso)

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
<<<<<<< HEAD
            ['email' => 'atendimento@fabianapodologa.com.br'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('252605'),
                'role' => 'admin',
=======
            ['email' => 'alexandre_c_g@hotmail.com'],
            [
                'name' => 'Alexandre Gonçalves',
                'email' => 'alexandre_c_g@hotmail.com',
                'password' => Hash::make('2526'),
                'role' => 'admin', // Define o campo role como admin
>>>>>>> 93b64f8 (chore: Atualização sem sucesso)
            ]
        );
    }
}
