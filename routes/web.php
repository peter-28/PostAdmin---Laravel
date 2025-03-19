<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PendampingFhkController;
use App\Http\Controllers\Admin\FhkController;
use Illuminate\Support\Facades\Storage;

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


Route::get('download/{filename}', function ($filename) {
    // Tentukan path lengkap file yang ada di folder storage/app/public/fhk
    $filePath = storage_path('app/public/fhk/' . $filename);

    // Periksa apakah file ada di dalam folder tersebut
    if (file_exists($filePath)) {
        // Mengembalikan file untuk diunduh
        return response()->download($filePath);
    }

    // Jika file tidak ditemukan, tampilkan pesan error
    return back()->with('error', 'File tidak ditemukan.');
})->name('fhk.download');

