@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Pemesanan Tiket & Alat Camping</h1>
    <h2 class="font-medium text-2xl">Silakan pilih jenis tiket dan alat camping yang Anda inginkan</h2>
</x-parts.header>
<div class="h-auto w-screen bg-white p-36 flex justify-center flex-col">
    <div class="text-center">
        <img src="{{asset('resources\images\logo.png')}}" class="mx-auto">
        <p class="mt-4 text-text-black font-bold text-2xl">Harap masuk untuk memesan Tiket atau Paket Camping</p>
        <div class="flex w-full justify-center mt-11">
            <a href="{{route('login.google.redirect')}}">
                <button class="px-4 py-2 border flex gap-2 border-slate-200 rounded-lg text-slate-700 hover:border-slate-400 hover:text-slate-900 hover:shadow transition duration-150">
                    <img class="w-6 h-6" src="https://www.svgrepo.com/show/475656/google-color.svg" loading="lazy" alt="google logo">
                    <span>Login with Google</span>
                </button>
            </a>
        </div>
    </div>



</div>

@section('js')

@endsection

@endsection
