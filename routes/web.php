<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PendampingFhkController;
use App\Http\Controllers\Admin\FhkController;

Route::get('/', function () {
        return view('home-page.home');
    });

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');

    Route::resource('/fhk', FhkController::class);
    Route::resource('/pendamping-fhk', PendampingFhkController::class);

    Route::get('/profile', function () {
        return view('admin.profile.index');
    })->name('admin.profile');
});
