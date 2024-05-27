<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view("dashboard");
    }

    public function produk($page=null) {

        if ($page == null) {
            return redirect('/admin/produk/1');
        }

        if ($page == "create" || $page == "edit") {
            return view("components.dashboard.form-product");
        }

        $data = Product::filter($page, 5);
        return view("dashboard", compact("page"), ["products" => $data[0], "pages" => $data[1]]);
    }

    public function artikel($page=null) {
        if ($page == null) {
            return redirect('/admin/artikel/1');
        }

        if ($page == "create" || $page == "edit") {
            return view("components.dashboard.form-article");
        }

        $data = Article::filter($page, 5);
        return view("dashboard", compact("page"), ["articles" => $data[0], "pages" => $data[1]]);
    }

    public function kontak($page=null) {
        if ($page == "edit") {
            return view("components.dashboard.form-contact");
        }

        return view("dashboard");
    }
}
