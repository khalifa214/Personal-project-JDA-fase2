<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\Authenticate;

Route::get("/", [HomeController::class, "index"])->name("index");

Route::get("/kategori/{id}/{name}/{page}", [CategoryController::class, "category"])->name("category");

Route::controller(ProductController::class)->prefix("produk")->name("product.")->group(function(){
    Route::get("/{page?}", "filterData")->name("produk");
    Route::get("/{id}/{slug}", "detail")->name("detailProduk");
});

Route::get("/artikel/{id?}", [ArticleController::class, "index"])->name("article");

Route::controller(DashboardController::class)->middleware(Authenticate::class)->prefix("/admin")->name("dashboard.")->group(function() {
    Route::get("/", "index")->name("index");

    Route::prefix("/produk")->group(function() {
        Route::get("/kategori", "kategori")->name("kategori");
        Route::get("/{page?}", "produk")->name("produk");
        Route::post("/create", "createProduk")->name("produk.create");
        Route::get("/edit/{id}", "editProduk")->name("produk.edit");
        Route::post("/edit", "editFormProduk")->name("produk.editForm");
        Route::get("/delete/{id}", "deleteProduk")->name("produk.delete");
    });

    Route::prefix("/artikel")->group(function() {
        Route::get("/{page?}", "artikel")->name("artikel");
        Route::post("/create", "createArtikel")->name("artikel.create");
        Route::get("/edit/{id}", "editArtikel")->name("artikel.edit");
        Route::post("/edit", "editFormArtikel")->name("artikel.editForm");
        Route::get("/delete/{id}", "deleteArtikel")->name("artikel.delete");
    });

    

    Route::get("/kontak/{page?}", "kontak")->name("contact");
    Route::post("/kontak/edit", "editKontak")->name("contact.edit");
});

Route::controller(AuthController::class)->name("auth.")->group(function() {
    Route::get("/login", "loginPage")->name("loginPage");
    Route::post("/login", "login")->name("login");
    Route::get("/logout", "logout")->name("logout");
});

