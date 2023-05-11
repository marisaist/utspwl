<?php

use App\Http\Controllers\{ProductionController,MaterialController,DeliveryController};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(route('produksi.index'));
});

Route::get('/produksi', [ProductionController::class, 'index'])->name('produksi.index');
Route::get('/produksi/create', [ProductionController::class, 'create'])->name('produksi.tambah');
Route::post('/produksi/store', [ProductionController::class, 'store'])->name('produksi.store');
Route::get('/produksi/{id}', [ProductionController::class, 'show'])->name('produksi.show');
Route::get('/produksi/{id}/edit', [ProductionController::class, 'edit'])->name('produksi.edit');
Route::put('/produksi/{id}/update', [ProductionController::class, 'update'])->name('produksi.update');
Route::delete('produksi/{id}', [ProductionController::class, 'destroy'])->name('produksi.destroy');

Route::get('/material', [MaterialController::class, 'index'])->name('material.index');
Route::get('/material/create', [MaterialController::class, 'create'])->name('material.tambah');
Route::post('/material/store', [MaterialController::class, 'store'])->name('material.store');
Route::get('/material/{id}', [MaterialController::class, 'show'])->name('material.show');
Route::get('/material/{id}/edit', [MaterialController::class, 'edit'])->name('material.edit');
Route::put('/material/{id}/update', [MaterialController::class, 'update'])->name('material.update');
Route::delete('material/{id}', [MaterialController::class, 'destroy'])->name('material.destroy');

Route::get('/pengiriman', [DeliveryController::class, 'index'])->name('pengiriman.index');
Route::get('/pengiriman/create', [DeliveryController::class, 'create'])->name('pengiriman.tambah');
Route::post('/pengiriman/store', [DeliveryController::class, 'store'])->name('pengiriman.store');
Route::get('/pengiriman/{id}', [DeliveryController::class, 'show'])->name('pengiriman.show');
Route::get('/pengiriman/{id}/edit', [DeliveryController::class, 'edit'])->name('pengiriman.edit');
Route::put('/pengiriman/{id}/update', [DeliveryController::class, 'update'])->name('pengiriman.update');
Route::delete('pengiriman/{id}', [DeliveryController::class, 'destroy'])->name('pengiriman.destroy');