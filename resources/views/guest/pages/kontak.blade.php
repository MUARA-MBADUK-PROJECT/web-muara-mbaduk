@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1 class="text-text-white text-4xl font-bold">Kontak</h1>
</x-parts.header>
<div class="py-32 flex justify-evenly px-24">
    <div class="flex flex-col ">
        <h2 class="text-4xl font-bold text-left">Hubungin Kami</h2>
        <p class="mt-7 text-text-gray text-xl">
            Muara Mbaduk adalah destinasi wisata baru di Kabupaten
            Banyuwangi. Destinasi favorit untuk berkemah, bisa
            menampung hingga 1000 orang.
        </p>
        <div class="mt-12 flex gap-7">
            <div class="p-6 w-fit h-fit bg-text-blue rounded">
                <img src="{{asset('resources\icon\map-pin.svg')}}" alt="">
            </div>
            <div class="text-text-gray text-left flex flex-col justify-center">
                <p class="">
                    Jln.Sukamade No.234, Dsn. Krajan Desa Sarongan
                </p>
                <p>
                    Kec. Pesanggaran , Kab. Banyuwangi 
                </p>
            </div>
        </div>
        <div class="mt-12 flex gap-7">
            <div class="p-6 w-fit h-fit bg-text-blue rounded">
                <img src="{{asset('resources\icon\phone-call.svg')}}" alt="">
            </div>
            <div class="text-text-gray text-left flex flex-col justify-center">
                <p class="">
                    0853 3334 2050
                </p>
            </div>
        </div>
        <div class="mt-12 flex gap-7">
            <div class="p-6 w-fit h-fit bg-text-blue rounded">
                <img src="{{asset('resources\icon\mail-white.svg')}}" alt="">
            </div>
            <div class="text-text-gray text-left flex flex-col justify-center">
                <p class="">
                    admin@muarambaduk.info
                </p>
            </div>
        </div>
    </div>
    <div class="p-7  shadow-lg rounded w-500">
        <form action="{{route('contact.send')}}" method="POST">
            @method('post')
        @csrf
        <div class="flex flex-col justify-start gap-2 mt-6">
            <label for="name" class="text-xl">Nama Lengkap *</label>
            <input type="text" id="name" name="name" placeholder="Ketikan Nama Lengkap" required class="border px-5 text-xl input border-text-gray rounded h-14">
        </div>
        <div class="flex flex-col justify-start gap-2 mt-6">
            <label for="email" class="text-xl">Email *</label>
            <input type="email" id="email" name="email" placeholder="Ketikan Nama Lengkap" required class=" border px-5 text-xl input border-text-gray rounded h-14">
        </div>
        <div class="flex flex-col justify-start gap-2 mt-6">
            <label for="massage" class="text-xl">Nama Lengkap *</label>
            <textarea name="massage" id="massage" cols="30" placeholder="Masukan Pesan" class="border px-5 text-xl input border-text-gray rounded h-28" required rows="10"></textarea>
        </div>
        <div class=" w-auto  text-text-white bg-text-blue text-xl font-bold mt-10 rounded"><button type="submit" class="text-center w-full py-3">Kirim Pesan</button></div>
        
        </form>
    </div>
</div>
@endsection
