<?php 
    $category=["Kategori 1", "Kategori 2", "Kategori 3", "Kategori 4"];
?>

<div class="m-[10px] p-0" x-data="{isShow: false}">
    <button @click="isShow = !isShow" class="text-black hover:bg-gray-100 rounded-md px-[10px] py-[8px] active:bg-gray-300">
        Kategori
    </button>
    <div class="w-[120px] absolute" x-show="isShow"
            x-transition:enter="transition ease-out duration-100 transform"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" >
        <ul class="text-center">
            @foreach ($category as $ctg)
            <li class="my-[5px] hover:bg-gray-100 rounded-md active:bg-gray-300"><a href="#">{{ $ctg }}</a></li>
            @endforeach
        </ul>
    </div>

</div>