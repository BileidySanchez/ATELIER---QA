<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController as CatalogProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contact.show');

Route::post('/contacto', [ContactController::class, 'store'])
    ->name('contact.store');

// Sobre nosotros (pública, fuera del grupo guest)
Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
})->name('about.show');

// Catálogo público.
Route::get('/productos', [CatalogProductController::class, 'index'])
    ->name('products.index');

// Inicio de sesión (solo para NO logueados).
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');

Route::middleware('guest')->group(function () {
    Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])
        ->name('registro');

    Route::post('/registro', [RegisterController::class, 'register'])
        ->name('register.store');
});

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