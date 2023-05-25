@extends('layouts.user.app')
@section('conten')
    <x-parts.header>
        <h1>Paket Camping</h1>
        <h2 class="font-mediun text-2xl">Kamu dapat memilih paket camping sesuai kebutuhanmu</h2>
    </x-parts.header>
    <main class="py-28 px-[5%]">
        {{-- {{dd(count($data))}} --}}
        <section class="flex gap-20 w-full justify-between {{count($data)<=3?'lg:justify-start xl:justify-start 2xl:justify-start':'lg:justify-center xl:justify-center 2xl:justify-center'}} snap-x snap-mandatory overflow-x-auto h-auto">
            @foreach($data as $package)
            <x-cards.packet packet-id="{{$package->id}}" packet-name="{{$package->title}}" slug="{{$package->slug}}" packet-price="{{$package->price}}" packet-img="{{$package->image}}">
                <ul>
                    @foreach($package->products as $product)
                    <li>{{$product->title}} {{$product->quantity}}</li>
                    @endforeach
                </ul>
            </x-cards.packet>
            @endforeach
        </section>
        <section class="my-24 mx-[10%] flex justify-around py-14 flex-col flex-wrap justify-items-center gap-5">
            <div >
                <p class="text-xl font-bold text-center md:text-center lg:text-left xl:text-left 2xl:text-left">Belum menemukan paket yang sesuai dengan kebutuhanmu ?</p>
                <p class="text-center md:text-center lg:text-left xl:text-left 2xl:text-left">Tenang, kamu bisa membuat pesanan paket spesial sendiri</p>
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
