{{-- header --}}
<div class=" h-fit w-full bg-no-repeat bg-cover bg-bottom pb-10" style="background-image: url('{{asset('resources/images/header-image.png')}}')">
    <x-parts.navbar />
    <div class="pt-10 md:pt-40 lg:pt-40 px-16">
        <h1 class="text-xl font-medium text-text-white font-sans">Selamat Datang Di Muara Mbaduk</h1>
        <h2 class="font-bold text-left text-text-white text-4xl max-w-lg mt-1 leading-snug">Nikmati Liburan yang
            Berbeda dengan
            Berkemah</h2>
        <h3 class="text-base text-text-white font-extralight max-w-md mt-2 .line-clamp-3">Muara Mbaduk adalah kawasan wisata alam yang
            menyajikan pantai, perbukitan hingga tempat berkemah </h3>
        <a href="{{route('packet.list')}}">
            <div class="w-1/5 flex bg-text-blue max-w-xs mt-14 justify-between">
                <div class="bg-text-blue p-4 flex">
                    <p class="uppercase font-bold text-text-white">pesan sekarang</p>

                </div>
                <div class=" w-fit bg-blue-800 flex px-3 py-4">
                    <img src="{{asset('resources\icon\chevron-right.svg')}}" alt="">
                </div>
            </div>
        </a>
    </div>
</div>