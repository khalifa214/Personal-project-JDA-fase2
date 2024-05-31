<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($id, $name, $page) {
        $category = Category::filterCategory();
        $checkData = Arr::first($category, fn ($data) => $data["name"] == $name && $data["id"] == $id);

        if (!$checkData) {
            abort(404);
        }

        $data = Product::category($page, 8, $id);

        return view('product', compact('page', 'id', 'name'), ['products' => $data[0], 'pages' => $data[1], 'categories'=> $category]);
    }
}
