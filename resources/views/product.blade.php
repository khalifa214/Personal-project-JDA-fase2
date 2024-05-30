<x-layout>
    @if ($products != null)
        <x-product.category :categories="$categories"></x-product.category>
        <x-product.product-cart :products="$products">      

                @if ($pages > 1)
                    <div class="flex gap-0 flex-row shadow-product w-fit rounded-md">
                        @if ($pages > 2) 
                            <a class="px-3 py-1 bg-gray-50 rounded-l-[5px] hover:bg-gray-200 border-r-[1px] border-x-gray-400" href="/produk/1">&laquo;</a>
                        @endif
                        @if ($page > 1)
                            @php
                            $prev = $page - 1;
                            @endphp 
                            <a class="px-3 py-1 {{ (request()->is("produk/$prev") ) ? "bg-gray-100" : "bg-grey-50"}} hover:bg-gray-200 border-x-[1px] border-x-gray-400" href="/produk/{{ $prev }}">{{ $prev }}</a>
                        @endif

                        <a class="px-3 py-1 {{ (request()->is("produk/$page") ) ? "bg-gray-100" : "bg-grey-50"}} hover:bg-gray-200 border-x-[1px] border-x-gray-400" href="/produk/{{ $page }}">{{ $page }}</a>

                        @if ($page < $pages)
                            @php
                            $next = $page + 1;
                            @endphp 
                            <a class="px-3 py-1 {{ (request()->is("produk/$$next") ) ? "bg-gray-100" : "bg-grey-50"}} hover:bg-gray-200 border-x-[1px] border-x-gray-400" href="/produk/{{ $next }}">{{ $next }}</a>
                        @endif
                        @if ($pages > 2 ) 
                            <a class="px-3 py-1 bg-gray-50 rounded-r-[5px] hover:bg-gray-200 border-l-[1px] border-x-gray-400" href="/produk/{{ $pages }}">&raquo;</a>
                        @endif
                    </div>
                @endif 

        </x-product.product-cart>
    @endif 
</x-layout>