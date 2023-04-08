@extends('layouts.landing.app')
@section('conten')
<div class="inline-flex items-center justify-center w-screen bg-white" style=" height: 832px;">
    <div class="inline-flex flex-col items-center justify-end px-24 bg-black bg-no-repeat bg-cover bg-center bg-opacity-40 w-full" style=" height: 832px; background-image: url('{{Vite::asset('resources/images/header-image.png')}}')">
        <div class=" inline-flex space-x-96 items-center justify-end py-5 pl-28 pr-24 w-full sticky top-0 border-collapse" style=" height: 100px;">
            <img class="w-28 h-full" src="{{Vite::asset('resources\images\logo-muara-mbaduk.png')}}" />
            <div class="flex space-x-9 items-center justify-start" style="width: 564px; height: 44px;">
                <p class="text-base text-white">Beranda</p>
                <p class="text-base text-white">Eksplore</p>
                <p class="text-base text-white">Paket Camping</p>
                <p class="text-base text-white">Tentang</p>
                <div class="flex items-center justify-center w-1/6 h-full px-4 py-2.5 bg-blue-700 rounded">
                    <p class="text-base font-bold text-white">Masuk</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col space-y-5 items-start justify-end pl-24 pr-96 py-40" style="width: 1280px; height: 732px;">
            <p class="text-2xl font-medium text-white">Selamat Datang Di Muara Mbaduk</p>
            <p class="text-5xl font-bold text-white">Nikmati Liburan yang<br />Berbeda dengan<br />Berkemah</p>
            <p class="text-base font-light text-white">Muara Mbaduk adalah kawasan wisata alam yang<br />menyajikan pantai, perbukitan hingga tempat berkemah</p>
            <div class="inline-flex space-x-3 items-center justify-end w-56 h-14 pl-4 bg-blue-700 rounded">
                <p class="text-base font-bold text-white">PESAN SEKARANG</p>
                <div class="flex items-center justify-center w-11 h-full px-2.5 py-4 bg-blue-800">
                    <img class="flex-1 h-full rounded-lg" src="{{Vite::asset('resources\icon\chevron-right.svg')}}" />
                </div>
            </div>
        </div>
    </div>
</div>

{{-- explore --}}
<div class="h-auto w-screen bg-slate-50 p-36 flex sm:flex-col md:flex-row  justify-center gap-20 ">
    <div class="flex-wrap w-500 h-auto">
        <h3 class="text-left text-4xl text-text-black font-bold">Nikmati berbagai
            <span class="text-text-blue">pemandangan</span> yang indah</h3>
        <div class="mt-20">
            <img src="{{Vite::asset('resources\images\eksplore-1.png')}}">
        </div>
    </div>
    <div class="flex-wrap h-auto w-500 justify-item-end">
        <div class="max-w-[300px] h-auto mr-0 justify-items-end ml-auto ">
            <p class="text-text-gray text-right text-xl line-clamp-3">
                Dapatkan suasana pantai,
                perbukitan, sunrice, sunset dan
                sekaligus berkemah
            </p>
        </div>
        <div class="mt-20 justify-end flex">
            <img class="" src="{{Vite::asset('resources\images\eksplore-2.png')}}" alt="eksplor 2">
        </div>
    </div>
</div>

{{-- PENYEWAAN --}}
<div class="bg-gray-100 w-screen h-auto pt-20 flex flex-col px-28 pb-24 justify-center ">
    <div class="flex-col mb-14 grid justify-items-center">
        <div class="h-auto w-500 justify-self-center flex">
            <h2 class="font-bold text-4xl text-center text-text-black leading-snug">Kami menyediakan <span class="text-text-blue">paket</span> untuk berkemah</h2>
        </div>
        <div class="w-500">
            <h3 class="text-text-gray text-xl text-center">
                Kamu tidak perlu bingung untuk memulai berkemah
                kami menyediakan berbagai kebutuhanya
            </h3>
        </div>
    </div>
    <div class="flex gap-20 overflow-x-auto h-auto">
        @for($i = 0; $i < 6; $i++) <div class="w-80 h-750 flex-none bg-white">
            <img class="w-80 mx-0 " src="{{Vite::asset('resources\images\paket-1.png')}}" alt="">
            <div class="mt-9 mx-7 pb-7 grid justify-items-center border-b-2 border-text-gray">
                <p class="font-bold text-xl text-text-black">Standar 2</p>
                <p class="text-xl text-text-blue">RP. 115.000</p>
            </div>
            <div class="ml-6 mt-9">
                <ul class="">
                    @php
                    $c = 0;
                    @endphp
                    @while($c < 5) <li class="inline">
                        <p><img class="inline" src="{{Vite::asset('resources\icon\check-circle.svg')}}" alt=""> alksdfh</p>
                        </li>
                        @php($c++)
                        @endwhile
                        <li class="inline">
                            <p><img class="inline" src="{{Vite::asset('resources\icon\check-circle.svg')}}" alt=""> alksdfh</p>
                        </li>
                        <li class="inline">
                            <p><img class="inline" src="{{Vite::asset('resources\icon\check-circle.svg')}}" alt=""> alksdfh</p>
                        </li>
                        <li class="inline">
                            <p><img class="inline" src="{{Vite::asset('resources\icon\check-circle.svg')}}" alt=""> alksdfh</p>
                        </li>
                </ul>
            </div>

            <div class="mt-9 mx-6 mb-10 w-auto h-12 rounded-md">
                <button class="bg-text-blue w-full h-full text-white rounded">
                    Selengkapnya
                </button>

            </div>
    </div>


    @endfor
</div>
</div>

{{-- BERITA --}}
<div class="bg-white w-screen h-fit flex flex-col">
    <div class="grid justify-items-center mt-24 mx-80">
        <h2 class="text-text-black font-bold text-4xl">Berita terbaru dari <span class="text-text-blue">Muara Mbaduk</span></h2>
    </div>
    <div class="flex justify-center gap-24 mt-16">
        <div class="card h-500 w-96  shadow rounded">
            <img class="rounded-t" src="{{Vite::asset('resources\images\berita1.png')}}" alt="">
            <div class="flex flex-col mx-5">
                <div class="date mt-4">
                    <p class="date text-text-gray text-base text-left">29 Desember 2022</p>
                </div>
                <div class="title h-20 flex-none">
                    <p class="text-left font-bold text-text-black text-xl line-clamp-2" style="">Cara Seru Habiskan Akhir Tahun, Wisata
                        Camping Ciamik di Banyuwangi Yuk!</p>
                </div>
                <div class="sumary">
                    <p class=" text-base text-text-gray text-left line-clamp-2">Banyuwangi, sebuah kota di ujung timur Pulau Jawa, terkenal dengan keindahan alamnya yang memukau. Dari pantai-pantai eksotis hingga wisata alam pegunungan yang menakjubkan, Banyuwangi menawarkan pengalaman wisata yang tak terlupakan.</p>
                </div>
            </div>

        </div>
        <div class="card h-500 w-96 shadow rounded">
            <img class="rounded-t" src="{{Vite::asset('resources\images\berita2.png')}}" alt="">
            <div class="flex flex-col mx-5">
                <div class="date mt-4">
                    <p class="date text-text-gray text-base text-left">29 Desember 2022</p>
                </div>
                <div class="title h-20 flex-none">
                    <p class="text-left font-bold text-text-black text-xl line-clamp-2" style="">Cara Seru Habiskan Akhir Tahun, Wisata
                        Camping Ciamik di Banyuwangi Yuk!</p>
                </div>
                <div class="sumary">
                    <p class=" text-base text-text-gray text-left line-clamp-2">Banyuwangi, sebuah kota di ujung timur Pulau Jawa, terkenal dengan keindahan alamnya yang memukau. Dari pantai-pantai eksotis hingga wisata alam pegunungan yang menakjubkan, Banyuwangi menawarkan pengalaman wisata yang tak terlupakan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-12 mx-[512px] bg-text-blue flex-none rounded text-center px-7 py-4 mb-24">
        <button class="text-text-white text-xl  font-bold">Muat Lebih Banyak</button>
    </div>
</div>

{{-- PENGUNJUNG --}}
<div class="w-scree h-auto  py-44 px-32 bg-gray-100 ">
    <div class="flex justify-center gap-36">
        <div class="basis-1/2">
            <div class="flex flex-col ">
                <div>
                    <h2 class="text-left font-bold text-4xl text-text-black">Kata <span class="text-text-blue">mereka</span> yang telah
                        berkunjung</h2>
                </div>
                <div class="mt-16">
                    <p class="text-xl text-text-gray text-left ">Saya benar-benar menikmati perjalanan saya ke
                        Muara Mbaduk, dan saya sangat  merekomendasikan
                        tempat ini untuk semua orang yang mencari
                        pengalaman wisata yang berbeda dan menarik di
                        Banyuwangi.</p>
                </div>
                <div class="mt-4">
                    <p class="text-xl font-bold text-text-black"><img class="inline mr-1" src="{{Vite::asset('resources\icon\Rectangle.svg')}}" alt="">Indah Ratnasari</p>
                </div>
                
            </div>
        </div>
        <div class="rounded basis-1/2 flex justify-end">
            <img class="rounded" src="{{Vite::asset('resources\images\kata-mereka1.png')}}" alt="">
        </div>
    </div>
    <div class="flex gap-2 justify-self-end">
        <div class="rounded-full w-9 h-9 bg-text-blue grid place-items-center opacity-50">
            <img class="mx-auto my-auto" src="{{Vite::asset('resources\icon\chevron-left.svg')}}" alt="">
        </div>
        <div class="rounded-full w-9 h-9 bg-text-blue grid place-items-center">
            <img class="mx-auto my-auto" src="{{Vite::asset('resources\icon\chevron-right.svg')}}" alt="">
        </div>
    </div>
</div>

{{-- LETS GO --}}
<div class="bg-white p-28 w-screen h-[528px]">
    <div class="flex justify-center">
        <div class="bg-text-blue w-full h-auto px-64 py-12 flex flex-col rounded">
            <div>
                <h2 class="text-4xl text-text-white font-bold text-center">Sekarang giliran kamu</h2>
            </div>
            <div class="mt-1">
                <p class="text-2xl text-text-white text-center">untuk merasakan pengalaman wisata alam
                    yang tak terlupakan di Muara Mbaduk</p>
            </div>
            <div class="inline-flex space-x-1.5 hover:bg-blue-800 hover:cursor-pointer items-center justify-center w-auto h-14 px-6 pt-3.5 pb-3 bg-blue-900 rounded mt-12">
                <p class="text-xl font-bold text-white">Pesan Sekarang</p>
                <img class="w-6 h-6 rounded-lg" src="{{Vite::asset('resources\icon\chevron-right.svg')}}"/>
            </div>
        </div>
    </div>
</div>

@endsection
