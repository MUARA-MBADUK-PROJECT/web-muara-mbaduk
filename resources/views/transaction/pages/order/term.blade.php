@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    Syarat dan Ketentuan
</x-parts.header>
<div class="flex flex-col justify-center items-center py-24 px-28">
    <img src="{{Vite::asset('resources\images\logo-hitam.png')}}" class="mx-auto w-80 h-40">
    <h1 class="mt-20 flex flex-col text-center text-text-black font-bold text-2xl">
        Syarat dan Ketentuan
    </h1>
    <ul class="mt-10 ml-64 mr-44 text-lg list-decimal">
        <li class=" mt-1">
            Tetap menjaga kesehatan dan mengikuti protokol kesehatan
        </li>
        <li class="mt-1">
            Pengunjung dalam keadaan siap secara fisik dan mental.
        </li>
        <li class="mt-1">
            Tiket tidak termasuk asuransi, semua pengunjung disarankan untuk
            memiliki asuransi kecelakaan pribadi
        </li>
        <li class="mt-1">
            Tiket atau pemesaan yang sudah dibayar tidak dapat dirubah hari
            berkunjungnya serta tidak dapat dibatalkan dan uang tidak dapat
            dikembalikan.
        </li>
        <li class="mt-1">
            Dengan membaca dan check list berarti anda setuju dengan syarat
            dan kondisi 
        </li>
        <form action="{{route('order.term.accept')}}" method="POST">
            @csrf
            <div class="flex items-center -ml-5 mt-4">
                <input type="checkbox" name="accept_term" id="check" class="mr-2">
                <label for="check" class="text-black">Ya, Setuju</label>
            </div>
            <button type="submit" class="w-full -ml-5 bg-text-blue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                Berikutnya
            </button>
        </form>
    </ul>
</div>
@endsection
