<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public static function filterCategory() {
        $dataCategory = Arr::where(static::all()->toArray(), fn ($ctg) => Arr::first(Product::all()->toArray(), fn ($product) => $product["category_id"] == $ctg["id"]) );

        return $dataCategory;
    }
}
