<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * Devuelve la estructura inicial del catálogo.
     *
     * La consulta a productos reales se incorporará cuando
     * exista el modelo y la tabla correspondiente.
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'Catálogo de ATELIER',
            'products' => [],
        ]);
    }
}
