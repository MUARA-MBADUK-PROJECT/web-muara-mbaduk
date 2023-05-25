
{{-- footer --}}
<div class="flex flex-col bg-footer pt-28 px-20 ">
    <div class="border-b-4 border-text-gray flex justify-between flex-wrap py-20">
        <div class="flex flex-col max-w-xs ">
            <img class="shrink" src="{{asset('resources\images\logo-muara-mbaduk-foot.png')}}" alt="logo muara mbaduk">
            <p class="text-xl text-text-gray text-left ">Kawasan wisata alam yang
                menyajikan pantai, perbukitan
                hingga tempat berkemah</p>
            <p class="text-xl text-text-gray text-left mt-5">Telepon / Whatapps : </p>
            <p class="text-xl text-text-gray text-left ">0853 3334 2050</p>
            <div class="flex mt-6 gap-4">
                <img src="{{asset('resources\icon\facebook.svg')}}" alt="">
                <img src="{{asset('resources\icon\instagram.svg')}}" alt="">
                <img src="{{asset('resources\icon\mail.svg')}}" alt="">
            </div>
        </div>
        <div class="">
            <h3 class="text-xl font-bold text-text-white">Paket Camping</h3>
            <ul class="mt-7">
                {{-- {{dd($packages)}} --}}
                @foreach($packages->data as $key => $value)
                    <a href="{{route('packet.detail',['slug'=>$value->slug])}}">
                        <li class="text-text-gray text-xl my-2">{{$value->title}}</li>
                    </a>
                @endforeach
            </ul>
        </div>
        <div class="">
            <h3 class="text-xl font-bold text-text-white">Bantuan</h3>
            <ul class="mt-7">
                
                @foreach($pages->data as $key => $value)
                <a href="{{route('pages',['slug'=> $value->slug])}}">
                    <li class="text-text-gray text-xl my-2">{{$value->pages}}</li>
                </a>
                @endforeach
                <a href="{{route('contact.show')}}">
                    <li class="text-text-gray text-xl my-2">Kontak</li>
                </a>

            </ul>
        </div>
    </div>

    <div class="py-4 flex justify-between">
        <p class="text-text-gray">Copyright © 2023 muarambaduk.info </p>
        <p class="text-text-gray">Powered By DKODE Creative</p>
    </div>

</div>