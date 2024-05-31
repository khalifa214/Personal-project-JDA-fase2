<x-dashboard.dashboard-layout>
    <div class="bg-white mx-auto w-[95%] rounded-lg p-[10px]" x-data="{isOpen: false}">
        <h1 class="text-center text-[25px] font-medium mb-[20px]">Form Produk</h1>
        <button @click="isOpen = !isOpen" class="py-2 px-4  bg-gray-400 hover:bg-gray-500 opacity-50 hover:opacity-100 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-[200px] transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
            Tambah Kategori...
         </button>
        <form action="/admin/produk/kategori" method="get" x-show="isOpen">
            <div class="items-center w-full p-4 text-gray-800 md:inline-flex md:space-y-0"
            >
                <h2 class="max-w-sm mx-auto md:w-1/3 ">
                    Nama Kategori
                </h2>
                <div class="max-w-sm mx-auto md:w-2/3">
                    <div class=" relative ">
                        <input type="text" name="name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Nama Kategori" required />
                    </div>
                    <button type="submit" class="py-2 px-4  bg-gray-400 hover:bg-gray-500 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-[100px] transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg mt-[5px]">Tambah</button>
                    
                </div>
            </div>
        </form>

        @if (request()->is("admin/produk/create"))
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="space-y-6 bg-white">
                    
                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3 ">
                            Kategori
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                            <select name="category_id" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" required >
                                @if ($categories != null)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category["id"] }}">{{ $category["name"] }}</option>
                                    @endforeach
                                @endif
                            </select>
                            </div>
                        </div>
                    </div>
                    <hr/>

                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3 ">
                            Judul
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <input type="text" name="title" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Judul" required />
                            </div>
                        </div>
                    </div>
                    <hr/>

                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3">
                            Gambar
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <input type="file" name="image" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" required  />
                                @error('image')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <hr/>

                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3">
                            Harga
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <input type="number" name="price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Harga"/>
                            </div>
                        </div>
                    </div>
                    <hr/>


                    <div class="items-center w-full p-4 space-y-4 text-gray-800">
                        <h2 class="">
                            Deskripsi
                        </h2>
                        <div class="w-full mx-auto">
                            <div class=" relative">
                                <textarea id="content" name="description" type="text" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Deskripsi" required ></textarea>
                                <script>
                                    CKEDITOR.replace('content', {
                                        extraPlugins: 'font,colorbutton', // Menambahkan plugin font dan colorbutton
                                        toolbar: [
                                            { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
                                            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                                            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll'] },
                                            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
                                            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
                                            { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
                                            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak', 'Iframe'] },
                                            '/',
                                            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] }, // Menambahkan pilihan font dan ukuran font
                                            { name: 'colors', items: ['TextColor', 'BGColor'] },
                                            { name: 'tools', items: ['Maximize', 'ShowBlocks'] },
                                            { name: 'about', items: ['About'] }
                                        ],
                                        font_names: 'Arial/Arial, Helvetica, sans-serif; Comic Sans MS/Comic Sans MS, cursive; Courier New/Courier New, Courier, monospace; Georgia/Georgia, serif; Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif; Tahoma/Tahoma, Geneva, sans-serif; Times New Roman/Times New Roman, Times, serif; Trebuchet MS/Trebuchet MS, Helvetica, sans-serif; Verdana/Verdana, Geneva, sans-serif',
                                        fontSize_sizes: '8/8px;10/10px;12/12px;14/14px;16/16px;18/18px;20/20px;22/22px;24/24px;26/26px;28/28px;36/36px;48/48px;72/72px'
                                    });
                                </script>
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
        @endif
        

        @if (request()->is("admin/produk/edit"))
            @php
                $product = session("product");

                if ($product == null) {
                    return redirect("/admin/produk");
                }
            @endphp

            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="space-y-6 bg-white">
                    
                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <input type="text" value="{{ $product["image"] }}" name="old-image" hidden>
                        <input type="text" value="{{ $product["id"] }}" name="id" hidden>
                        <h2 class="max-w-sm mx-auto md:w-1/3 ">
                            Kategori
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                            <select name="category_id" value="{{ $product["category_id"] }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" required >
                                @if ($categories != null)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category["id"] }}">{{ $category["name"] }}</option>
                                    @endforeach
                                @endif
                            </select>
                            </div>
                        </div>
                    </div>
                    <hr/>

                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3 ">
                            Judul
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <input type="text" value="{{ $product["title"] }}" name="title" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Judul" required />
                            </div>
                        </div>
                    </div>
                    <hr/>

                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3">
                            Gambar
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <input type="file" name="image" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"/>
                                @error('image')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                                <img class="w-[150px] mx-auto mt-[10px]" src="/img/product/{{ $product["image"] }}" alt="">
                            </div>
                        </div>
                    </div>
                    <hr/>

                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3">
                            Harga
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <input type="number" value="{{ $product["price"] }}" name="price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Harga"/>
                            </div>
                        </div>
                    </div>
                    <hr/>


                    <div class="items-center w-full p-4 space-y-4 text-gray-800">
                        <h2 class="">
                            Deskripsi
                        </h2>
                        <div class="w-full mx-auto">
                            <div class=" relative">
                                <textarea id="content" name="description" type="text" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Deskripsi" required >{{ $product["description"] }}</textarea>
                                <script>
                                    CKEDITOR.replace('content', {
                                        extraPlugins: 'font,colorbutton', // Menambahkan plugin font dan colorbutton
                                        toolbar: [
                                            { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
                                            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                                            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll'] },
                                            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
                                            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
                                            { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
                                            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak', 'Iframe'] },
                                            '/',
                                            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] }, // Menambahkan pilihan font dan ukuran font
                                            { name: 'colors', items: ['TextColor', 'BGColor'] },
                                            { name: 'tools', items: ['Maximize', 'ShowBlocks'] },
                                            { name: 'about', items: ['About'] }
                                        ],
                                        font_names: 'Arial/Arial, Helvetica, sans-serif; Comic Sans MS/Comic Sans MS, cursive; Courier New/Courier New, Courier, monospace; Georgia/Georgia, serif; Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif; Tahoma/Tahoma, Geneva, sans-serif; Times New Roman/Times New Roman, Times, serif; Trebuchet MS/Trebuchet MS, Helvetica, sans-serif; Verdana/Verdana, Geneva, sans-serif',
                                        fontSize_sizes: '8/8px;10/10px;12/12px;14/14px;16/16px;18/18px;20/20px;22/22px;24/24px;26/26px;28/28px;36/36px;48/48px;72/72px'
                                    });
                                </script>
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
            
        @endif
    </div>
</x-dashboard.dashboard-layout>