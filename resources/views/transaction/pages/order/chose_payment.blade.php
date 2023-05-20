@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Rincian Pemesanan</h1>
</x-parts.header>
{{-- {{dd($orders)}} --}}
<div class="h-auto w-screen bg-white flex p-28 justify-center flex-col">
    <div class="flex justify-between flex-row px-3">
        <div class="text-left">
            <h2 class="text-text-black font-bold text-xl">Nama Pemesan</h2>
            <h3 class="text-text-black text-xl mt-4">{{$profil->fullname}}</h3>
            <h3 class="text-text-black text-xl">{{$profil->email}}</h3>
        </div>
        <div class="text-right">
            <h2 class="text-xl font-bold">Tanggal Kunjungan</h2>
            <h3 class="text-text-black text-xl mt-4">{{$orders['date']}}</h3>
        </div>
    </div>
    <div class="flex justify-start mt-16 px-3">
        <h2 class="text-text-black font-bold text-xl">Tiket</h2>
    </div>
    @foreach($orders['ticket'] as $key => $value)
    <div class="mt-1 flex justify-between px-3 border-b rounded-sm border-text-gray p-7">
        <div class="flex space-x-5 mx-3">
            <div class="text-3xl font-bold">{{count($value['identity'])}}</div>
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M37.5 39.375V35.625C37.5 33.6359 36.7098 31.7282 35.3033 30.3217C33.8968 28.9152 31.9891 28.125 30 28.125H15C13.0109 28.125 11.1032 28.9152 9.6967 30.3217C8.29018 31.7282 7.5 33.6359 7.5 35.625V39.375" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M22.5 20.625C26.6421 20.625 30 17.2671 30 13.125C30 8.98286 26.6421 5.625 22.5 5.625C18.3579 5.625 15 8.98286 15 13.125C15 17.2671 18.3579 20.625 22.5 20.625Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="text-base font-normal py-2">
                <h2>{{$value['data']->category}} | {{$value['data']->title}}</h2>
            </div>
        </div>
        <div class="mx-3 py-2">
            <h2 class="text-xl">Rp. {{($isWeekDay?$value['data']->weekend_day : $value['data']->normal_day)* count($value['identity'])}}</h2>
        </div>

    </div>
    @endforeach

    <div class="flex justify-start mt-8 px-3">
        <h2 class="text-text-black font-bold text-xl">Paket Camping</h2>
    </div>
    @foreach($orders['package'] as $key => $value)

    <div class="flex justify-between px-3 border-b rounded-sm border-text-gray p-10">
        <div class="flex space-x-5 mx-3">
            <div class="text-3xl font-bold mt-6">{{$value['count']}}</div>
            <img src="{{ $value['data']->image}}" width="100" height="100" style="border-radius: 4px">
            <div>
                <h2 class="font-bold text-base mt-8">{{$value['data']->title}}</h2>
            </div>
        </div>
        <div class="text-right mx-3">
            <h2 class="text-xl mt-6">Rp. {{$value['data']->price}}</h2>
        </div>
    </div>
    @endforeach
    <div class="flex justify-between px-3 border-b rounded-sm border-text-gray p-7">
        <div class="flex space-x-1 mx-3 mt-1">
            <h2 class="font-bold text-base">PPN</h2>
            <h2 class="text-base">( Pajak Pertambahan Nilai )</h2>
        </div>
        <div class="text-right mx-3">
            <h2 class="text-xl">Rp. 5.000</h2>
        </div>
    </div>
    <div class="flex justify-between px-3 p-8">
        <div class="mx-3">
            <h2 class="font-bold text-text-gray text-xl">Total Pembayaran Tiket </h2>
        </div>
        <div class="text-right mx-3">
            <h2 class="text-xl font-bold text-text-blue">Rp. {{floatval($orders['total'])+5000}}</h2>
        </div>
    </div>
    <div class="flex justify-start mt-16 px-3">
        <h2 class="text-text-black font-bold text-xl">Metode Pembayaran</h2>
    </div>
    <form action="{{route('order.checkout')}}" method="POST">
        @csrf
        <div class="flex justify-between items-center space-x-36">
            <label for="payment-bank" class="flex items-center space-x-5 mx-3 px-8 mt-6 h-28 w-500 border-2 border-text-gray rounded">
                <input onchange="isTransfer()" checked type="radio" id="payment-bank" class="form-radio" name="payment" value="bank">
                <div>
                    <h2 class="text-xl">Bank Transfer VA </h2>
                    <h2 class="text-base text-text-gray">Tersedia BCA, BRI, BNI dan dikenakan biaya
                        transaksi sesuai ketentua bank.</h2>
                </div>
            </label>

            <label for="payment-cash" class="flex items-center space-x-5 mx-3 px-8 mt-6 h-28 w-500 border-2 border-text-gray rounded">
                <input onchange="isTransfer()" type="radio" id="payment-cash" class="form-radio" name="payment" value="cash">
                <div>
                    <h2 class="text-xl">Bayar Ditempat </h2>
                    <h2 class="text-base text-text-gray">Harap dan pastikan anda berkunjung sesuai
                        dengan tanggal pemesanan.</h2>
                </div>
            </label>
        </div>

        <div id="bank">
            <div class="flex justify-start mt-16 px-3">
                <h2 class="text-text-black font-bold text-xl">Bank Pembayaran</h2>
            </div>
            <select id="" name="bank" class="mr-1 ml-3 px-3 border-2 border-text-gray rounded mt-5 flex felx-col justify-center h-14 w-auto text-text-black font-bold">
                <optgroup label="Daftar Bank">
                    <option value="bca">BCA ( Bank Central Asia )</option>
                    <option value="bri">BRI ( Bank Rakyat Indonesia )</option>
                    <option value="bni">BNI ( Bank Negara Indonesia )</option>
                </optgroup>

            </select>
        </div>
        <button type="submit" class="h-14 w-full bg-text-blue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-12">
            Bayar
        </button>
    </form>

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

    function isTransfer() {
        paymentBank = document.getElementById("payment-bank");
        bank = document.getElementById("bank");
        if (paymentBank.checked) {
            bank.hidden = false;
        } else {
            bank.hidden = true;
        }
    }

    isTransfer()

</script>
@endsection
@endsection
