<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/tailwind/styl.css">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <title>Try Tailwind</title>
</head>
<body>
    @yield('conten')

    <div class="inline-flex flex-col space-y-4 items-start justify-end w-80 pb-8 bg-white rounded-lg">
        <img class="w-full h-64 rounded-lg" src="https://via.placeholder.com/307x265"/>
        <p class="text-xl font-bold text-center text-gray-900">STANDART 2</p>
        <p class="text-xl text-center text-blue-700">Rp. 115,000</p>
        <div class="w-5/6 h-0.5 border-black border-opacity-25"/>
        <div class="inline-flex space-x-3 items-center justify-end w-24 h-5">
            <img class="w-1/6 h-3/4 rounded-full" src="https://via.placeholder.com/15x15"/>
            <p class="text-xs text-center text-gray-800">Tendaki 2</p>
        </div>
        <div class="inline-flex space-x-3 items-center justify-end w-1/3 h-5">
            <img class="w-4 h-3/4 rounded-full" src="https://via.placeholder.com/15x15"/>
            <p class="text-xs text-center text-gray-800">Kursi Lipat 1</p>
        </div>
        <div class="inline-flex space-x-3 items-center justify-end w-20 h-5">
            <img class="w-4 h-3/4 rounded-full" src="https://via.placeholder.com/15x15"/>
            <p class="text-xs text-center text-gray-800">Matras 1</p>
        </div>
        <div class="inline-flex space-x-2.5 items-center justify-end w-32 h-5">
            <img class="w-4 h-3/4 rounded-full" src="https://via.placeholder.com/15x15"/>
            <p class="text-xs text-center text-gray-800">Lampu Tenda 1</p>
        </div>
        <div class="inline-flex space-x-2.5 items-center justify-end w-48 h-5">
            <img class="w-4 h-3/4 rounded-full" src="https://via.placeholder.com/15x15"/>
            <p class="text-xs text-center text-gray-800">Kompor dan Gas Kaleng 1</p>
        </div>
        <div class="inline-flex space-x-2.5 items-center justify-end w-1/5 h-5">
            <img class="w-1/4 h-3/4 rounded-full" src="https://via.placeholder.com/15x15"/>
            <p class="text-xs text-center text-gray-800">Panci</p>
        </div>
        <div class="inline-flex space-x-2 items-center justify-end w-20 h-5">
            <img class="w-1/6 h-3/4 rounded-full" src="https://via.placeholder.com/15x15"/>
            <p class="text-xs text-center text-gray-800">Cangkir 2</p>
        </div>
        <div class="inline-flex space-x-2.5 items-center justify-end w-28 h-5">
            <img class="w-4 h-3/4 rounded-full" src="https://via.placeholder.com/15x15"/>
            <p class="text-xs text-center text-gray-800">Sendok Garbu</p>
        </div>
        <div class="inline-flex items-center justify-center w-5/6 h-11 py-3 px-20 bg-blue-700 rounded">
            <p class="text-sm text-center text-white">Selengkapnya</p>
        </div>

    {{-- footer --}}
    <div class="max-w-screen-2xl mx-auto w-screen pt-28 px-8 p-10" style="background-color: #333333">


        <div class="mt-6 grid grid-cols-12 md:gap-x-8 gap-y-12">
            <div class="col-span-12 lg:col-span-4">
                <div>
                    <a href="/" class="inline-flex">
                        <img class="w-80 h-90" src="{{Vite::asset('resources\images\logo-muara-mbaduk-foot.png')}}" alt="Laravel" loading="lazy">
                    </a>
                </div>
                <p class="max-w-sm text-xs text-gray-700 sm:text-sm dark:text-gray-500">Kawasan wisata alam yang
                    menyajikan pantai, perbukitan
                    hingga tempat berkemah</p>
                <br>
                <p>Telepon / Whatapps :</p>
                <p>0853 3334 2050</p>
                <ul class="mt-6 flex items-center ml-24">
                    <li>
                        <a href="https://github.com/laravel">
                            <img id="footer__github" class="inline-block dark:inline-block w-6 h-6 fill-current text-white sm:block" src="{{Vite::asset('resources\icon\facebook.svg')}}" alt="Facebook" width="24" height="24" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/laravel">
                            <img id="footer__github" class="inline-block dark:inline-block w-6 h-6 fill-current text-white sm:block block" src="{{Vite::asset('resources\icon\instagram.svg')}}" alt="Facebook" width="24" height="24" loading="lazy">
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/laravel">
                            <img id="footer__github" class="inline-block dark:inline-block w-6 h-6 fill-current text-white sm:block" src="{{Vite::asset('resources\icon\mail.svg')}}" alt="Facebook" width="24" height="24" loading="lazy">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-xs col-span-6 md:col-span-3 lg:col-span-2 space-x-10">
                <span class="text-white text-xl font-bold ">Packet Camping</span>
                <div class="mt-5">
                    <ul class="space-y-3 text-gray-700 dark:text-gray-500">
                        @for($i = 0; $i < 5; $i++)
                        <li>
                            <a href="/" class="transition-colors hover:text-gray-100 text-gray-500 text-lg">Standart 2</a>
                        </li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="text-xs col-span-6 md:col-span-3 ml-8  lg:col-span-2">
                <span class="text-white text-xl font-bold">Bantuan</span>
                <div class="mt-5">
                    <ul class="space-y-3 text-gray-700 dark:text-gray-500">
                        <li>
                            <a href="" class="transition-colors hover:text-gray-100 text-gray-500 text-lg">Kontak</a>
                        </li>
                        <li>
                            <a href="" class="transition-colors hover:text-gray-100 text-gray-500 text-lg">Tantangan Kami</a>
                        </li>
                        <li>
                            <a href="" class="transition-colors hover:text-gray-100 text-gray-500 text-lg">Harga Tiket</a>
                        </li>
                        <li>
                            <a href="" class="transition-colors hover:text-gray-100 text-gray-500 text-lg">FAQ</a>
                        </li>
                        <li>
                            <a href="" class="transition-colors hover:text-gray-100 text-gray-500 text-lg">Syarat dan Ketentuan</a>
                        </li>
                        <li>
                            <a href="" class="transition-colors hover:text-gray-100 text-gray-500 text-lg">Kebijakan Privasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mt-10 border-t pt-6 pb-16 border-gray-200 dark:border-dark-500">
            <p class="text-xs text-gray-700 dark:text-gray-400">
                Laravel is a Trademark of Taylor Otwell. Copyright © 2011-2023 Laravel LLC.
            </p>
            <p class="mt-6 text-xs text-gray-700 dark:text-gray-400">
                Code highlighting provided by <a href="https://torchlight.dev">Torchlight</a>
            </p>
        </div>
    </div>

</body>
</html>
