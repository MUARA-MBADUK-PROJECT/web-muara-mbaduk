@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Hallo</h1>
</x-header>
 

    <div class="container">
        <div class="my-28 mx-24">
            <div class="flex flex-row justify-between">
                <div class="border rounded-sm border-gray-400 cursor-pointer hover:shadow-md">
                    <div class="p-5 flex flex-col items-center text-center">
                        <svg class="mt-2" width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M48.8333 37.3333C51.3333 37.3333 53.5332 35.9667 54.6666 33.9L66.5999 12.2667C67.8332 10.0667 66.2333 7.33334 63.6999 7.33334H14.3666L11.2333 0.666672H0.333252V7.33334H6.99992L18.9999 32.6333L14.4999 40.7667C12.0666 45.2333 15.2666 50.6667 20.3333 50.6667H60.3333V44H20.3333L23.9999 37.3333H48.8333ZM17.5333 14H58.0332L48.8333 30.6667H25.4333L17.5333 14ZM20.3333 54C16.6666 54 13.6999 57 13.6999 60.6667C13.6999 64.3333 16.6666 67.3333 20.3333 67.3333C23.9999 67.3333 26.9999 64.3333 26.9999 60.6667C26.9999 57 23.9999 54 20.3333 54ZM53.6666 54C49.9999 54 47.0333 57 47.0333 60.6667C47.0333 64.3333 49.9999 67.3333 53.6666 67.3333C57.3333 67.3333 60.3333 64.3333 60.3333 60.6667C60.3333 57 57.3333 54 53.6666 54Z" fill="#333333"/>
                        </svg>
                        <p class="text-slate-400 mt-6">Pemesanan Tiket</p>
                    </div>
                </div>
    
                <div class="border rounded-sm border-gray-400 cursor-pointer hover:shadow-md">
                    <div class="p-5 flex flex-col items-center text-center">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_44_52)">
                            <path d="M23.3333 50H46.6667V56.6667H23.3333V50ZM23.3333 36.6667H56.6667V43.3333H23.3333V36.6667ZM23.3333 23.3333H56.6667V30H23.3333V23.3333ZM63.3333 9.99999H49.4C48 6.13333 44.3333 3.33333 40 3.33333C35.6667 3.33333 32 6.13333 30.6 9.99999H16.6667C16.2 9.99999 15.7667 10.0333 15.3333 10.1333C14.0333 10.4 12.8667 11.0667 11.9667 11.9667C11.3667 12.5667 10.8667 13.3 10.5333 14.1C10.2 14.8667 10 15.7333 10 16.6667V63.3333C10 64.2333 10.2 65.1333 10.5333 65.9333C10.8667 66.7333 11.3667 67.4333 11.9667 68.0667C12.8667 68.9667 14.0333 69.6333 15.3333 69.9C15.7667 69.9667 16.2 70 16.6667 70H63.3333C67 70 70 67 70 63.3333V16.6667C70 13 67 9.99999 63.3333 9.99999ZM40 9.16666C41.3667 9.16666 42.5 10.3 42.5 11.6667C42.5 13.0333 41.3667 14.1667 40 14.1667C38.6333 14.1667 37.5 13.0333 37.5 11.6667C37.5 10.3 38.6333 9.16666 40 9.16666ZM63.3333 63.3333H16.6667V16.6667H63.3333V63.3333Z" fill="#333333"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_44_52">
                            <rect width="80" height="80" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        <p class="text-slate-400 mt-6">Riwayat Pemesanan</p>
                    </div>
                </div>
    
                <div class="border rounded-sm border-gray-400 cursor-pointer hover:shadow-md">
                    <div class="p-5 flex flex-col items-center text-center">
                        <svg width="68" height="54" viewBox="0 0 68 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.6667 43.6667H37.3334V40.3333H40.6667C42.5001 40.3333 44.0001 38.8333 44.0001 37V27C44.0001 25.1667 42.5001 23.6667 40.6667 23.6667H30.6667V20.3333H44.0001V13.6667H37.3334V10.3333H30.6667V13.6667H27.3334C25.5001 13.6667 24.0001 15.1667 24.0001 17V27C24.0001 28.8333 25.5001 30.3333 27.3334 30.3333H37.3334V33.6667H24.0001V40.3333H30.6667V43.6667ZM60.6667 0.333328H7.33341C3.63341 0.333328 0.700081 3.29999 0.700081 6.99999L0.666748 47C0.666748 50.7 3.63341 53.6667 7.33341 53.6667H60.6667C64.3667 53.6667 67.3334 50.7 67.3334 47V6.99999C67.3334 3.29999 64.3667 0.333328 60.6667 0.333328ZM60.6667 47H7.33341V6.99999H60.6667V47Z" fill="#333333"/>
                            </svg>
                            
                        <p class="text-slate-400 mt-6">Harga Tiket</p>
                    </div>
                </div>
    
                <div class="border rounded-sm border-gray-400 cursor-pointer hover:shadow-md">
                    <div class="p-5 flex flex-col items-center text-center">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_44_61)">
                            <path d="M50.0001 13.3333V36.6667H17.2334L15.2667 38.6333L13.3334 40.5667V13.3333H50.0001ZM53.3334 6.66667H10.0001C8.16675 6.66667 6.66675 8.16667 6.66675 10V56.6667L20.0001 43.3333H53.3334C55.1667 43.3333 56.6667 41.8333 56.6667 40V10C56.6667 8.16667 55.1667 6.66667 53.3334 6.66667ZM70.0001 20H63.3334V50H20.0001V56.6667C20.0001 58.5 21.5001 60 23.3334 60H60.0001L73.3334 73.3333V23.3333C73.3334 21.5 71.8334 20 70.0001 20Z" fill="#333333"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_44_61">
                            <rect width="80" height="80" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            
                        <p class="text-slate-400 mt-6">FAQ</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-14 border rounded-sm border-gray-400 p-5">
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
    </div>


@endsection
