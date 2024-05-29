<x-dashboard.dashboard-layout>
    <div class="bg-white mx-auto w-[95%] rounded-lg p-[10px]">
        <h1 class="text-center text-[25px] font-medium mb-[20px]">Form Artikel</h1>

        @if (request()->is("admin/artikel/create"))
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="space-y-6 bg-white">
                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3 ">
                            Judul
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <input type="text" name="title" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Judul" required/>
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
                                <input type="file" name="image" value="image" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" />
                            </div>
                            @error('image')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <hr/>

                    <div class="items-center w-full p-4 space-y-4 text-gray-800">
                        <h2 class="">
                            Deskripsi
                        </h2>
                        <div class="w-full mx-auto">
                            <div class=" relative">
                                <textarea id="content" type="text" name="description" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Judul" required></textarea>
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
        

        @if (request()->is("admin/artikel/edit"))
            @php
               $article = session("article"); 
               if ($article == null) {
                return redirect("/admin/artikel");
               }
            @endphp
            
            
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" value="{{ $article["id"] }}" hidden>
                <input type="text" name="old-image" value="{{ $article["image"] }}" hidden>
                <div class="space-y-6 bg-white">
                    <div class="items-center w-full p-4 space-y-4 text-gray-800 md:inline-flex md:space-y-0">
                        <h2 class="max-w-sm mx-auto md:w-1/3 ">
                            Judul
                        </h2>
                        <div class="max-w-sm mx-auto md:w-2/3">
                            <div class=" relative ">
                                <input type="text" name="title" value="{{ $article["title"] }}" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Judul" required/>
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
                                <input type="file" name="image" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" />
                            </div>
                            @error('image')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                            <img class="w-[150px] mx-auto mt-[10px]" src="/img/article/{{ $article["image"] }}" alt="">
                        </div>
                    </div>
                    <hr/>

                    <div class="items-center w-full p-4 space-y-4 text-gray-800">
                        <h2 class="">
                            Deskripsi
                        </h2>
                        <div class="w-full mx-auto">
                            <div class=" relative">
                                <textarea id="content" type="text" name="description" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent" placeholder="Judul" required> {!! $article["description"] !!}</textarea>
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