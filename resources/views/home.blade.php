<x-layout>
    <div class="md:min-h-[450px] min-h-[550px]"">
        <x-category></x-category>
        <x-product-cart :products="$products">
            <a href="/produk/1" class="px-3 py-2 transition ease-in duration-100 rounded-[17px] border-2 border-green-600 focus:outline-none active:bg-gray-200">
                Lihat Semua Produk
            </a>
        </x-product-cart>
        @foreach ($articles as $article)
            <x-article-list :id="$article['id']" :title="$article['title']" :description="$article['description']"></x-article-list> 
        @endforeach
    </div>
</x-layout>