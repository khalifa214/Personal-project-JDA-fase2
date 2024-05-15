<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/produk', function () {
    return view('product');
});
Route::get('/artikel', function () {
    return view('articles');
});
Route::get('/kontak', function () {
    return view('contact');
});
