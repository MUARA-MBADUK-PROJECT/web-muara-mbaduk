<div id="detail" hidden>
    <div class="flex justify-between flex-wrap">
        <div>
            <h3 class="text-text-black text-xl font-bold">Pemesan</h3>
            <ul class="mt-4 text-xl">
                <li>{{$profil->fullname}}</li>
                <li>{{$profil->email}}</li>
            </ul>
        </div>
        <div class="text-left md:text-right">
            <h3 class="text-text-black text-xl font-bold">Tanggal Kunjungan</h3>
            <p class="mt-4 text-xl">{{$data->date}}</p>
            <p class="  px-8 py-1 rounded text-text-white">{{$data->status}}</p>
        </div>
    </div>
    <section class="mt-16">
        <h3 class="text-xl font-bold text-text-black">Rincian</h3>
        @include('users.pages.detail.detail.tickets')
        @include('users.pages.detail.detail.packages')
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