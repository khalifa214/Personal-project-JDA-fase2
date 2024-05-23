<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Article {
    public static function all() {
        return [
            [
                "id"=> 1,
                "title"=> "Judul 1",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id"=> 2,
                "title"=> "Judul 2",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id"=> 3,
                "title"=> "Judul 3",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ],
            [
                "id"=> 4,
                "title"=> "Judul 4",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae."
            ]
            ];
    }

}