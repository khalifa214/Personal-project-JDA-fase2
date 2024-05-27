<x-layout>
    @if ($products != null)
        <x-product.category></x-product.category>
        <x-product.product-cart :products="$products">
            <a href="/produk/1" class="px-3 py-2 transition ease-in duration-100 rounded-[17px] border-2 border-green-600 focus:outline-none active:bg-gray-200">
                Lihat Semua Produk
            </a>
        </x-product.product-cart>
    @endif
    @if ($articles != null)
        <div class="border-solid border-t-[4px] border-gray-200 "></div>
        @foreach ($articles as $article)
            <x-article.article-list :id="$article['id']" :title="$article['title']" :description="$article['description']"></x-article.article-list> 
        @endforeach     
    @endif
</x-layout>