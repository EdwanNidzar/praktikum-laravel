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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('barang', App\Http\Controllers\BarangController::class);
Route::get('get-barang', [App\Http\Controllers\BarangController::class, 'getBarang'])->name('get-barang');
Route::get('print', [App\Http\Controllers\BarangController::class, 'print'])->name('print');
Route::get('export', [App\Http\Controllers\BarangController::class, 'export'])->name('export');
