<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/tailwind/styl.css">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <title>Muarambaduk</title>
</head>
<body>
    @yield('conten')

    {{-- footer --}}
    <div class="footer w-screen h-fit bg-footer pt-28 px-20 ">
        <div class="border-b-4 border-text-gray flex justify-between flex-wrap pb-20 ">
            <div class="flex flex-col max-w-xs ">
                <img class="shrink" src="{{Vite::asset('resources\images\logo-muara-mbaduk-foot.png')}}" alt="logo muara mbaduk">
                <p class="text-xl text-text-gray text-left ">Kawasan wisata alam yang
                    menyajikan pantai, perbukitan
                    hingga tempat berkemah</p>
                <p class="text-xl text-text-gray text-left mt-5">Telepon / Whatapps : </p>
                <p class="text-xl text-text-gray text-left ">0853 3334 2050</p>
                <div class="flex mt-6 gap-4">
                    <img src="{{Vite::asset('resources\icon\facebook.svg')}}" alt="">
                    <img src="{{Vite::asset('resources\icon\instagram.svg')}}" alt="">
                    <img src="{{Vite::asset('resources\icon\mail.svg')}}" alt="">
                </div>
            </div>
            <div class="">
                <h3 class="text-xl font-bold text-text-white">Paket Camping</h3>
                <ul class="mt-7">
                    <li class="text-text-gray text-xl my-2">standart</li>
                    <li class="text-text-gray text-xl my-2">standart</li>
                    <li class="text-text-gray text-xl my-2">standart</li>
                    <li class="text-text-gray text-xl my-2">standart</li>
                </ul>
            </div>
            <div class="">
                <h3 class="text-xl font-bold text-text-white">Bantuan</h3>
                <ul class="mt-7">
                    <li class="text-text-gray text-xl my-2">Kontak</li>
                    <li class="text-text-gray text-xl my-2">Tentang Kami</li>
                    <li class="text-text-gray text-xl my-2">Harga Tiket</li>
                    <li class="text-text-gray text-xl my-2">FAQ</li>
                    <a href="/policy"><li class="text-text-gray text-xl my-2">Syarat dan Ketentuan</li></a>
                    <li class="text-text-gray text-xl my-2">Kebijakan Prifasi</li>

                </ul>
            </div>

        </div>

        <div class="py-4 flex justify-between">
            <p class="text-text-gray">Copyright © 2023 muarambaduk.info </p>
            <p class="text-text-gray">Powered By DKODE Creative</p>

        </div>

    </div>

</body>
</html>
