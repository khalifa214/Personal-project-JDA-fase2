@php
    use App\Models\Contact;
    $contact = Contact::all()->toArray()[0];
@endphp

<footer id="footer" class="w-full bg-green-600 h-fit p-[5px]">
    <div class="flex flex-row justify-between text-white">
        <div class="mx-2">
            <h2 class="text-[22px]">Kontak Kami</h2>
            <ul class="flex flex-col ">
                <div class="mx-2 flex flex-row mb-[5px]">
                    <div>
                        <li><i class="fas fa-phone-square-alt mr-2 text-[20px]"></i>{{ $contact["telephone"] }}</li>
                        <li><i class="fab fa-whatsapp mr-2 text-[20px]"></i>{{ $contact["WA"] }}</li>
                    </div>
                    @if ($contact["email"]  != "-" )
                        <li><i class="far fa-envelope ml-3 mr-2 text-[20px]"></i>{{ $contact["email"] }}</li>
                    @endif
                </div>
                <div >
                    <li class="flex flex-row"><i class="fas fa-map-marker-alt mx-2 text-[20px]"></i> <div>{{ $contact["address"] }}, {{ $contact["city"] }}</div></li>
                </div>
            </ul>
        </div>
        <div class="mx-2 flex flex-col justify-end">
            <h2 class="text-[20px]">Ikuti Kami</h2>
            <div class="flex gap-2">
                <a href=""><i class="fab fa-facebook text-[20px]"></i></a>
                <a href=""><i class="fab fa-instagram-square text-[20px]"></i></a>
                
            </div>
        </div>
    </div>
</footer>