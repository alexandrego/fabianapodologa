<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'atendimento@fabianapodologa.com.br'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('252605'),
                'role' => 'admin',
            ]
        );
    }
}
