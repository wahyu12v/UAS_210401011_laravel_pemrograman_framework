<?php

use App\Http\Controllers\produkController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\merekController;
use App\Models\merek;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $produks = App\Models\Produk::all();
    $merek = App\Models\produk::orderBy('created_at','DESC')->get();
    return view('pages.welcome', compact('produks', 'merek'));
})->name('welcome');

Route::resource('/produk',produkController::class);
Route::resource('/kategori',KategoriController::class);
Route::resource('/merek',merekController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
