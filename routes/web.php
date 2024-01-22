<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\VinoController;


//Bodegas
Route::get('/', [BodegaController::class, 'index'])->name('bodegas.index');
Route::get('/bodegas/create', [BodegaController::class, 'create'])->name('bodegas.bodegaCreate');
Route::post('/bodegas', [BodegaController::class, 'store'])->name('bodegas.store');
Route::get('/bodegas/{bodega}', [BodegaController::class, 'show'])->name('bodegas.bodega');
Route::get('/bodegas/{bodega}/edit', [BodegaController::class, 'edit'])->name('bodegas.edit');
Route::put('/bodegas/{bodega}', [BodegaController::class, 'update'])->name('bodegas.update');
Route::delete('/bodegas/{bodega}', [BodegaController::class, 'destroy'])->name('bodegas.destroy');

//Vinos
// Vinos
Route::get('/vinos/create/{id_bodega}', [VinoController::class, 'create'])->name('vinos.vinoCreate');
Route::post('/vinos', [VinoController::class, 'store'])->name('vinos.store');
