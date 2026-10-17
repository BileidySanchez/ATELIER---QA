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
            // --- MUJER ---
            [
                'category' => 'blusas',
                'gender' => 'mujer',
                'name' => 'Blusa satinada champán',
                'slug' => 'blusa-satinada-champan',
                'description' => 'Blusa satinada con caída suave y botones forrados.',
                'price' => 1290.00,
                'image' => 'https://images.pexels.com/photos/29732777/pexels-photo-29732777.jpeg',
                'size' => 'S, M, L',
                'color' => '#EFEBE2, #211E1B',
                'stock' => 12,
            ],
            [
                'category' => 'vestidos',
                'gender' => 'mujer',
                'name' => 'Vestido midi crudo',
                'slug' => 'vestido-midi-crudo',
                'description' => 'Vestido midi confeccionado en mezcla de lino y algodón.',
                'price' => 2450.00,
                'image' => 'https://plus.unsplash.com/premium_photo-1674327105078-5b2cdcc86929?q=80&w=687&auto=format&fit=crop',
                'size' => 'S, M, L',
                'color' => '#EFEBE2, #B23A2E, #211E1B',
                'stock' => 8,
            ],
            [
                'category' => 'faldas',
                'gender' => 'mujer',
                'name' => 'Falda plisada beige',
                'slug' => 'falda-plisada-beige',
                'description' => 'Falda plisada de cintura elástica y largo midi.',
                'price' => 1590.00,
                'image' => 'https://images.unsplash.com/photo-1583496661160-fb5886a0aaaa?w=500&q=80&auto=format&fit=crop',
                'size' => 'S, M, L',
                'color' => '#907e6c, #211E1B',
                'stock' => 10,
            ],
            [
                'category' => 'pantalones',
                'gender' => 'mujer',
                'name' => 'Pantalón sastre palazzo',
                'slug' => 'pantalon-sastre-palazzo',
                'description' => 'Pantalón de tiro alto con pinzas frontales.',
                'price' => 2100.00,
                'image' => 'https://images.unsplash.com/photo-1473966968600-fa801b869a1a?w=500&q=80&auto=format&fit=crop',
                'size' => 'S, M, L',
                'color' => '#211E1B, #907e6c',
                'stock' => 15,
            ],

            // --- HOMBRE ---
            [
                'category' => 'camisas',
                'gender' => 'hombre',
                'name' => 'Camisa de lino manga larga',
                'slug' => 'camisa-lino-hombre',
                'description' => 'Camisa clásica de lino transpirable, corte regular fit.',
                'price' => 1890.00,
                'image' => 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=500&q=80&auto=format&fit=crop',
                'size' => 'M, L, XL',
                'color' => '#FBFAF7, #3F5D54',
                'stock' => 14,
            ],
            [
                'category' => 'pantalones',
                'gender' => 'hombre',
                'name' => 'Pantalón chino arena',
                'slug' => 'pantalon-chino-arena',
                'description' => 'Pantalón casual confeccionado en gabardina de algodón suave.',
                'price' => 1950.00,
                'image' => 'https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?w=500&q=80&auto=format&fit=crop',
                'size' => '30, 32, 34, 36',
                'color' => '#907e6c, #211E1B',
                'stock' => 9,
            ],
            [
                'category' => 'camisas',
                'gender' => 'hombre',
                'name' => 'Guayabera clásica de lino',
                'slug' => 'guayabera-clasica-lino',
                'description' => 'Prenda emblemática caribeña con alforzas y cuatro bolsillos.',
                'price' => 2800.00,
                'image' => 'https://images.pexels.com/photos/29732777/pexels-photo-29732777.jpeg',
                'size' => 'M, L, XL',
                'color' => '#FBFAF7, #EFEBE2',
                'stock' => 7,
            ],

            // --- NIÑOS ---
            [
                'category' => 'vestidos',
                'gender' => 'ninos',
                'name' => 'Vestido infantil de lino y flores',
                'slug' => 'vestido-infantil-flores',
                'description' => 'Vestidito ligero con forro de algodón suave para piel sensible.',
                'price' => 1200.00,
                'image' => 'https://images.unsplash.com/photo-1518831959646-742c3a14ebf7?w=500&q=80&auto=format&fit=crop',
                'size' => '2T, 4T, 6T',
                'color' => '#EFEBE2, #B23A2E',
                'stock' => 8,
            ],
            [
                'category' => 'camisas',
                'gender' => 'ninos',
                'name' => 'Camisita guayabera para niño',
                'slug' => 'camisita-guayabera-nino',
                'description' => 'Camisa formal infantil en lino peinado.',
                'price' => 1100.00,
                'image' => 'https://images.unsplash.com/photo-1503919545889-aef636e10ad4?w=500&q=80&auto=format&fit=crop',
                'size' => '4T, 6T, 8T',
                'color' => '#FBFAF7',
                'stock' => 11,
            ],
            [
                'category' => 'pantalones',
                'gender' => 'ninos',
                'name' => 'Pantalón corto de lino infantil',
                'slug' => 'pantalon-corto-lino-nino',
                'description' => 'Bermuda fresca con cintura ajustable para niños.',
                'price' => 950.00,
                'image' => 'https://images.unsplash.com/photo-1519457431-44ccd64a579b?w=500&q=80&auto=format&fit=crop',
                'size' => '2T, 4T, 6T, 8T',
                'color' => '#907e6c, #3F5D54',
                'stock' => 10,
            ],
        ];

        foreach ($products as $data) {
            $category = Category::where('slug', $data['category'])->first();

            if (!$category) {
                continue;
            }

            Product::updateOrCreate(
                ['slug' => $data['slug']],
                [
                    'category_id' => $category->id,
                    'gender' => $data['gender'],
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'price' => $data['price'],
                    'image' => $data['image'],
                    'size' => $data['size'],
                    'color' => $data['color'],
                    'stock' => $data['stock'],
                    'is_active' => true,
                ]
            );
        }
    }
}