@extends('layouts.user.app')
@section('conten')
<x-parts.header>
  <h1>Tanggal Kunjungan</h1>
</x-parts.header>
<div class="h-auto w-screen bg-white flex p-28 justify-center flex-col">
  <div class="text-left">
    <h2 class="text-text-black font-bold text-xl">Tanggal Berkunjung</h2>
    <h3 class="text-text-gray text-base mt-2">Masukan Tanggal dimana kamu akan berkunjung ke muarambaduk</h3>
    <div class="border-2 border-text-gray rounded flex mt-5">
        <svg id="datePickerIcon" width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="grow-0 shrink-0 m-4">
            <path d="M27.7083 5.8335H7.29167C5.68084 5.8335 4.375 7.13933 4.375 8.75016V29.1668C4.375 30.7777 5.68084 32.0835 7.29167 32.0835H27.7083C29.3192 32.0835 30.625 30.7777 30.625 29.1668V8.75016C30.625 7.13933 29.3192 5.8335 27.7083 5.8335Z" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M23.3333 2.9165V8.74984" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M11.6667 2.9165V8.74984" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M4.375 14.5835H30.625" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class=" flex felx-col justify-center h-14 w-full">
            <input id="datepicker" name="date" class="text-text-gray text-left h-full w-full text-xl " type="text" required>
        </div>
    </div>
    <h2 class="text-text-black font-bold text-xl mt-5">Apakah kamu akan melakukan kegiatan camping/berkemah?</h2>
    <select id="pertanyaan" name="pertanyaan" class="px-3 border-2 border-text-gray rounded mt-5 flex felx-col justify-center h-14 w-full text-text-gray font-medium">
      <option value="ya">Ya, Saya akan melakukan camping</option>
      <option value="tidak">Tidak, Saya tidak melakukan camping</option>
    </select>
    <button class="h-14 w-full bg-text-blue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-12">
      Cek tiket dan harga
    </button>
  </div>
  
</div>

@section('js')
<script>
     var currentDate = new Date();

// Get the current date components
var year = currentDate.getFullYear();
var month = currentDate.getMonth() + 1; // Month is zero-indexed, so add 1 to get the correct month
var day = currentDate.getDate();

$(function() {
    $("#datepicker").datepicker({
        minDate: currentDate
        , dateFormat: "dd MM yy"
    });
});
</script>
@endsection
  @endsection
