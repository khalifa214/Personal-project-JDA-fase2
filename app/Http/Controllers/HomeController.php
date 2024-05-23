<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home', ['articles' => array_slice(Article::all(), -3), 'products' => array_slice(Product::all(), -8)]);
    }

    public function dashboard() {
        return view("dashboard");
    }
}
