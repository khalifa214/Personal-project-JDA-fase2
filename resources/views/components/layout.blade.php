<x-html>
    <x-navbar></x-navbar>
    <div class="md:min-h-[450px] min-h-[550px] w-full">
        {{ $slot }}
    </div>
    <x-footer></x-footer>
</x-html>