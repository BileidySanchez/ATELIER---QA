<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Rutas web de ATELIER
|--------------------------------------------------------------------------
| Las rutas se centralizan aquí y delegan la lógica
| de las peticiones a sus controladores correspondientes.
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Muestra el formulario de contacto mediante Laravel.
Route::get('/contacto', function () {
    return view('contacto');
})->name('contact.show');

// Recibe y valida los datos del formulario de contacto.
Route::post('/contacto', [ContactController::class, 'store'])
    ->name('contact.store');

// Consulta el catálogo de productos.
Route::get('/productos', [ProductController::class, 'index'])
    ->name('products.index');