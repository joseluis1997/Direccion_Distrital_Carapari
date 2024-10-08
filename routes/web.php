<?php

use App\Http\Controllers\Usuariocontroller;
use App\Http\Controllers\UnidadesEducativas;
use App\Http\Controllers\CentrosEd;
use App\Http\Controllers\NucleosController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\EstadisticaEstController;
use App\Http\Controllers\ActividadesController;

use Illuminate\Support\Facades\Route;
    
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('usuarios', Usuariocontroller::class);   
    Route::resource('UnidadesEducativas', UnidadesEducativas::class); 
    Route::resource('centros', CentrosEd::class); 
    Route::resource('nucleos', NucleosController::class); 
    Route::resource('profesores', ProfesoresController::class);
    Route::resource('actividades', ActividadesController::class);
    Route::resource('estadisticasEst', EstadisticaEstController::class);
});
