@extends('layouts.user.app')
@section('conten')
    <x-parts.header>
        <h1>Paket Camping</h1>
        <h2 class="font-mediun text-2xl">Kamu dapat memilih paket camping sesuai kebutuhanmu</h2>
    </x-parts.header>
    <main class="p-28">
        <section class="flex gap-20  overflow-x-auto h-auto">
            @foreach($data as $item)
            <x-cards.packet packet-id="{{$item->id}}" packet-name="{{$item->title}}" packet-price="{{$item->price}}" packet-img="{{$item->image}}">
                <ul>
                    @foreach($item->products as $product)
                        <li>{{$product->title}} {{$product->quantity}}</li>
                    @endforeach
                </ul>
            </x-cards.packet>
            @endforeach
        </section>
        <section class="my-24 mx-28 flex justify-around border border-text-gray rounded py-14">
            <div >
                <p class="text-xl font-bold text-left">Belum menemukan paket yang sesuai dengan kebutuhanmu ?</p>
                <p>Tenang, kamu bisa membuat pesanan paket spesial sendiri</p>
            </div>
            <a href="{{route('packet.custom')}}">
                <div class="hover:cursor-pointer hover:bg-text-darkblue py-4 px-12 bg-text-blue rounded">
                    <p class="text-text-white font-bold text-center">Buat Paket <img class="inline" src="{{asset('resources\icon\chevron-right.svg')}}" /></p>
                </div>
            </a>
        </section>
    </main>
@endsection
