<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PersonasController;

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

Route::prefix('personas')->group(function () {
    Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
    Route::get('/crear',[PersonasController::class,'create'])->name('personas.create');
    Route::post('crear', [PersonasController::class, 'store'])->name('personas.store');
    
    Route::get('/{id}/editar',[PersonasController::class,'edit'])->name('personas.edit');
    Route::patch('/{id}', [PersonasController::class, 'update'])->name('personas.update');
    Route::get('/{id}', [PersonasController::class, 'show'])
        ->name('personas.show')
        ->where('id', '[A-Za-z0-9]+');

    Route::delete('/{persona}', [PersonasController::class, 'destroy'])->name('personas.destroy');


    
});



Route::get('/contacto', [LandingController::class, 'contacto'])->name('contacto.index');
