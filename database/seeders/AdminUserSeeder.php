<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@atelier.com'],
            [
                'name' => 'Administrador ATELIER',
               'password' => 'admin123',
                'role' => 'admin',
            ]
        );
    }
}