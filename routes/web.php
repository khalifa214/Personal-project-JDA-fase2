<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Article;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("index");

Route::prefix("produk")->name("produk.")->group(function(){
    Route::get("/{page?}", [ProductController::class, "filterData"])->name("produk");
    Route::get("/{id}/{slug}", [ProductController::class, "detail"])->name("detailProduk");
});

Route::get("/artikel/{id?}", [ArticleController::class, "index"])->name("article");

Route::get("/admin", [HomeController::class, "dashboard"])->name("dashboard");

Route::get("/latihan/{page}", function ($page) {
    // $products = Products::paginate(15); // Contoh array dengan 20 item
    

});
