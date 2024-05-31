<div class="w-[90%] mx-auto p-[10px]">
    <div class="flex relative justify-center mb-[15px] z-30">
        <form action="" method="post">
            <input type="text" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 md:w-[300px] w-[210px] py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Cari artikel...">
            <button class="flex-shrink-0 px-4 md:py-2 py-[4px] text-base font-semibold text-white bg-green-600 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-green-200" type="submit">Search</button>
        </form>
    </div>
    
    <a href="/admin/artikel/create">
        <button class="py-2 px-2 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-[150px] transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">Tambah Artikel</button>
    </a>
    @if (session('success'))
        <div class="p-[15px] mb-[20px] border-[1px] rounded-[4px] border-green-300 text-green-600 bg-green-100 ">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="p-[15px] mb-[20px] border-[1px] rounded-[4px] border-red-300 text-red-600 bg-red-100 ">
            {{ session('error') }}
        </div>
    @endif
    @foreach ($articles as $article )
    <div class="w-full my-[10px] rounded-[20px] shadow-product bg-white p-[10px] flex mx-auto">
        {{-- <img src="/img/{{ $article["image"] }}" alt="" class="sm:w-[150px] sm:max-h-[150px] w-[100px] max-h-[100px] rounded-[15px]"> --}}
        <div class="flex flex-col justify-between p-[10px] w-full">
            <h1 class="sm:text-[25px] text-[20px] text-wrap">{{ $article["title"] }}</h1>
            <div class="relative flex gap-2 justify-end z-20">
                <a href="/admin/artikel/edit/{{ $article["id"] }}" class="bg-green-600 hover:bg-green-700 py-0 sm:py-1 px-2 rounded-lg text-white hover:cursor-pointer">
                    <i class="fas fa-edit"></i><span class="sm:inline-block hidden ml-1">Edit</span>
                </a>
                <button onclick="confirmDeleteArticle({{ $article['id'] }})" class="bg-red-600 hover:bg-red-700 py-1 px-2 rounded-lg text-white"> 
                    <i class="fas fa-trash"></i><span class="sm:inline-block hidden ml-1">Delete</span>
                </button>
            </div>
        </div>
    </div>
    @endforeach
    <div class="flex gap-0 flex-row relative shadow-product w-fit rounded-md">
        @if ($pages > 1)
            @if ($pages > 2) 
                <a class="px-3 py-1 bg-gray-50 rounded-l-[5px] hover:bg-gray-200 border-r-[1px] border-x-gray-400" href="/admin/artikel/1">&laquo;</a>
            @endif
            @if ($page > 1)
                @php
                   $prev = $page - 1;
                @endphp 
                <a class="px-3 py-1 {{ (request()->is("admin/artikel/$prev") ) ? "bg-gray-100" : "bg-grey-50"}} hover:bg-gray-200 border-x-[1px] border-x-gray-400" href="/admin/artikel/{{ $prev }}">{{ $prev }}</a>
            @endif

            <a class="px-3 py-1 {{ (request()->is("admin/artikel/$page") ) ? "bg-gray-200" : "bg-grey-50"}} hover:bg-gray-200 border-x-[1px] border-x-gray-400" href="/admin/artikel/{{ $page }}">{{ $page }}</a>

            @if ($page < $pages)
                @php
                   $next = $page + 1;
                @endphp 
                <a class="px-3 py-1 {{ (request()->is("admin/artikel/$$next") ) ? "bg-gray-100" : "bg-grey-50"}} hover:bg-gray-200 border-x-[1px] border-x-gray-400" href="/admin/artikel/{{ $next }}">{{ $next }}</a>
            @endif
            @if ($pages > 2 ) 
                <a class="px-3 py-1 bg-gray-50 rounded-r-[5px] hover:bg-gray-200 border-l-[1px] border-x-gray-400" href="/admin/artikel/{{ $pages }}">&raquo;</a>
            @endif
        @endif
        
    </div>
    
</div>