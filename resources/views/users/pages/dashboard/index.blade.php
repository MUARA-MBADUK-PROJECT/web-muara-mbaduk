@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Hallo, {{$profil->fullname}}</h1>
    </x-header>


    <div class="container">
        @include('users.pages.dashboard.nav')

        <div class="mt-14 mb-28 border rounded-sm border-gray-400 p-5">
            <h1 class="text-center font-bold text-2xl">Informasi Terbaru</h1>
            <ul class="mt-5 text-lg list-disc">
                <li class=" mt-1">
                    Web ini untuk fasilitas pemesanan tiket masuk kawasan wisata alam Muara Mbaduk.
                </li>
                <li class=" mt-1">
                    Booking tiket wajib secara online, melalui web ini, tunjukkan kode booking kepada petugas
                    dan lakukan pembayaran dengan tranfer atau manual untuk dapatkan e-ticket.
                </li>
                <li>
                    Untuk wisatawan atau pengunjung yang akan berkemah siapkan KTP/Kartu Identitas lain
                    untuk mengisi pemesanan, dan Membawa KTP/Kartu Identitas untuk Check in kawasan,
                    Tanpa dokumen itu, berpotensi ditolak masuk kawasan.
                </li>
                <li class=" mt-1">
                    Penjelasan rinci silahkan membaca aturan di menu FAQ (Frequently Asked Questions).
                    Mohon kiranya dapat mengisi kuisioner melalui tautan
                    <br>
                    <a class="text-blue-500" href="#">
                        http://muarambaduk.info/kuisioner<br>
                    </a>
                    untuk peningkatan pelayanan kami

                </li>
        </div>
    </div>


    @endsection
