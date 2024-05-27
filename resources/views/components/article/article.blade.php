@props(['title', 'description', 'id'])

<div class="lg:w-[80%] w-[90%] m-auto mb-[20px]">
    <article>
        <div class="flex justify-center">
            <h1 class="text-[30px] font-bold " >{{ $title }}</h1>
        </div>
        <p>{{ $description }}</p>
    </article>
</div>