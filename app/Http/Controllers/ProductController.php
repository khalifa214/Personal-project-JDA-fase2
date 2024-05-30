<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function filterData($page=null) {

        if ($page == null) {
            return redirect('/produk/1');
        }
        
        $data = Product::filter($page, 8);
        $category = Category::all()->toArray();

        return view('product', compact('page'), ['products' => $data[0], 'pages' => $data[1], 'categories'=> $category]);
    }

    public function detail($id, $slug) {
        $data = Product::all();
        $filterData = Arr::first($data, fn ($product) => $product["id"] == $id && $product["slug"] == $slug);

        $contact = Contact::all()->toArray();

        if (!$filterData) {
            abort(404);
        }

        return view('product-detail', ['product' => $filterData, 'contact' => $contact]);
    }
}
