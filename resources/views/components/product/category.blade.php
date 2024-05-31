<div class="m-[10px] p-0" x-data="{isShow: false}">
    <button @click="isShow = !isShow" :class="{'bg-gray-200': isShow}" class="text-black hover:bg-gray-100 rounded-md px-[10px] py-[8px] active:bg-gray-300 border-[1px] border-gray-500 border-solid">
        Kategori
    </button>
    <div class="w-[120px] absolute bg-white rounded-[5px] border-[1px] border-gray-500 border-solid" x-show="isShow"
            x-transition:enter="transition ease-out duration-100 transform"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" >
        <ul class="text-center">
            @foreach ($categories as $category)
            <li><a href="/kategori/{{ $category["id"] }}/{{ $category["name"] }}/1"><div class="rounded-[5px] hover:bg-gray-100 rounded-md active:bg-gray-300">{{ $category["name"] }}</div></a></li>
            @endforeach
        </ul>
    </div>

</div>