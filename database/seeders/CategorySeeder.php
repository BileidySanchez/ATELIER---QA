<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Blusas',
                'slug' => 'blusas',
                'description' => 'Blusas elegantes y casuales.',
                'is_active' => true,
            ],
            [
                'name' => 'Pantalones',
                'slug' => 'pantalones',
                'description' => 'Pantalones de corte moderno y clásico.',
                'is_active' => true,
            ],
            [
                'name' => 'Vestidos',
                'slug' => 'vestidos',
                'description' => 'Vestidos para toda ocasión.',
                'is_active' => true,
            ],
            [
                'name' => 'Faldas',
                'slug' => 'faldas',
                'description' => 'Faldas de diversos estilos y cortes.',
                'is_active' => true,
            ],
            [
                'name' => 'Camisas',
                'slug' => 'camisas',
                'description' => 'Camisas de lino y algodón para hombre y mujer.',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $data) {
            Category::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}