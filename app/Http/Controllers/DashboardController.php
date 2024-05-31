<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
       
        return view("dashboard");
    }


    //fungsi untuk membuat kategori 
    public function kategori() {
        request()->validate([
            "name" => ["required"]
        ]);

        $category = new Category();
        $data = request()->all();
        $category->name = $data["name"];
        $category->save();

        return redirect("/admin/produk");
    }


    //fungsi untuk CRUD produk
    public function produk($page=null) {

        $category = Category::all()->toArray();

        if ($page == null) {
            return redirect('/admin/produk/1');
        }

        if ($page == "create" || $page == "edit") {
            return view("components.dashboard.form-product", ["categories"=> $category]);
        }

        $data = Product::filter($page, 5);
        return view("dashboard", compact("page"), ["products" => $data[0], "pages" => $data[1]]);
    }

    public function createProduk() {
        $product = new Product();

        request()->validate([
            "title" => ["required"],
            "category_id"=> ["required"],
            "image" => ["required", "file", "mimes:jpg, jpeg"],
            "price" => ["nullable"],
            "description" => ["required"],
            ['image.mimes' => 'Ekstensi file harus berupa JPG atau JPEG.']
        ]);

        $data = request()->all();

        if (request()->hasFile("image")) {
            $image = request()->file("image");
            $imageName = time(). "_" . $image->hashName();
            $image->move("img/product", $imageName);
            $product->image = $imageName;
        }

        if (!request()->input("price")) {
            $product->price = "0";
        } else {
            $product->price = $data["price"];
        }

        $product->title = $data["title"];
        $product->slug = Str::slug($data["title"]);
        $product->category_id = $data["category_id"];
        $product->description = $data["description"];
        $product->save();

        return redirect("/admin/produk")->with("success", "Produk berhasil dibuat.");

    }

    public function editProduk($id) {
        $product = Product::find($id);

        if (!$product) {
            return redirect("/admin/produk");
        }
        return redirect("/admin/produk/edit")->with("product", $product);
    }

    public function editFormProduk() {
        $data = request()->all();

        request()->validate([
            "title" => ["required"],
            "category_id"=> ["required"],
            "image" => ["nullable", "file", "mimes:jpg, jpeg"],
            "price" => ["nullable"],
            "description" => ["required"],
            ['image.mimes' => 'Ekstensi file harus berupa JPG atau JPEG.']
        ]);

        $product = Product::find($data["id"]);

        if (request()->hasFile("image")) {
            $image = request()->file("image");
            $imageName = time(). "_" . $image->hashName();
            $image->move("img/product", $imageName);
            $product->image = $imageName;
        } else {
            $product->image = $data["old-image"];
        }

        if (!request()->input("price")) {
            $product->price = "0";
        } else {
            $product->price = $data["price"];
        }

        $product->title = $data["title"];
        $product->slug = Str::slug($data["title"]);
        $product->category_id = $data["category_id"];
        $product->description = $data["description"];
        $product->save();

        return redirect("/admin/produk")->with("success", "Produk berhasil di edit.");
    }

    public function deleteProduk($id) {
        Product::destroy($id);

        return redirect("/admin/produk");
    }

    //fungsi untuk CRUD artikel
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

    public function editArtikel($id) {
        $article = Article::find($id);


        if (!$article) {
            return redirect("/admin/artikel");
        }

        return redirect("/admin/artikel/edit")->with("article", $article);
    }

    public function editFormArtikel() {
      
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


    //fungsi untuk edit kontak
    public function kontak($page=null) {

        $data= Contact::all()->toArray();

        if ($page == "edit") {
            return view("components.dashboard.form-contact", ["contact" => $data[0]]);
        }

        return view("dashboard", ["contact" => $data[0]]);
    }

    //fungsi untuk meng edit informasi kontak
    public function editKontak() {

        request()->validate([
            "name" => ["required"],
            "address" => ["required"],
            "city" => ["required"],
            "telephone" => ["required"],
            "WA" => ["required"],
            "email" => ["nullable"],
        ]);

        $data = request()->all();

        $contact = Contact::find(1);

        if(request()->input("email") == null) {
            $contact->email = "-";
        } else {
            $contact->email = $data["email"];
        }

        $contact->name = $data["name"];
        $contact->address = $data["address"];
        $contact->city = $data["city"];
        $contact->telephone = $data["telephone"];
        $contact->WA = $data["WA"];

        $contact->save();
        return redirect("/admin/kontak")->with("success", "Kontak berhasil di edit.");
    }
}


