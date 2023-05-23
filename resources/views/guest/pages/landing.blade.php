@php
use Carbon\Carbon;
@endphp
@extends('layouts.user.app')
@section('conten')

{{-- header --}}
<div class="w-screen h-screen bg-no-repeat bg-cover" style="background-image: url('{{asset('resources/images/header-image.png')}}')">
    <x-parts.navbar />
    <div class="pt-40 pl-28">
        <h1 class="text-xl font-medium text-text-white ">Selamat Datang Di Muara Mbaduk</h1>
        <h2 class="font-bold text-left text-text-white text-5xl max-w-lg mt-1 leading-snug">Nikmati Liburan yang
            Berbeda dengan
            Berkemah</h2>
        <h3 class="text-base text-text-white font-extralight max-w-md mt-2">Muara Mbaduk adalah kawasan wisata alam yang
            menyajikan pantai, perbukitan hingga tempat berkemah </h3>
        <a href="{{route('packet.list')}}">
            <div class="w-1/5 flex bg-text-blue max-w-xs mt-14 justify-between">
                <div class="bg-text-blue p-4 flex">
                    <p class="uppercase font-bold text-text-white">pesan sekarang</p>

                </div>
                <div class=" w-fit bg-blue-800 flex px-3 py-4">
                    <img src="{{asset('resources\icon\chevron-right.svg')}}" alt="">
                </div>
            </div>
        </a>
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
        @foreach($packets as $package)
        <x-cards.packet packet-id="{{$package->id}}" packet-name="{{$package->title}}" slug="{{$package->slug}}" packet-price="{{$package->price}}" packet-img="{{$package->image}}">
            <ul>
                @foreach($package->products as $product)
                <li>{{$product->title}} {{$product->quantity}}</li>
                @endforeach
            </ul>
        </x-cards.packet>
        @endforeach
    </div>
    <div class="my-24 mx-28 flex justify-around border border-text-gray rounded py-14">
        <div>
            <p class="text-xl font-bold text-left">Belum menemukan paket yang sesuai dengan kebutuhanmu ?</p>
            <p>Tenang, kamu bisa membuat pesanan paket spesial sendiri</p>
        </div>
        <a href="{{route('packet.custom')}}">
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

            @for($i = 0; $i < 1; $i++) <img class="rounded-t" src="{{$news[$i]->thumbnail}}" alt="">
                <div class="flex flex-col mx-5">
                    <div class="date mt-4">
                        <p class="date text-text-gray text-base text-left">@php

                            $dateString = $news[$i]->created_at;
                            $date = Carbon::parse($dateString)->format('d M Y');
                            echo $date;

                            @endphp</p>
                    </div>
                    <div class="title h-20 flex-none">
                        <p class="text-left font-bold text-text-black text-xl line-clamp-2" style="">{{$news[$i]->title}}</p>
                    </div>
                    <div class="sumary">
                        <p class=" text-base text-text-gray text-left line-clamp-2">{{$news[$i]->body}}</p>
                    </div>
                </div>
                @endfor

        </div>

    </div>
    <div class="mt-12 mx-[512px] bg-text-blue flex-none rounded mb-24">
        <a href="{{route('news.show')}}"><button class="text-text-white w-full text-xl text-center font-bold px-7 py-4">Muat Lebih Banyak</button></a>
    </div>
</div>





<div id="controls-carousel" class="relative  w-scree h-auto  py-20 bg-gray-100" data-carousel="static">
    <div class="mb-9 ml-6">
        <h2 class="text-left font-bold text-4xl text-text-black">Kata <span class="text-text-blue">mereka</span> yang telah
            berkunjung</h2>
    </div>
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
       
        @for($i = 0; $i < count($testimonie); $i++)
            <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="flex justify-center gap-36 px-16">
                <div class="basis-1/2">
                    <div class="flex flex-col ">
                        
                        <div class="mt-16">
                            <p class="text-xl text-text-gray text-left ">{{$testimonie[$i]->description}}</p>
                        </div>
                        <div class="mt-4">
                            <p class="text-xl font-bold text-text-black"><img class="inline mr-1" src="{{asset('resources\icon\Rectangle.svg')}}" alt="">{{$testimonie[$i]->fullname}}</p>
                        </div>
        
                    </div>
                </div>
                <div class="rounded basis-1/2 flex justify-end">
                    <img class="rounded" src="{{$testimonie[$i]->images}}" alt="">
                </div>
            </div>
        </div>
        @endfor
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-text-black dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-text-black dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
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
            <a href="{{route('packet.list')}}">
                <button class="inline-flex space-x-1.5 hover:bg-blue-800 hover:cursor-pointer items-center justify-center w-full h-14 px-6 pt-3.5 pb-3 bg-blue-900 rounded mt-12">
                    <p class="text-xl font-bold text-white">Pesan Sekarang</p>
                    <img class="w-6 h-6 rounded-lg" src="{{asset('resources\icon\chevron-right.svg')}}" />
                </button>
            </a>
        </div>
    </div>
</div>

@endsection
