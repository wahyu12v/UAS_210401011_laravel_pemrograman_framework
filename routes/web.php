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
    $produks = App\Models\Produk::all();
    $merek = App\Models\produk::orderBy('created_at','DESC')->get();
    // Kirim kedua variabel ke tampilan 'halaman.produk.index'
    return view('pages.welcome', compact('produks', 'merek'));
})->name('welcome');





Route::resource('/produk',produkController::class);

Route::resource('/kategori',KategoriController::class);

Route::resource('/merek',merekController::class);


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
