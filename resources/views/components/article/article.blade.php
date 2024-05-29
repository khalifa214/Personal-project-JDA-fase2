@props(['title', 'description', 'id', 'image'])

<div class="lg:w-[80%] w-[90%] m-auto mb-[20px]">
    <article>
        <div class="md:w-[80%] w-[350px] mx-auto my-[15px] ">
            <h1 class="text-[30px] font-bold mx-auto text-center" >{{ $title }}</h1>
            <img class="w-[300px] md:w-[85%] md:max-h-[350px] object-cover object-center mx-auto" src="/img/article/{{ $image }}" alt="">
        </div>
        <div class="w-full">@php echo $description; @endphp</div>
    </article>
</div>