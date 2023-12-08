<?php

use App\Http\Controllers\produkController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\merekController;
use App\Models\merek;
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
    return view('pages.welcome');
})->name('welcome');



Route::resource('/produk',produkController::class);

Route::resource('/kategori',KategoriController::class);

Route::resource('/merek',merekController::class);

