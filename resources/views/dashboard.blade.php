<x-dashboard.dashboard-layout>
    @if (request()->is("admin")) 
        <h1 class="text-[30px] font-bold">Selamat Datang, Admin K-Store!!!</h1>
    @endif
    @if (isset($page))
        @if (request()->is("admin/produk/$page")) 
            <x-dashboard.dashboard-product :products="$products" :pages="$pages" :page="$page"></x-dashboard.dashboard-product>
        @endif
        @if (request()->is("admin/artikel/$page")) 
            <x-dashboard.dashboard-article :articles="$articles" :pages="$pages" :page="$page"></x-dashboard.dashboard-article>
        @endif
    @endif
    @if (request()->is("admin/kontak")) 
    <x-dashboard.dashboard-contact></x-dashboard.dashboard-contact>
    @endif
</x-dashboard.dashboard-layout>