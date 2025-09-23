<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index3');
});

Route::get('/about', function () {
    return view('page-about');
});

Route::get('/listings', function () {
    return view('listing-grid-v3');
});

Route::get('/contact', function () {
    return view('page-contact');
});
