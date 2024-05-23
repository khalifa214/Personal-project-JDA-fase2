<?php 
use Illuminate\Support\Str;
?>
@props(["title", "image", "price", "id", "slug"])

<div  class="w-[200px] p-[10px] shadow-product hover:shadow-[rgba(0,0,0,0.6)] rounded-[5px]">
    <a href="/produk/{{ $id }}/{{ $slug }}"><img class="w-[180px] max-h-[180px] m-auto" src="/img/{{ $image }}" alt="gambar"></a>
    <h2 class="text-[16px] w-[180px] break-words"><a href="/produk/{{ $id }}/{{ $slug }}" class="hover:drop-shadow-lg">{{ Str::of($title)->limit(40) }}</a></h2>
    <p class="text-[15px] font-bold">@rupiah($price)</p>
</div>