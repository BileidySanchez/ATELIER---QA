<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $genero = $request->genero ?? $request->gender;
        $categoriaId = $request->categoria ?? $request->category_id;

        // Categorías: si hay filtro de género, mostrar las que tengan productos de ese género
        $categorias = Category::where('is_active', true)
            ->when($genero, function ($query) use ($genero) {
                $query->whereHas('products', function ($q) use ($genero) {
                    $q->where('is_active', true)
                      ->where('gender', $genero);
                });
            })
            ->orderBy('name')
            ->get();

        $productos = Product::with('category')
            ->where('is_active', true)
            ->when($genero, function ($query) use ($genero) {
                $query->where('gender', $genero);
            })
            ->when($categoriaId, function ($query) use ($categoriaId) {
                $query->where('category_id', $categoriaId);
            })
            ->orderBy('name')
            ->get();

        return view('productos', compact('productos', 'categorias', 'genero'));
    }
}
