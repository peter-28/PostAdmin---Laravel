<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('dashboard.index');
});


Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/profile', function () {
    return view('profile.index');
})->name('profile');
