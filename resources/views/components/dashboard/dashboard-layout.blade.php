<x-html>
    <div class="flex md:flex-row flex-col h-5 w-full mt-[-100px] bg-gray-700 h-fit"> 
        <div class="relative w-[300px]">
            <div class="md:w-fit w-full md:h-full text-white p-[25px] fixed md:text-left text-center bg-gray-700 z-50"
            >
                <h1 class="text-[30px]">Dashboard</h1>
                <ul class="flex md:flex-col gap-[10px] text-[22px] mt-[20px] justify-around">
                        <li>
                            <a href="/admin/produk" class="hover:text-green-500 active:text-white"><i class="fas fa-store mr-[10px]"></i>Produk</a>
                        </li>
                        <li>
                            <a href="/admin/artikel" class="hover:text-green-500 active:text-white"><i class="far fa-newspaper mr-[10px]"></i>Artikel</a>
                        </li>
                        <li>
                            <a href="/admin/kontak" class="hover:text-green-500 active:text-white"><i class="fas fa-address-book mr-[15px]"></i>Kontak</a>
                        </li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-[20px] pb-0 w-full ">
            <div class="bg-gray-100 w-full m-auto rounded-t-[30px] p-[20px] border-x-[5px] border-t-[5px] border-green-600 min-h-[600px] md:min-h-[550px] flex justify-center md:m-0 mt-[130px]">
                {{ $slot }}
            </div>
        </div>
        
    </div>
</x-html>
