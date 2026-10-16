<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(Request $request)
    {
      // Categorías: si hay filtro de género, solo las que tienen productos de ese género
    $categorias = Category::when($request->genero, function ($query) use ($request) {
        $query->whereHas('products', function ($q) use ($request) {
            $q->where('genero', $request->genero);
        });
    })->get();

    $productos = Product::with('category')
        ->when($request->genero, function ($query) use ($request) {
            $query->where('genero', $request->genero);
        })
        ->when($request->categoria, function ($query) use ($request) {
            $query->where('categoria_id', $request->categoria);
        })
        ->orderBy('nombre')
        ->get();

    return view('productos', compact('productos', 'categorias'));
    }
}
