@extends('layouts.user.app')
@section('conten')
<div class="w-screen h-auto bg-no-repeat bg-cover" style="background-image: url('{{asset('resources/images/header-image.png')}}')">
    <div class="navbar w-full h-auto flex justify-between">
        <div class="logo h-auto w-auto my-6 ml-32">
            <img src="{{asset('resources\images\logo-muara-mbaduk.png')}}" alt="">
        </div>
        <div class="nav my-7 mr-28 flex">
            <ul class="flex justify-center space-x-14 my-auto hover:cursor-pointer">
                <li class="inline text-text-white my-auto">Beranda</li>
                <li class="inline text-text-white ">Eksplore</li>
                <li class="inline text-text-white ">Paket Camping</li>
                <li class="inline text-text-white ">Tentang</li>
            </ul>
            <button class="text-text-white  font-bold ml-14 px-5 bg-text-blue my-2 rounded hover:bg-blue-800">masuk</button>
        </div>
    </div>
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

@yield('isi')
@endsection