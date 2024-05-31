<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model {

    use HasFactory;

    public static function filter($page, $item) {
        $data = array_reverse(static::all()->toArray());
        
        $pagestotal = 0;
    
        if ($data != null) {
            $pages= array_chunk($data, $item);
            $pagestotal = count($pages);
            $rangePage = range(1, $pagestotal);
            if (!Arr::first($rangePage, fn ($rPage) => $rPage == $page) && $page != null) {
                abort(404);
            }
            $data = $pages[$page-1];
        }

        return [$data, $pagestotal];
    }

    public static function category($page, $item, $id) {
        $products = array_reverse(static::all()->toArray());

        $data = Arr::where($products, fn ($product) => $product["category_id"] == $id );

        $pagestotal = 0;
    
        if ($data != null) {
            $pages= array_chunk($data, $item);
            $pagestotal = count($pages);
            $rangePage = range(1, $pagestotal);
            if (!Arr::first($rangePage, fn ($rPage) => $rPage == $page) && $page != null) {
                abort(404);
            }
            $data = $pages[$page-1];
        }

        return [$data, $pagestotal];
    }
}