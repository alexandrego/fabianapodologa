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
            ['email' => 'alexandre_c_g@hotmail.com'],
            [
                'name' => 'Alexandre Gonçalves',
                'email' => 'alexandre_c_g@hotmail.com',
                'password' => Hash::make('2526'),
                'role' => 'admin', // Define o campo role como admin
            ]
        );
    }
}
