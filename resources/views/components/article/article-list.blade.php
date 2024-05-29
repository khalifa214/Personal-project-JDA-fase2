@php
    use Illuminate\Support\Str;
@endphp

@props(['title', 'description', 'id'])

<div class="lg:w-[80%] w-[90%] m-auto mb-[10px] mt-[15px]">
    <article class="border-solid border-b-[2px] border-gray-100 mt-[10px]">
        <h1 class="text-[25px] w-fit hover:drop-shadow-lg hover:text-blue-500"><a href="/artikel/{{ $id }}">{{ $title }}</a></h1>
        <div class="inline-all flex flex-row gap-2">{!! Str::of($description)->limit(200); !!}</div>
        <a class="text-blue-700" href="/artikel/{{ $id }}">Selengkapnya&raquo;</a>
    </article>
</div>
