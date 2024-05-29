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

Route::controller(ProductController::class)->prefix("produk")->name("product.")->group(function(){
    Route::get("/{page?}", "filterData")->name("produk");
    Route::get("/{id}/{slug}", "detail")->name("detailProduk");
});

Route::get("/artikel/{id?}", [ArticleController::class, "index"])->name("article");

Route::controller(DashboardController::class)->prefix("/admin")->name("dashboard.")->group(function() {
    Route::get("/", "index")->name("dashboard");

    Route::get("/produk/{page?}", "produk")->name("produk");

    Route::prefix("/artikel")->group(function() {
        Route::get("/{page?}", "artikel")->name("artikel");
        Route::post("/create", "createArtikel")->name("artikel.create");
        Route::get("/edit/{id}", "edit")->name("artikel.edit");
        Route::post("/edit", "editArtikel")->name("artikel.editForm");
        Route::get("/delete/{id}", "deleteArtikel")->name("artikel.delete");
    });

    

    Route::get("/kontak/{page?}", "kontak")->name("kontak");
});
