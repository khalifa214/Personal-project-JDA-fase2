<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $article = Article::all()->toArray();
        $product = Product::all()->toArray();
        $category = Category::filterCategory();
        return view('home', ['articles' => array_slice($article, -3), 'products' => array_slice($product, -8), 'categories'=> $category]);
    }
}
