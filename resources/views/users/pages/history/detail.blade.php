@extends('layouts.user.app')
@section('head')
<script src="https://unpkg.com/jsbarcode@latest/dist/JsBarcode.all.min.js"></script>
@endsection
@section('conten')
<x-parts.header>
    <h1>Pembayaran</h1>
    <p class="text-base">{{$data['id']}}</p>
</x-parts.header>
<article class="container p-24">
    <div class="flex justify-center">
        <svg id="barcode"></svg>
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
                    <p>{{$data['id']}}</p>
                </div>
                <div>
                    <h3 class="text-text-black text-xl font-bold">Status Pembayaran</h3>
                    <p class="{{ $data['status'] == 'Sudah Dibayar' ? 'bg-green-500' : 'bg-yellow-500' }}  px-8 py-1 rounded text-text-white">{{$data['status']}}</p>
                </div>
            </div>
            <div class="mt-16">
                @if($data['payment_method']=='Bayar Ditempat')
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
                    <p class="text-text-black text-xl font-bold">{{$data['date']}}</p>
                    <p class="mt-10">Transfer ke nomor Virtual Account :</p>
                    <img class="mt-9" src="{{asset('resources\images\2560px-Bank_Central_Asia.png')}}" alt="" srcset="">
                    <p class="text-xl text-text-gray"> <abbr class="font-bold">BCA</abbr> ( Bank Central Asia )</p>
                    <div onclick="copyToclipboard()" class="mt-10 hover:cursor-pointer bg-text-lightgray relative py-4 px-16">
                        <div class=" absolute right-1 top-1">
                            <svg class="stroke-white" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 6.75H8.25C7.42157 6.75 6.75 7.42157 6.75 8.25V15C6.75 15.8284 7.42157 16.5 8.25 16.5H15C15.8284 16.5 16.5 15.8284 16.5 15V8.25C16.5 7.42157 15.8284 6.75 15 6.75Z" stroke="#939393" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.75 11.25H3C2.60218 11.25 2.22064 11.092 1.93934 10.8107C1.65804 10.5294 1.5 10.1478 1.5 9.75V3C1.5 2.60218 1.65804 2.22064 1.93934 1.93934C2.22064 1.65804 2.60218 1.5 3 1.5H9.75C10.1478 1.5 10.5294 1.65804 10.8107 1.93934C11.092 2.22064 11.25 2.60218 11.25 3V3.75" stroke="#939393" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <p id="norec" class="text-text-black text-4xl font-bold">80777081316951940</p>
                        </div>
                    </div>
                    <p class="mt-12 text-text-black text-xl">Dengan jumlah yang harus dibayar :</p>
                    <p class="mt-12 text-text-blue text-4xl font-bold">Rp {{$data['total']}}</p>
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
                        <li>{{$data['name']}}</li>
                        <li>{{$data['email']}}</li>
                    </ul>
                </div>
                <div class="text-right">
                    <h3 class="text-text-black text-xl font-bold">Tanggal Kunjungan</h3>
                    <p class="mt-4 text-xl">{{$data['date']}}</p>
                    <p class="{{ $data['status'] == 'Sudah Dibayar' ? 'bg-green-500' : 'bg-yellow-500' }}  px-8 py-1 rounded text-text-white">{{$data['status']}}</p>
                </div>
            </div>
            <section class="mt-16">
                <h3 class="text-xl font-bold text-text-black">Rincian</h3>
                <div class="flex mt-8 justify-between py-9 border-b-2">
                    <div class="flex space-x-5">
                        <p class="text-3xl font-bold text-text-black">{{$data['person']}}</p>
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="grid place-items-center">
                            <p class="text-text-black">Pengunjung/Wisatawan</p>
                        </div>
                    </div>
                    <p class="text-xl text-text-black">Rp {{$data['total']}}</p>
                </div>
                <div class="flex mt-8 justify-between py-9 border-b-2">
                    <div class="flex space-x-5">
                        <p class="text-3xl font-bold text-text-black">{{$data['person']}}</p>
                        <svg width="45" height="46" viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.39729 30.4607C7.03507 30.8777 7.07941 31.5093 7.49632 31.8715C7.91323 32.2337 8.54484 32.1894 8.90706 31.7725L14.6381 25.1761C15.3561 25.7804 16.515 27.2667 17.0297 30.3767C17.1096 30.8595 17.527 31.2135 18.0163 31.2135H26.087C26.5707 31.2135 26.9851 30.8672 27.071 30.3911C27.3421 28.8896 28.2136 26.5836 29.9257 24.6716C30.4525 24.0833 31.059 23.5315 31.7547 23.0508L35.9722 30.6965C36.239 31.1801 36.8472 31.3559 37.3308 31.0891C37.8144 30.8223 37.9902 30.2141 37.7234 29.7305L33.5084 22.0895C34.7122 21.5835 36.115 21.2791 37.7446 21.2791C38.2968 21.2791 38.7446 20.8314 38.7446 20.2791C38.7446 17.0287 36.8133 10.0402 28.9746 8.46134C28.6108 8.38805 28.2363 8.5223 28.0019 8.81005C27.7675 9.0978 27.7117 9.4917 27.857 9.83321C28.101 10.4066 28.3856 11.1697 28.6361 11.9955L25.6707 10.3709C25.1863 10.1055 24.5786 10.2831 24.3132 10.7674C24.0478 11.2518 24.2254 11.8595 24.7097 12.1249L29.2189 14.5953C29.2837 15.1152 29.3007 15.5827 29.2624 15.9739C29.2488 16.1126 29.2293 16.2327 29.2057 16.3363C28.0463 15.9808 26.5105 15.7524 24.8999 15.9691C23.0158 16.2226 21.0283 17.0893 19.4714 19.0446C18.08 18.4658 16.1435 17.7645 14.1225 17.2346C11.7484 16.6122 9.09109 16.1799 7.05798 16.5894C7.04233 16.5926 7.02676 16.5961 7.01128 16.6C6.38737 16.7571 5.41125 17.0379 4.48971 17.3761C4.02925 17.545 3.56614 17.7343 3.16081 17.9363C2.77654 18.1278 2.36052 18.3709 2.06213 18.6714C1.87613 18.8587 1.77174 19.112 1.77174 19.376V22.0854C1.77174 22.3936 1.91389 22.6846 2.15699 22.8741C2.4001 23.0636 2.717 23.1304 3.0159 23.0551C3.59582 22.9091 4.56139 22.688 5.55433 22.5042C6.5666 22.3168 7.53429 22.1823 8.15218 22.1823C9.42928 22.1823 10.7884 22.7411 12.9233 24.1003L7.39729 30.4607ZM32.6007 27.9579C32.9267 27.5121 32.8296 26.8864 32.3838 26.5604C31.938 26.2344 31.3123 26.3315 30.9863 26.7773C30.0498 28.0579 29.5535 29.6098 29.5711 31.1984C29.5887 32.787 30.1195 34.3275 31.0843 35.5867C32.0491 36.8461 33.3958 37.756 34.9217 38.1773C36.4476 38.5987 38.0683 38.5082 39.5383 37.9197C41.0082 37.3312 42.2464 36.2773 43.0669 34.9187C43.8873 33.5603 44.2458 31.9705 44.089 30.3896C43.9323 28.8087 43.2685 27.3212 42.1969 26.1523C41.1252 24.9833 39.7036 24.1965 38.1466 23.9123C37.6033 23.8131 37.0825 24.1732 36.9834 24.7165C36.8842 25.2598 37.2443 25.7806 37.7876 25.8798C38.914 26.0854 39.9445 26.6549 40.7227 27.5038C41.501 28.3528 41.9846 29.435 42.0988 30.587C42.213 31.739 41.9516 32.8967 41.3549 33.8848C40.7582 34.8728 39.8592 35.6369 38.7949 36.063C37.7307 36.489 36.5582 36.5544 35.4541 36.2495C34.3499 35.9446 33.373 35.2855 32.6719 34.3704C31.9707 33.4552 31.5838 32.3339 31.571 31.1762C31.5581 30.0185 31.92 28.8888 32.6007 27.9579ZM8.99333 25.8628C9.53844 25.9515 10.0523 25.5816 10.141 25.0365C10.2298 24.4914 9.85986 23.9775 9.31476 23.8888C7.75258 23.6344 6.15092 23.8994 4.75232 24.6429C3.35384 25.3864 2.23516 26.5676 1.56415 28.0065C0.893177 29.4453 0.705819 31.0644 1.02995 32.6195C1.35409 34.1745 2.17245 35.5823 3.36273 36.6292C4.55312 37.6761 6.05066 38.3051 7.62911 38.4195C9.20758 38.534 10.7796 38.1276 12.1072 37.2627C13.4347 36.398 14.4452 35.1223 14.9873 33.6297C15.5294 32.1371 15.5741 30.5077 15.1148 28.9873C14.9551 28.4587 14.3971 28.1595 13.8684 28.3192C13.3397 28.479 13.0406 29.037 13.2003 29.5657C13.5348 30.673 13.5022 31.8601 13.1074 32.9469C12.7127 34.0337 11.9779 34.96 11.0155 35.5869C10.0533 36.2138 8.91536 36.5075 7.77374 36.4248C6.6321 36.342 5.54729 35.887 4.68358 35.1274C3.81976 34.3676 3.22401 33.3442 2.98787 32.2114C2.75172 31.0784 2.88838 29.899 3.37674 28.8518C3.86505 27.8047 4.67795 26.9476 5.69118 26.4089C6.7043 25.8703 7.86334 25.6788 8.99333 25.8628Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="grid place-items-center">
                            <p class="text-text-black">Kendaran roda 2</p>
                        </div>
                    </div>
                    <p class="text-xl text-text-black">Rp {{$data['total']}}</p>
                </div>
            </section>
        </div>
    </div>
</article>
@endsection
@section('js')
<script>
    JsBarcode("#barcode", "{{$data['id']}}");

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
