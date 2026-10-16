<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'category' => 'blusas',
                'name' => 'Blusa satinada',
                'slug' => 'blusa-satinada',
                'description' => 'Blusa satinada para ocasiones especiales.',
                'price' => 1290.00,
                'size' => 'S, M, L',
                'color' => 'Champán',
                'stock' => 12,
            ],
            [
                'category' => 'pantalones',
                'name' => 'Pantalón de vestir',
                'slug' => 'pantalon-de-vestir',
                'description' => 'Pantalón de vestir de corte recto.',
                'price' => 1850.00,
                'size' => 'S, M, L',
                'color' => 'Negro',
                'stock' => 8,
            ],
            [
                'category' => 'vestidos',
                'name' => 'Vestido midi floral',
                'slug' => 'vestido-midi-floral',
                'description' => 'Vestido midi con estampado floral.',
                'price' => 2450.00,
                'size' => 'S, M, L',
                'color' => 'Floral',
                'stock' => 6,
            ],
            [
                'category' => 'faldas',
                'name' => 'Falda plisada',
                'slug' => 'falda-plisada',
                'description' => 'Falda plisada para combinar con prendas casuales.',
                'price' => 1590.00,
                'size' => 'S, M, L',
                'color' => 'Beige',
                'stock' => 10,
            ],
        ];

        foreach ($products as $data) {
            $category = Category::where('slug', $data['category'])->firstOrFail();

            Product::updateOrCreate(
                ['slug' => $data['slug']],
                [
                    'category_id' => $category->id,
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'price' => $data['price'],
                    'image' => null,
                    'size' => $data['size'],
                    'color' => $data['color'],
                    'stock' => $data['stock'],
                    'is_active' => true,
                ]
            );
        }
    }
}