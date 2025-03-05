<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/profile', function () {
    return view('profile.index');
})->name('profile');
