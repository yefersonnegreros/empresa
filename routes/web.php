<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;

// DB::listen(function($query){
//     var_dump($query->sql);
// });


Route::get('/', function () {
    return view('home');
})->name('inicio');


Route::prefix('servicios')->group(function () {
    Route::get('/', [LandingController::class, 'servicios'])->name('servicios.index');
    Route::get('/{id}', [LandingController::class, 'detalleServicio'])
        ->name('servicios.detalle')
        ->where('id', '[A-Za-z]+'); 
});

Route::prefix('proyectos')->group(function () {
    Route::get('/', [LandingController::class, 'proyectos'])->name('proyectos.index');
    Route::get('/{id}', [LandingController::class, 'detalleProyecto'])
        ->name('proyectos.detalle')
        ->where('id', '[A-Za-z]+');
});

Route::prefix('clientes')->group(function () {
    Route::get('/', [LandingController::class, 'clientes'])->name('clientes.index');
    Route::get('/{id}', [LandingController::class, 'detalleCliente'])
        ->name('clientes.detalle')
        ->where('id', '[A-Za-z]+');
});

Route::prefix('blogs')->group(function () {
    Route::get('/', [LandingController::class, 'blogs'])->name('blogs.index');
    Route::get('/{id}', [LandingController::class, 'detalleblog'])
        ->name('blogs.detalle')
        ->where('id', '[0-9]+'); 
});

Route::resource('personas', PersonasController::class)->middleware('auth');

Route::get('/categorias/{category}', [CategoryController::class,'show'])->name('categories.show');


Route::get('/contacto', [LandingController::class, 'contacto'])->name('contacto.index');
Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');

//Auth::routes();
Auth::routes(['register' => false]);
