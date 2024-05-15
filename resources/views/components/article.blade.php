<?php 
use Illuminate\Support\Str;

$paragraf = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde facilis odio nulla a officia numquam mollitia, dignissimos itaque cupiditate exercitationem, quisquam porro, fugiat distinctio labore nam enim blanditiis iure quas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel corporis suscipit laudantium dolorum modi qui velit reiciendis fuga incidunt quas rem aut quos, facere, itaque hic praesentium omnis maiores beatae.";
?>



<div class="w-full mt-[15px]">
    <div class="lg:w-[80%] w-[90%] m-auto mb-[10px]">
        <article class="border-solid border-b-[2px] border-gray-100 mt-[10px]">
            <h1 class="text-[25px]"><a href="#" class="hover:drop-shadow-lg">Judul</a></h1>
            <p>{{ Str::of($paragraf)->limit(200); }}</p>
            <a class="text-blue-700" href="#">Selengkapnya...</a>
        </article>
        <article class="border-solid border-b-[2px] border-gray-100 mt-[10px]">
            <h1 class="text-[25px]"><a href="#" class="hover:drop-shadow-lg">Judul</a></h1>
            <p>{{ Str::of($paragraf)->limit(200); }}</p>
            <a class="text-blue-700" href="#">Selengkapnya...</a>
        </article>
        <article class="border-solid border-b-[2px] border-gray-100 mt-[10px]">
            <h1 class="text-[25px]">Judul</h1>
            <p>{{ Str::of($paragraf)->limit(200); }}</p>
            <a class="text-blue-700" href="#">Selengkapnya...</a>
        </article>
    </div>
</div>