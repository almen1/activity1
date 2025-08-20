<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('guest.about');
})->name('about');

Route::get('/gallery', function () {
    return view('guest.gallery');
})->name('gallery');

Route::get('/certifications', function () {
    return view('guest.certifications');
})->name('certifications');

Route::get('/contact', function () {
    return view('guest.contact');
})->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
