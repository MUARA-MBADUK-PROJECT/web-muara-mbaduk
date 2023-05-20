@extends('layouts.user.app')
@section('head')
<script src="https://unpkg.com/jsbarcode@latest/dist/JsBarcode.all.min.js"></script>
@endsection
@section('conten')
<x-parts.header>
    <h1>Pembayaran</h1>
    <p class="text-base">{{$data->order_id}}</p>
</x-parts.header>
<article class="container p-24">
    <div class="flex justify-center">
        <img src="{{$data->barcode}}" alt="barcode">
    </div>
    <nav class="mt-16 flex w-full justify-center">
        <button onclick="showDetail(this)">
            <div class="bg-text-gray px-36 py-6">
                <p class="text-white font-bold text-xl">Detail Pemesanan</p>
            </div>
        </button>
        <button onclick="showIntruction(this)">
            <div class="bg-text-blue px-36 py-6">
                <p class="text-white font-bold text-xl">Instruksi Pembayaran</p>
            </div>
        </button>
    </nav>
    <div class="my-16">
        <div id="Instruksi">
            <div class="flex justify-between">

                <div>
                    <h3 class="text-text-black text-xl font-bold">Kode Order</h3>
                    <p>{{$data->order_id}}</p>
                </div>
                <div>
                    <h3 class="text-text-black text-xl font-bold">Status Pembayaran</h3>
                    <p class="  px-8 py-1 rounded text-text-white">{{$data->status}}</p>
                </div>
            </div>
            <div class="mt-16">
                @if($data->type=='cash')
                <h3 class="text-text-black text-xl font-bold">Instruksi Konfirmasi Pesanan</h3>
                <ul class="list-disc list-inside mt-6">
                    <li>Harap datang pada sesuai hari pemesanan.</li>
                    <li>Tunjukkan kode order atau barcode yang tertera kepada petugas.</li>
                    <li>Petugas akan melakukan scaning.</li>
                    <li>Melakukan pembayaran sesuai dengan nominal pemesanan.</li>
                    <li>Mencetak tiket apabila data sesuai.</li>
                    <li>Tiket akan diberikan dan proses telah selesai.</li>
                </ul>
                @else
                <div class="grid justify-items-center">
                    <p class="text-text-black text-xl font-bold">Segera lakukan pembayaran sebelum</p>
                    <p class="text-text-black text-xl font-bold">{{$data->date}}</p>
                    <p class="mt-10">Transfer ke nomor Virtual Account :</p>
                    @switch($data->va_numbers->bank)
                    @case('bca')
                    <img class="mt-9" src="{{asset('resources\images\2560px-Bank_Central_Asia.png')}}" alt="" srcset="">
                    <p class="text-xl text-text-gray"> <abbr class="font-bold">BCA</abbr> ( Bank Central Asia )</p>
                    @break
                    @case('bri')
                    <img class="mt-9 w-60" src="{{asset('resources\images\BRI_logo.jpg')}}" alt="" srcset="">
                    <p class="text-xl text-text-gray"> <abbr class="font-bold">BRI</abbr> ( Bank Rakyat Indonesia )</p>
                    @break
                    @default
                    <img class="mt-9 w-60" src="{{asset('resources\images\BNI_logo.jpg')}}" alt="" srcset="">
                    <p class="text-xl text-text-gray"> <abbr class="font-bold">BNI</abbr> ( Bank Negara Indonesia )</p>
                    @endswitch
                    <div onclick="copyToclipboard()" class="mt-10 hover:cursor-pointer bg-text-lightgray relative py-4 px-16">
                        <div class=" absolute right-1 top-1">
                            <svg class="stroke-white" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 6.75H8.25C7.42157 6.75 6.75 7.42157 6.75 8.25V15C6.75 15.8284 7.42157 16.5 8.25 16.5H15C15.8284 16.5 16.5 15.8284 16.5 15V8.25C16.5 7.42157 15.8284 6.75 15 6.75Z" stroke="#939393" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.75 11.25H3C2.60218 11.25 2.22064 11.092 1.93934 10.8107C1.65804 10.5294 1.5 10.1478 1.5 9.75V3C1.5 2.60218 1.65804 2.22064 1.93934 1.93934C2.22064 1.65804 2.60218 1.5 3 1.5H9.75C10.1478 1.5 10.5294 1.65804 10.8107 1.93934C11.092 2.22064 11.25 2.60218 11.25 3V3.75" stroke="#939393" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <p id="norec" class="text-text-black text-4xl font-bold">{{$data->va_numbers->va_number}}</p>
                        </div>
                    </div>
                    <p class="mt-12 text-text-black text-xl">Dengan jumlah yang harus dibayar :</p>
                    <p class="mt-12 text-text-blue text-4xl font-bold">Rp {{$data->gross_amount}}</p>
                    <button onclick="location.reload()" class="mt-14 px-32 py-4 bg-text-blue text-xl font-bold text-text-white flex space-x-4">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.04199 4.16675V10.4167H7.29199" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.958 20.8333V14.5833H17.708" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.3441 9.37498C20.8158 7.88205 19.9179 6.54727 18.7342 5.4952C17.5505 4.44314 16.1196 3.70807 14.575 3.35858C13.0304 3.00909 11.4225 3.05658 9.90117 3.49662C8.37988 3.93665 6.99485 4.75489 5.87533 5.87498L1.04199 10.4166M23.9587 14.5833L19.1253 19.125C18.0058 20.2451 16.6208 21.0633 15.0995 21.5033C13.5782 21.9434 11.9702 21.9909 10.4256 21.6414C8.88102 21.2919 7.45012 20.5568 6.26644 19.5047C5.08276 18.4527 4.18487 17.1179 3.65658 15.625" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Cek Status Pembayaran</p>
                    </button>
                </div>

                @endif
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
                {{-- {{dd($tickets)}} --}}
                @foreach($tickets as $key => $value)

                <div class="flex mt-8 justify-between py-9 border-b-2">
                    <div class="flex space-x-5">
                        <p class="text-3xl font-bold text-gray-900">{{$value['count']}}</p>
                        @if($value['category']=='tourist')
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        @else
                        @if(substr($key, -1)==2)
                        <svg width="45" height="45" fill="#000000" viewBox="-6.89 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="Path_12" data-name="Path 12" d="M134.519,165.244a1.356,1.356,0,1,0-.4-.963,1.313,1.313,0,0,0,.027.252l-2.291,1.865a.393.393,0,0,0-.137.227l-.205.986a3.1,3.1,0,0,1-1.6-.439c-.626-.525-1.171-1.3-2.19-1.3h-.012c-1.021,0-1.564.772-2.189,1.3a3.086,3.086,0,0,1-1.591.437l-.21-.984a.4.4,0,0,0-.137-.227l-2.289-1.865a1.3,1.3,0,0,0,.024-.252,1.359,1.359,0,1,0-.4.963l2.06,1.68.16.771a1.162,1.162,0,0,0-.232.061.484.484,0,0,0-.188.373l-3.064.311a.426.426,0,0,0,.044.849l.041,0,2.977-.3c.052.655.447.539,2.411.573.938.017.83.072,1,.24a.978.978,0,0,1,.173.553,8.449,8.449,0,0,0-2.508.761c-1.383.776-1.367,1.614-1.564,3.672s-.224,4.082-.247,4.606c-.017.445.058,4.211.1,5.068.07,1.49-.044,1.551.64,2.057a4.27,4.27,0,0,0,2.182.924c.192.025.37.046.549.066v.851h.012c.029.252.345.475.826.625v4.5a1.446,1.446,0,1,0,2.891,0v-4.5c.469-.151.776-.37.8-.62h.011V187.5c.179-.018.355-.039.544-.064a4.266,4.266,0,0,0,2.181-.924c.687-.506.569-.567.643-2.057.039-.857.117-4.623.1-5.068-.02-.524-.049-2.551-.246-4.606s-.181-2.9-1.564-3.672a8.429,8.429,0,0,0-2.509-.761.973.973,0,0,1,.174-.553c.162-.168.055-.223,1-.24,1.962-.034,2.357.082,2.408-.573l2.981.3.044,0a.426.426,0,0,0,.042-.849l-3.067-.311c-.029-.176-.083-.324-.189-.373a1.093,1.093,0,0,0-.228-.059l.161-.773Zm-6.8,4.508a1.638,1.638,0,1,1,1.638-1.639A1.637,1.637,0,0,1,127.718,169.752Z" transform="translate(-118.604 -162.924)"></path>
                            </g>
                        </svg>
                        @else
                        <svg fill="#000000" width="45" height="45" viewBox="0 -3.6 30.859 30.859" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="Path_1" data-name="Path 1" d="M141.314,136.63l1.055-.085a.568.568,0,0,0,.52-.61l-.129-1.58a.565.565,0,0,0-.609-.519l-2.354,0-2.549-5.724a2.074,2.074,0,0,0-2.032-1.116h-15a2.084,2.084,0,0,0-2.036,1.116l-2.546,5.724-2.354,0a.568.568,0,0,0-.61.519l-.127,1.58a.567.567,0,0,0,.519.61l1.055.085a10.131,10.131,0,0,0-1.833,5.852l.238,3.025a1.649,1.649,0,0,0,.9,1.355v1.6c.1,2.185.788,2.185,2.319,2.185s2.32,0,2.423-2.185v-1.417l9.551,0,9.468,0v1.415c.1,2.185.787,2.185,2.319,2.185s2.32,0,2.422-2.185v-1.6a1.734,1.734,0,0,0,.978-1.355l.242-3.025A10.131,10.131,0,0,0,141.314,136.63ZM122.257,143.5a.568.568,0,0,1-.566.567h-5.577a.567.567,0,0,1-.568-.567v-2.04a.565.565,0,0,1,.568-.567l5.577.453a.568.568,0,0,1,.566.566Zm-4.9-7.98,2.742-6.307h15.232l2.741,6.307H117.359Zm22.53,7.98a.567.567,0,0,1-.567.567h-5.577a.568.568,0,0,1-.567-.567v-1.588a.569.569,0,0,1,.567-.566l5.577-.453a.565.565,0,0,1,.567.567Z" transform="translate(-112.289 -126.994)"></path>
                            </g>
                        </svg>
                        @endif
                        @endif
                        <div class="grid place-items-center">
                            <p class="text-text-black">{{$key}}</p>
                        </div>
                    </div>
                    <p class="text-xl text-text-black">Rp {{$value['price']}}</p>
                </div>

                @endforeach
                @foreach($packages as $key => $value)
                <div class="flex mt-8 justify-between py-9 border-b-2">
                    <div class="flex space-x-5">
                        <p class="text-3xl font-bold text-gray-900">{{$value['count']}}</p>
                        <svg width="45px" height="45px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill="#000000" d="M361.155 91.245l-18 .193.42 38.98c-45.773 13.285-108.533 19.738-166.474 23.573 35.097 96.284 99.357 173.77 157.845 257.13 20.718-19.655 51.11-31.983 83.46-36.01-20.8-18.109-36.634-27.966-58.833-70.438 31.27 37.085 52.579 48.467 77.623 62.006 3.263-13.094 8.938-24.638 18.721-32.674 8.667-7.12 20.026-10.654 33.53-10.344-46.874-59.763-101.67-117.054-127.83-189.435l-.462-42.98zM163.25 102.92l-17.998.244s.25 18.34.56 36.97c.156 9.316.325 18.703.489 25.929.06 2.636.117 4.58.174 6.542-34.378 83.733-69.154 160.993-123.92 233.442 33.635-1.387 66.326-1.203 98.552-.041 22.263-62.617 23.346-134.855 35.627-202.006 11.417 68.562 10.566 139.445 33.483 205.83 42.962 3.082 85.69 7.198 129.35 10.926-55.67-79.151-118.213-155.037-155.118-249.365-.05-1.782-.1-3.396-.152-5.737-.162-7.156-.333-16.523-.488-25.82-.31-18.594-.559-36.914-.559-36.914z"></path>
                            </g>
                        </svg>
                        <div class="grid place-items-center">
                            <p class="text-text-black">{{$key}}</p>
                        </div>
                    </div>
                    <p class="text-xl text-text-black">Rp {{$value['price']}}</p>
                </div>
                @endforeach
                <div class="flex mt-8 justify-between py-9 border-b-2">
                    <div class="flex space-x-5">
                        <svg width="45" height="45" fill="#000000" viewBox="0 0 24 24" id="tax-left" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="secondary" d="M17,17H10m3-4h4M9,6,3,12" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                <line id="secondary-upstroke" x1="3.45" y1="6.5" x2="3.55" y2="6.5" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                                <line id="secondary-upstroke-2" data-name="secondary-upstroke" x1="8.45" y1="11.5" x2="8.55" y2="11.5" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                                <path id="primary" d="M13,3h7a1,1,0,0,1,1,1V20a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                            </g>
                        </svg>
                        <div class="grid place-items-center">
                            <p class="text-text-black">PPN (Pajak Penambahan Nilai)</p>
                        </div>
                    </div>
                    <p class="text-xl text-text-black">Rp 5000</p>
                </div>
                <div class="flex mt-8 justify-between py-9">
                    <div class="flex space-x-5">

                        <div class="grid place-items-center">
                            <p class="text-text-gray text-xl font-bold">Total Pembayaran</p>
                        </div>
                    </div>
                    <p class="text-xl font-bold  text-text-blue">Rp {{$data->gross_amount}}</p>
                </div>

            </section>
        </div>
    </div>
</article>
@endsection
@section('js')
<script>
    const noRec = document.getElementById('norec');
    detailPage = document.getElementById('detail');
    intructionPage = document.getElementById('Instruksi');

    function copyToclipboard() {
        navigator.clipboard.writeText(noRec.innerHTML);
    }

    function showDetail(params) {
        console.log('show detail trigered');
        div = params.children[0];
        div2 = params.parentNode.children[1].children[0];

        div.classList.remove("bg-text-gray");
        div.classList.add("bg-text-blue");

        div2.classList.remove("bg-text-blue");
        div2.classList.add("bg-text-gray");

        console.log(intructionPage);
        intructionPage.hidden = true;
        detailPage.hidden = false;

    }

    function showIntruction(params) {
        console.log('show detail trigered');
        div = params.children[0];
        div2 = params.parentNode.children[0].children[0];
        console.log(div2);

        div.classList.remove("bg-text-gray");
        div.classList.add("bg-text-blue");

        div2.classList.remove("bg-text-blue");
        div2.classList.add("bg-text-gray");

        intructionPage.hidden = false;
        detailPage.hidden = true;
    }

</script>
@endsection
