@extends('layouts.user.app')
@section('conten')

{{-- header --}}
<div class="w-screen h-screen bg-no-repeat bg-cover" style="background-image: url('{{asset('resources/images/header-image.png')}}')">
    <x-parts.navbar/>
    <div class="pt-40 pl-28">
        <h1 class="text-xl font-medium text-text-white ">Selamat Datang Di Muara Mbaduk</h1>
        <h2 class="font-bold text-left text-text-white text-5xl max-w-lg mt-1 leading-snug">Nikmati Liburan yang
            Berbeda dengan
            Berkemah</h2>
        <h3 class="text-base text-text-white font-extralight max-w-md mt-2">Muara Mbaduk adalah kawasan wisata alam yang
            menyajikan pantai, perbukitan hingga tempat berkemah </h3>
        <div class="w-1/5 flex bg-text-blue max-w-xs mt-14 justify-between">
            <div class="bg-text-blue p-4 flex">
                <p class="uppercase font-bold text-text-white">pesan sekarang</p>
                
            </div>
            <div class=" w-fit bg-blue-800 flex px-3 py-4">
            <img src="{{asset('resources\icon\chevron-right.svg')}}" alt="">
            </div>
        </div>
    </div>
</div>


{{-- explore --}}
<div id="explore" class="h-auto w-screen bg-slate-50 p-36 flex sm:flex-col md:flex-row  justify-center gap-20 ">
    <div class="flex-wrap w-500 h-auto">
        <h3 class="text-left text-4xl text-text-black font-bold">Nikmati berbagai
            <span class="text-text-blue">pemandangan</span> yang indah</h3>
        <div class="mt-20">
            <img src="{{asset('resources\images\eksplore-1.png')}}">
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
            <img class="" src="{{asset('resources\images\eksplore-2.png')}}" alt="eksplor 2">
        </div>
    </div>
</div>

{{-- PENYEWAAN --}}
<div class="bg-gray-100 p-28">
    <div class="flex gap-20  overflow-x-auto h-auto">
        @foreach($packet as $item)
        <x-cards.packet packet-id="{{$item['id']}}" packet-name="{{$item['name']}}" packet-price="{{$item['price']}}" packet-img="{{$item['img']}}">
            <ul>
                @foreach($item['list'] as $list)
                    <li>{{$list}}</li>
                @endforeach
            </ul>
        </x-cards.packet>
        @endforeach
    </div>
    <div class="my-24 mx-28 flex justify-around border border-text-gray rounded py-14">
        <div >
            <p class="text-xl font-bold text-left">Belum menemukan paket yang sesuai dengan kebutuhanmu ?</p>
            <p>Tenang, kamu bisa membuat pesanan paket spesial sendiri</p>
        </div>
        <a href="">
            <div class="hover:cursor-pointer hover:bg-text-darkblue py-4 px-12 bg-text-blue rounded">
                <p class="text-text-white font-bold text-center">Buat Paket <img class="inline" src="{{asset('resources\icon\chevron-right.svg')}}" /></p>
            </div>
        </a>
    </div>
</div>

{{-- BERITA --}}
<div class="bg-white w-screen h-fit flex flex-col">
    <div class="grid justify-items-center mt-24 mx-80">
        <h2 class="text-text-black font-bold text-4xl">Berita terbaru dari <span class="text-text-blue">Muara Mbaduk</span></h2>
    </div>
    <div class="flex justify-center gap-24 mt-16">
        <div class="card h-500 w-96  shadow rounded">
            <img class="rounded-t" src="{{asset('resources\images\berita1.png')}}" alt="">
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
            <img class="rounded-t" src="{{asset('resources\images\berita2.png')}}" alt="">
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
    <div class="mt-12 mx-[512px] bg-text-blue flex-none rounded mb-24">
        <a href="{{route('news.show')}}"><button class="text-text-white w-full text-xl text-center font-bold px-7 py-4">Muat Lebih Banyak</button></a>
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
                        Muara Mbaduk, dan saya sangat merekomendasikan
                        tempat ini untuk semua orang yang mencari
                        pengalaman wisata yang berbeda dan menarik di
                        Banyuwangi.</p>
                </div>
                <div class="mt-4">
                    <p class="text-xl font-bold text-text-black"><img class="inline mr-1" src="{{asset('resources\icon\Rectangle.svg')}}" alt="">Indah Ratnasari</p>
                </div>

            </div>
        </div>
        <div class="rounded basis-1/2 flex justify-end">
            <img class="rounded" src="{{asset('resources\images\kata-mereka1.png')}}" alt="">
        </div>
    </div>
    <div class="flex gap-2 justify-self-end">
        <div class="rounded-full w-9 h-9 bg-text-blue grid place-items-center opacity-50">
            <img class="mx-auto my-auto" src="{{asset('resources\icon\chevron-left.svg')}}" alt="">
        </div>
        <div class="rounded-full w-9 h-9 bg-text-blue grid place-items-center">
            <img class="mx-auto my-auto" src="{{asset('resources\icon\chevron-right.svg')}}" alt="">
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
                <img class="w-6 h-6 rounded-lg" src="{{asset('resources\icon\chevron-right.svg')}}" />
            </div>
        </div>
    </div>
</div>

@endsection
