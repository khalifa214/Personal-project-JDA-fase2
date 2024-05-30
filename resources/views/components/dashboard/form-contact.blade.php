<x-dashboard.dashboard-layout>
    <div class="bg-white mx-auto w-[95%] rounded-lg p-[10px]">
        <h1 class="text-center text-[25px] font-medium mb-[20px]">Form kontak</h1>
        <form action="" method="post">
            @csrf
            <div class="space-y-6 bg-white">
                <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3 ">
                        Nama
                    </h2>
                    <div class="max-w-sm mx-auto md:w-2/3">
                        <div class=" relative ">
                            <input type="text" name="name" value="{{ $contact["name"] }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Nama"/>
                        </div>
                    </div>
                </div>
                <hr/>

                <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3 ">
                        Alamat
                    </h2>
                    <div class="max-w-sm mx-auto md:w-2/3">
                        <div class=" relative ">
                            <textarea type="text" name="address" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Alamat">{{ $contact["address"] }}</textarea>
                        </div>
                    </div>
                </div>
                <hr/>

                <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3 ">
                        Kota
                    </h2>
                    <div class="max-w-sm mx-auto md:w-2/3">
                        <div class=" relative ">
                            <input type="text" name="city" value="{{ $contact["city"] }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Kota"/>
                        </div>
                    </div>
                </div>
                <hr/>

                <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3 ">
                        Telepon
                    </h2>
                    <div class="max-w-sm mx-auto md:w-2/3">
                        <div class=" relative ">
                            <input type="text" name="telephone" value="{{ $contact["telephone"] }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"/>
                        </div>
                    </div>
                </div>
                <hr/>

                <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                    <h2 class="max-w-sm mx-auto md:w-1/3 ">
                        WhatsApp
                    </h2>
                    <div class="max-w-sm mx-auto md:w-2/3">
                        <div class=" relative ">
                            <input type="text" name="WA" value="{{ $contact["WA"] }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"/>
                        </div>
                    </div>
                </div>
                <hr/>
                
                <div class="space-y-6 bg-white">
                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3 ">
                            Email
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <input type="email" name="email" value="{{ $contact["email"] }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Email"/>
                            </div>
                        </div>
                    </div>
                    <hr/>    

                <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                    <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                        <button type="submit" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            Simpan
                        </button>
                    </div>
                </div>    
            </div>
        </form>
    </div>
</x-dashboard.dashboard-layout>