@extends('layouts.user.app')
@section('conten')
    <x-parts.header>
        <h1>Paket Camping</h1>
        <h2 class="font-mediun text-2xl">Kamu dapat memilih paket camping sesuai kebutuhanmu</h2>
    </x-parts.header>
    <div class="p-28">
        <div class="flex gap-20  overflow-x-auto h-auto">
            @foreach($data as $item)
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
                    <p class="text-text-white font-bold text-center">Buat Paket <img class="inline" src="{{Vite::asset('resources\icon\chevron-right.svg')}}" /></p>
                </div>
            </a>
        </div>
    </div>
@endsection
