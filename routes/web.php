<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\OpenDashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', OpenDashboard::class)->name('dashboard');

// Route::resource('/marcas', MarcaController::class);
Route::group(['prefix' => 'marcas'], function () {
    Route::get('', [MarcaController::class, 'index'])->name('marca.index'); 
    Route::get('/create', [MarcaController::class, 'create'])->name('marca.create'); 
    Route::post('/store', [MarcaController::class, 'store'])->name('marca.store'); 
    Route::get('/edit/{id}', [MarcaController::class, 'edit'])->name('marca.edit'); 
    Route::post('/edit/{id}', [MarcaController::class, 'update'])->name('marca.update'); 
    Route::delete('/destroy/{id}', [MarcaController::class, 'destroy'])->name('marca.destroy'); 
});

Route::group(['prefix' => 'productos'], function () {
    Route::get('', [ProductoController::class, 'index'])->name('producto.index');
    Route::get('/create', [ProductoController::class, 'create'])->name('producto.create'); 
    Route::post('/store', [ProductoController::class, 'store'])->name('producto.store'); 
});

