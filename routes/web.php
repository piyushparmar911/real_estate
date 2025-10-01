<?php

use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('index3');
})->name('home');

Route::get('/about', function () {
    return view('page-about');
});

Route::get('/listings', function () {
    return view('listing-grid-v3');
})->name('listings');

Route::get('/listing-single-v2', function () {
    return view('listing-single-v2');
})->name('listing.single.v2');

Route::get('/contact', function () {
    return view('page-contact');
});

Route::get('/login', function () {
    return view('page-login');
})->name('login');

Route::get('/register', function () {
    return view('page-register');
})->name('register');

