@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Harga Ticket</h1>
</x-parts.header>

<main class="container p-24">
    <nav class="mt-16 flex w-full justify-center">
        <button onclick="showDetail(this)">
            <div class="bg-text-gray px-36 py-6">
                <p class="text-white font-bold text-xl">Wisatawan Pengunjung</p>
            </div>
        </button>
        <button onclick="showIntruction(this)">
            <div class="bg-text-blue px-36 py-6">
                <p class="text-white font-bold text-xl">Kendaraan</p>
            </div>
        </button>
    </nav>
    <div class="my-16">
        <div id="Instruksi" class="flex justify-between">

            <div>
                <h2>Tanpa Berkemah</h2>
                <p class="mt-6 text-xl text-text-black text">Hari Kerja - <span>Rp. 5000</span></p>
                <p class="mt-6 text-xl text-text-black text">Hari libur - <span>Rp. 5000</span></p>
            </div>

            <div>
                <h2>Tanpa Berkemah</h2>
                <p class="mt-6 text-xl text-text-black text">Hari Kerja - <span>Rp. 5000</span></p>
                <p class="mt-6 text-xl text-text-black text">Hari libur - <span>Rp. 5000</span></p>
            </div>

        </div>
        <div id="detail" hidden>
            <div class="flex justify-between">
                <div>
                    <h3 class="text-text-black text-xl font-bold">Pemesan</h3>
                    <ul class="mt-4 text-xl">
                        <li>{{$profil->fullname}}</li>
                        <li>{{$profil->email}}</li>
                    </ul>
                </div>
                <div class="text-right">
                    <h3 class="text-text-black text-xl font-bold">Tanggal Kunjungan</h3>
                    <p class="mt-4 text-xl">{{$data->date}}</p>
                    <p class="  px-8 py-1 rounded text-text-white">{{$data->status}}</p>
                </div>
            </div>
            <section class="mt-16">
                <h3 class="text-xl font-bold text-text-black">Rincian</h3>
                @foreach($data->tickets as $key => $value)
                @if($value->category == 'tourist')
                <div class="flex mt-8 justify-between py-9 border-b-2">
                    <div class="flex space-x-5">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="grid place-items-center">
                            <p class="text-text-black">Pengunjung/Wisatawan</p>
                        </div>
                    </div>
                    <p class="text-xl text-text-black">Rp {{$value->price}}</p>
                </div>
                @else
                <div class="flex mt-8 justify-between py-9 border-b-2">
                    <div class="flex space-x-5">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="grid place-items-center">
                            <p class="text-text-black">{{$value->category}}</p>
                        </div>
                    </div>
                    <p class="text-xl text-text-black">Rp {{$value->price}}</p>
                </div>
                @endif
                @endforeach

            </section>
        </div>
    </div>
</main>
@endsection
