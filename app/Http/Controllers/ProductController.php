<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * Consulta los productos activos y sus categorías.
     */
    public function index(): JsonResponse
    {
        $products = Product::with('category')
            ->where('is_active', true)
            ->orderBy('name')
            ->get();

        return response()->json([
            'message' => 'Catálogo de ATELIER',
            'products' => $products,
        ]);
    }
}
