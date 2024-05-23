<x-layout>
    @if ($products != null)
        <x-category></x-category>
        <x-product-cart :products="$products">
            <div class="flex gap-0 flex-row">
                @if ($pages > 1)
                    @if ($pages > 3) 
                        <a class="px-3 py-1 bg-gray-50 rounded-l-[5px] hover:bg-gray-200 border-r-[1px] border-x-gray-400" href="/produk/1">&laquo;</a>
                    @endif
                    @for ($i=1; $i <= $pages; $i++)
                        @php
                        @endphp
                        <a class="bg-gray-50 px-3 py-1 hover:bg-gray-200 border-x-[1px] border-x-gray-400" href="/produk/{{ $i }}">{{ $i }}</a>
                    @endfor
                    @if ($pages > 3 ) 
                        <a class="px-3 py-1 bg-gray-50 rounded-r-[5px] hover:bg-gray-200 border-l-[1px] border-x-gray-400" href="/produk/{{ $pages }}">&raquo;</a>
                    @endif
                @endif
                
            </div>
        </x-product-cart>
    @endif 
</x-layout>