<div class="fixed w-full top-0 z-50">
    <nav class="bg-white dark:bg-gray-800  shadow py-4" x-data="{isOpen: false}">
        <div class="px-8 mx-auto max-w-7xl">
            <div class="flex items-center justify-between h-16">
                <div class=" flex items-center">
                    <a class="flex-shrink-0" href="/">
                        <img class="w-[80px]" src="/img/logo.png" alt="logo"/>
                    </a>
                    <div class="hidden md:block ">
                        <div class="flex items-baseline ml-10 space-x-4 ">
                            <x-nav-link href="/" :active="request()->is('/')" >Beranda</x-nav-link>
                            <x-nav-link href="/produk/1" :active="request()->is('produk/*')" >Produk</x-nav-link>
                            <x-nav-link href="/artikel" :active="request()->is('artikel/*', 'artikel')" >Artikel</x-nav-link>
                            <x-nav-link href="#footer" :active="request()->is('kontak')" >Kontak</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="flex -mr-2 " :class="{'hidden': isOpen, 'block': !isOpen}" >
                        <form class="flex flex-col justify-center w-3/4 max-w-sm space-y-3 md:flex-row md:w-full md:space-x-3 md:space-y-0">
                            <div class=" relative">
                                <input type="text" id="&quot;form-subscribe-Search" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Cari produk..."/>
                                </div>
                                <button class="flex-shrink-0 px-4 md:py-2 py-[4px] text-base font-semibold text-white bg-green-600 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-green-200" type="submit">
                                    Search
                                </button>
                            </form>
                        </div>
                        <div class="flex items-center ml-4 md:ml-6">
                        </div>
                    </div>
                    <div class="flex -mr-2 md:hidden">
                        <button @click="isOpen = !isOpen" class="text-gray-800 dark:text-white hover:text-gray-300 inline-flex items-center justify-center p-2 rounded-md focus:outline-none">
                            <svg width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:hidden"  
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-100 transform"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" >
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <x-nav-link href="/" :active="request()->is('/')" >Beranda</x-nav-link>
                    <x-nav-link href="/produk/1" :active="request()->is('produk/*')" >Produk</x-nav-link>
                    <x-nav-link href="/artikel" :active="request()->is('artikel/*')" >Artikel</x-nav-link>
                    <x-nav-link href="#footer" :active="request()->is('kontak')" >Kontak</x-nav-link>
                </div>
                <div class="flex p-2">
                    <form class="flex flex-col justify-center w-3/4 max-w-sm space-y-3 md:flex-row md:w-full md:space-x-3 md:space-y-0">
                        <div class=" relative ">
                            <input type="text" id="&quot;form-subscribe-Search" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Cari produk..."/>
                            </div>
                            <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-green-600 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-green-200" type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
