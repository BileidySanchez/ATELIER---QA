<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController as CatalogProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contact.show');

Route::post('/contacto', [ContactController::class, 'store'])
    ->name('contact.store');

// Catálogo público.
Route::get('/productos', [CatalogProductController::class, 'index'])
    ->name('products.index');

// Inicio de sesión.
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');

// sobre nosotros

Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
})->name('about.show');

});


// Cierre de sesión.
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// CRUD protegido para administradores.
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::resource('productos', AdminProductController::class)
    ->except(['show'])
    ->names('products');
    });