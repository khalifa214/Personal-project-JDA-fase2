<x-layout>
    <div class="w-[90%] lg:w-[80%] m-auto">
        <div class="flex sm:gap-6 mt-[20px] sm:flex-row flex-col">
            <img class="w-[300px] rounded-[10px] m-auto sm:m-0" src="/img/product/{{ $product['image'] }}" alt="">
            <div class="flex flex-col sm:justify-end justify-start p-[20px]">
                <h1 class="font-bold sm:text-[30px] text-[25px]">{{ $product['title'] }}</h1>
                <p class="font-bold sm:text-[35px] text-[25px]">@rupiah($product['price'])</p>
            </div>
        </div>
        <div>
            <div>
                <h2 class="text-[20px] font-medium sm:mt-[20px]">Informasi Barang</h2>
                <p>{!! $product['description'] !!}</p>
            </div>
        </div>
        <div class="my-[20px]">
            <h2 class="text-[20px] font-medium">Untuk Pemesanan, Silahkan Hubungi : </h2>
            <a aria-label="Chat on WhatsApp" href="https://wa.me/{{ $contact[0]["WA"] }}"><img class="ml-[15px] w-[300px]" alt="Chat on WhatsApp" src="/img/WhatsAppButtonGreenLarge.png" />
                <a />
        </div>
    </div>
</x-layout>