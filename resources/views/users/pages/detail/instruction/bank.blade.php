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
