@extends('layouts.landing.app')
@section('conten')
<div class="inline-flex items-center justify-center w-full bg-white" style=" height: 832px;">
    <div class="inline-flex flex-col items-center justify-end px-24 bg-black bg-no-repeat bg-cover bg-center bg-opacity-40 w-full" style=" height: 832px; background-image: url('{{Vite::asset('resources/images/header-image.png')}}')">
        <div class=" inline-flex space-x-96 items-center justify-end py-5 pl-28 pr-24" style="width: 1280px; height: 100px;">
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
<div class="h-screen w-full bg-slate-50"></div>
@endsection
