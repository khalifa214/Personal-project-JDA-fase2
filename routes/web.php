<?php

use App\Models\Articles;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['articles' => Articles::all(), 'products' => array_slice(Products::all(), -8)]);
});

Route::get('/produk/{page?}', function (?string $page=null) {
    $products = array_reverse(Products::all());
    $productsPerPage = 8;
    $pages= array_chunk($products, $productsPerPage);

    if ($page == null) {
        return redirect('/produk/1');
    }

    return view('product', ['products' => $pages[$page-1]]);
});

Route::get("/artikel/{id?}", function($id=null){
    $result = Articles::all();

    $articles = [];

    // $checkUrlId = Articles::find($id); 

    // if (!$checkUrlId) {
    //     abort(404);
    // }

    if ($id != null) {
        foreach($result as $article) {
                if ($article["id"] == $id) {
                    $articles = $article;
                }
        }
    } else if ($id ==null ) {
        $articles = $result;
    } 

    return view("articles", ["articles" => $articles]);
});

Route::get('/latihan/{page}', function ($page) {
    $products = Products::all(); // Contoh array dengan 20 item
    $productsPerPage = 2;
    $pages= array_chunk($products, $productsPerPage);
    $halaman = array_chunk(range(1, count($pages)), 3);
    $parthalaman = $halaman[$page-1];

});
