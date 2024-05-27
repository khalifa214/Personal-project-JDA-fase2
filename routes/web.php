<?php

use App\Models\Article;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

Route::get("/", [HomeController::class, "index"])->name("index");

Route::prefix("produk")->name("product.")->group(function(){
    Route::get("/{page?}", [ProductController::class, "filterData"])->name("produk");
    Route::get("/{id}/{slug}", [ProductController::class, "detail"])->name("detailProduk");
});

Route::get("/artikel/{id?}", [ArticleController::class, "index"])->name("article");

Route::prefix("/admin")->name("dashboard.")->group(function() {
    Route::get("/", [DashboardController::class, "index"])->name("dashboard");
    Route::get("/produk/{page?}", [DashboardController::class, "produk"])->name("produk");
    Route::get("/artikel/{page?}", [DashboardController::class, "artikel"])->name("artikel");
    Route::get("/kontak/{page?}", [DashboardController::class, "kontak"])->name("kontak");
});

Route::get("/latihan/{page}", function ($page) {
    // $products = Products::paginate(15); // Contoh array dengan 20 item
    return request()->path();

});
