<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id=null) {
        $result = Article::all();

        $articles = [];

        if (!Arr::first($result, fn ($res) => $res["id"] == $id ) && $id != null) {
            abort(404);
        }

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
    }
}
