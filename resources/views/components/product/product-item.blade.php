<?php 
use Illuminate\Support\Str;
?>

<a href="/produk/{{ $id }}/{{ $slug }}">
    <div  class="w-[200px] h-[270.5px] p-[10px] shadow-product hover:shadow-[rgba(0,0,0,0.6)] rounded-[5px] flex flex-col flex-end">
        <img class="w-[180px] max-h-[180px] object-cover object-center m-auto" src="/img/product/{{ $image }}" alt="gambar">
        <h2 class="text-[16px] w-[180px] break-words">{{ Str::of($title)->limit(40) }}</h2>
        <p class="text-[15px] font-bold">@rupiah($price)</p>
    </div>
</a>