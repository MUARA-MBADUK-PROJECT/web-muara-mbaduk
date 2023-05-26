@extends('layouts.user.app')
@section('conten')
    <x-parts.header>
        <h1>Paket Camping</h1>
        <h2 class="font-mediun text-2xl">Kamu dapat memilih paket camping sesuai kebutuhanmu</h2>
    </x-parts.header>
    <main class="py-28 px-[5%]">
        @include('transaction.pages.packages.list')
        {{-- {{dd(count($data))}} --}}
        <section class="my-24  flex justify-around w-full py-14 flex-col flex-wrap justify-items-center gap-5">
            <div class="">
                <p class="text-xl font-bold text-center">Belum menemukan paket yang sesuai dengan kebutuhanmu ?</p>
                <p class="text-center ">Tenang, kamu bisa membuat pesanan paket spesial sendiri</p>
            </div>
            <div class="flex justify-center w-full">
                <a href="{{route('packet.custom')}}">
                    <div class="hover:cursor-pointer hover:bg-text-darkblue w-fit py-4 px-12 bg-text-blue rounded">
                        <p class="text-text-white font-bold text-center">Buat Paket <img class="inline" src="{{asset('resources\icon\chevron-right.svg')}}" /></p>
                    </div>
                </a>
            </div>
        </section>
    </main>
@endsection
