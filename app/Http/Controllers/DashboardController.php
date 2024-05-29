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

    public function createArtikel() {
        $article = new Article();

        request()->validate([
            "title" => ["required"],
            "image" => ["nullable", "file", "mimes:jpg, jpeg"],        
            "description" => ["required"],
            ['image.mimes' => 'Ekstensi file harus berupa JPG atau JPEG.']
        ]);

        $data = request()->all();

        if (request()->hasFile("image")) {
            $image = request()->file("image");
            $imageName = time(). "_" . $image->hashName();
            $image->move("img/article", $imageName);
            $article->image = $imageName;
        } else {
            $article->image = "image";
        }

        $article->title = $data["title"];
        $article->description = $data["description"];

        $article->save();

        return redirect("/admin/artikel")->with("success", "Artikel berhasil dibuat.");
    }

    public function edit($id) {
        $article = Article::find($id);


        if (!$article) {
            return redirect("/admin/artikel");
        }

        return redirect("/admin/artikel/edit")->with("article", $article);
    }

    public function editArtikel() {
      
        request()->validate([
            "title" => ["required"],
            "image" => ["nullable", "file", "mimes:jpg, jpeg"],        
            "description" => ["required"],
            ['image.mimes' => 'Ekstensi file harus berupa JPG atau JPEG.']
        ]);

        $data = request()->all();
        $article = Article::find($data["id"]);

        if (request()->hasFile("image")) {
            $image = request()->file("image");
            $imageName = time(). "_" . $image->hashName();
            $image->move("img/article", $imageName);
            $article->image = $imageName;
        }  else {
            $article->image = $data["old-image"];
        }

        $article->title = $data["title"];
        $article->description = $data["description"];
        
        $article->save();

        return redirect("/admin/artikel")->with("success", "Artikel berhasil di edit.");
    }

    public function deleteArtikel($id) {
        Article::destroy($id);

        return redirect("/admin/artikel");
    }

    public function kontak($page=null) {
        if ($page == "edit") {
            return view("components.dashboard.form-contact");
        }

        return view("dashboard");
    }
}
