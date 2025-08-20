<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/artists', function () {
    return view('guest.artists');
})->name('artists');

Route::get('/negotiables', function () {
    return view('guest.negotiables');
})->name('negotiables');

Route::get('/events', function () {
    return view('guest.events');
})->name('events');

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
