<div class="w-full border-solid border-b-[4px] border-gray-200">
    <div class="lg:w-[80%] w-[90%] m-auto grid lg:grid-cols-5 sm:grid-cols-3 grid-cols-2 gap-[10px] justify-items-center mb-[10px]">
        @for ($i=0; $i<10; $i++)
        <x-product-item></x-product-item>
        @endfor
     </div> 
     <div class="lg:w-[80%] w-[90%] m-auto mb-[20px]">
        {{ $slot }}  
    </div> 
</div>