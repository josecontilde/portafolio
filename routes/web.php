<?php

use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//         return view('base');
//     });

// Route::get('/', PortafolioController::class);
Route::get('/', PortafolioController::class)->name('portafolio') ;
Route::get('/proyect/create', [ProyectoController::class, 'index'])->name('proyectIndex');
Route::post('/proyect/create', [ProyectoController::class, 'create'])->name('proyectCreate');

Route::get('/contactame', [ContactoController::class, 'index'])->name('contactame');
Route::post('/contactame', [ContactoController::class, 'enviarMensaje'])->name('enviarMensaje');

