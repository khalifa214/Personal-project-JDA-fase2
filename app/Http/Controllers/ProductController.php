<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function filterData($page) {
        $data = array_reverse(Product::all());
        $pagestotal = 0;
        if ($page == null) {
            return redirect('/produk/1');
        }
    
        if ($data != null) {
            $pages= array_chunk($data, 8);
            $pagestotal = count($pages);
            $rangePage = range(1, $pagestotal);
            if (!Arr::first($rangePage, fn ($rPage) => $rPage == $page) && $page != null) {
                abort(404);
            }
            $data = $pages[$page-1];
        }

        return view('product', ['products' => $data, 'pages' => $pagestotal]);
    }

    public function detail($id, $slug) {
        $data = Product::all();
        $filterData = Arr::first($data, fn ($product) => $product["id"] == $id && $product["slug"] == $slug);

        if (!$filterData) {
            abort(404);
        }

        return view('product-detail', ['product' => $filterData]);
    }
}
