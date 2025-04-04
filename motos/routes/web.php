<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\MotosController;
use App\Http\controllers\MarcasController;
use App\Http\controllers\HomeController;
use App\Http\controllers\TiposController;
use App\Http\controllers\PaisesController;
/*
Route::get('/', function () {
    return view('home');
});
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('motos', [MotosController::class, 'index'])->name('motos');
Route::get('marcas', [MarcasController::class, 'index'])->name('marcas');
Route::get('marcas/{id}', [MarcasController::class, 'item'])->name('marcas.item');


Route::get('tipos', [TiposController::class, 'index'])->name('tipos');
Route::get('paises', [PaisesController::class, 'index'])->name('paises');

