@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Pemesanan Tiket & Alat Camping</h1>
    <h2 class="font-medium text-2xl">Silakan pilih jenis tiket dan alat camping yang Anda inginkan</h2>
  </x-parts.header>
  <div class="h-auto w-screen bg-white p-36 flex justify-center flex-col">
    <div class="text-center">
      <img src="{{Vite::asset('resources\images\logo.png')}}" class="mx-auto">
      <p class="mt-4 text-text-black font-bold text-2xl">Harap masuk untuk memesan Tiket atau Paket Camping</p>
    </div>
    
  </div>
  
    @endsection
