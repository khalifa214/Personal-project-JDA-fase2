<div class="bg-white mx-auto w-[95%] rounded-lg p-[10px]">
    <h1 class="text-center text-[30px] font-medium mb-[20px]">Kontak</h1>
    <a href="/admin/kontak/edit">
        <button class="py-2 px-2 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-[150px] transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg mb-[10px]"><i class="fas fa-edit"></i> Edit Kontak</button>
    </a>
    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0 bg-gray-50">
        <h2 class="max-w-sm md:w-1/5 ">
            Nama :
        </h2>
        <div class="w-full">
            <div class=" relative ">
                <h2 type="text" class=" rounded-lg w-full py-2 px-4 bg-white text-gray-700 text-base">{{ $contact["name"] }}</h2>
            </div>
        </div>
    </div>
    <hr/>

    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0 bg-gray-50">
        <h2 class="max-w-sm md:w-1/5 ">
            Alamat :
        </h2>
        <div class="w-full">
            <div class=" relative ">
                <h2 type="text" class=" rounded-lg w-full py-2 px-4 bg-white text-gray-700 text-base">{{ $contact["address"] }}</h2>
            </div>
        </div>
    </div>
    <hr/>

    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0 bg-gray-50">
        <h2 class="max-w-sm md:w-1/5 ">
            Kota :
        </h2>
        <div class="w-full">
            <div class=" relative ">
                <h2 type="text" class=" rounded-lg w-full py-2 px-4 bg-white text-gray-700 text-base">{{ $contact["city"] }}</h2>
            </div>
        </div>
    </div>
    <hr/>

    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0 bg-gray-50">
        <h2 class="max-w-sm md:w-1/5 ">
            Telepon :
        </h2>
        <div class="w-full">
            <div class=" relative ">
                <h2 type="text" class=" rounded-lg w-full py-2 px-4 bg-white text-gray-700 text-base">{{ $contact["telephone"] }}</h2>
            </div>
        </div>
    </div>
    <hr/>

    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0 bg-gray-50">
        <h2 class="max-w-sm md:w-1/5 ">
            WhatsApp :
        </h2>
        <div class="w-full">
            <div class=" relative ">
                <h2 type="text" class=" rounded-lg w-full py-2 px-4 bg-white text-gray-700 text-base">{{ $contact["WA"] }}</h2>
            </div>
        </div>
    </div>
    <hr/>

    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0 bg-gray-50">
        <h2 class="max-w-sm md:w-1/5 ">
            Email :
        </h2>
        <div class="w-full">
            <div class=" relative ">
                <h2 type="text" class=" rounded-lg w-full py-2 px-4 bg-white text-gray-700 text-base">{{ $contact["email"] }}</h2>
            </div>
        </div>
    </div>
    <hr/>

</div>