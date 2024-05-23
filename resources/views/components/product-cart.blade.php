@props(["products"])


<div class="lg:w-[80%] w-[90%] m-auto grid lg:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-[10px] justify-items-center mb-[10px] ">
    @foreach ($products as $product)
        <x-product-item :title="$product['title']" :image="$product['image']" :price="$product['price']" :id="$product['id']" :slug="$product['slug']"></x-product-item>
    @endforeach
</div> 
<div class="lg:w-[80%] w-[90%] m-auto mt-[20px] mb-[20px] ">
        {{ $slot }}  
</div> 
