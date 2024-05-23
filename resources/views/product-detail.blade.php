<x-layout>
    <div class="w-[90%] lg:w-[80%] m-auto">
        <div class="flex sm:gap-6 mt-[20px] sm:flex-row flex-col">
            <img class="w-[300px] rounded-[10px] m-auto sm:m-0" src="/img/{{ $product['image'] }}" alt="">
            <div class="flex flex-col sm:justify-end justify-start p-[20px]">
                <h1 class="font-bold sm:text-[30px] text-[25px]">{{ $product['title'] }}</h1>
                <p class="font-bold sm:text-[35px] text-[25px]">@rupiah($product['price'])</p>
            </div>
        </div>
        <div>
            <div>
                <h2 class="text-[20px] font-medium sm:mt-[20px]">Informasi Barang</h2>
                <p>{{ $product['description'] }}</p>
            </div>
        </div>
        <div class="my-[20px]">
            <h2>Untuk Pemesanan, Silahkan Hubungi : </h2>
            <a href="#">082322323232</a>
        </div>
    </div>
</x-layout>