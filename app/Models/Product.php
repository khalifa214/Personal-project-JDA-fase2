<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Product {
    public static function all() {
        return [
            [
                "id" => 1,
                "category-id" => 1,
                "title" => "Judul 1",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 2,
                "category-id" => 2,
                "title" => "Judul 2",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 3,
                "category-id" => 1,
                "title" => "Judul 3",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 4,
                "category-id" => 2,
                "title" => "Judul 4",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 5,
                "category-id" => 1,
                "title" => "Judul 5",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 6,
                "category-id" => 2,
                "title" => "Judul 6",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 7,
                "category-id" => 1,
                "title" => "Judul 7",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 8,
                "category-id" => 2,
                "title" => "Judul 8",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 9,
                "category-id" => 1,
                "title" => "Judul 9",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 10,
                "category-id" => 2,
                "title" => "Judul 10",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id" => 11,
                "category-id" => 1,
                "title" => "Judul 11",
                "slug" => "judul-produk",
                "image" => "example-image.png",
                "price" => 10000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
        ];
    }

    public static function filter($page, $item) {
        $data = array_reverse(static::all());
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