@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Buat Rencana Campingmu Sendiri</h1>
</x-parts.header>
<main class="py-24 px-28">
    <h2 class="text-text-black text-xl font-bold">Silahkan isi formulir di bawah ini, dan rencanakan camping paling pas untuk Kamu.</h2>
    <form class="mt-8" method="POST" action="{{route('packet.custom.send')}}">
        @csrf
        <div>
            <label class="text-xl text-text-black " for="date">Mau Camping Kapan ?</label>
            <div class="border-2 border-text-gray rounded flex mt-5">
                <svg id="datePickerIcon" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="grow-0 shrink-0 m-4">
                    <path d="M27.7083 5.8335H7.29167C5.68084 5.8335 4.375 7.13933 4.375 8.75016V29.1668C4.375 30.7777 5.68084 32.0835 7.29167 32.0835H27.7083C29.3192 32.0835 30.625 30.7777 30.625 29.1668V8.75016C30.625 7.13933 29.3192 5.8335 27.7083 5.8335Z" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M23.3333 2.9165V8.74984" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M11.6667 2.9165V8.74984" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M4.375 14.5835H30.625" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class=" flex felx-col justify-center h-auto w-full">
                    <input id="datepicker" name="date" class="text-text-gray text-left h-full w-full text-xl " type="text" required>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <label class="text-xl text-text-black " for="name">Nama Lengkap *</label>
            <div class="border-2 border-text-gray rounded flex mt-5">
                <div class=" flex felx-col justify-center h-auto w-full">
                    <input name="name" placeholder="Ketikkan nama lengkap" id="name" required class="valid:text-text-black text-text-gray text-left h-full w-full text-xl py-4 pl-7" type="text">
                </div>
            </div>
        </div>
        <div class="flex justify-between gap-16 mt-8">
            <div class="w-full">
                <label class="text-xl text-text-black " for="email">Email</label>
                <div class="border-2 border-text-gray rounded flex mt-5">
                    <div class=" flex felx-col justify-center h-auto w-full">
                        <input id="email" placeholder="Ketikkan email" required class="text-text-gray valid:text-text-black text-left h-full w-full text-xl py-4 pl-7" type="email">
                    </div>
                </div>
            </div>
            <div class="w-full">
                <label class="text-xl text-text-black " for="whatsapp">Contact Whatsapp</label>
                <div class="border-2 border-text-gray rounded flex mt-5">
                    <div class=" flex felx-col justify-center h-auto w-full">
                        <input id="whatsapp" placeholder="Ketikkan nomor whatsapp" required name="whatsapp" class="text-text-gray valid:text-text-black text-left h-full w-full text-xl py-4 pl-7" type="tel">
                    </div>
                </div>
            </div>
        </div>
        <section class="mt-8 flex justify-between">
            <table class="w-full border-separate border-spacing-y-5 ">
                <thead>
                    <tr class="text-left">
                        <th>Alat yang Tersedia</th>
                        <th>jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($item as $key => $value)
                    <tr id="{{$value['id']}}">
                        <td>
                            <div class="flex items-center">
                                <img class="w-24 aspect-square" src="{{$value['img']}}" alt="">
                                <div class="ml-6">
                                    <h3 class="text-text-black text-xl">{{$value['name']}}</h3>
                                    <p class="text-text-blue text-xl">Rp. <span>{{$value['price']}}</span></p>
                                </div>
                            </div>
                        </td>
                        <td >
                            <input class="w-fit" name="{{$value['id']}}" type="number" hidden value="0">
                            <div class="flex item-center ">
                                <p class="text-text-black text-xl">x</p>
                                <p class="text-text-black text-xl">0</p>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-end gap-5">
                                <button type="button" onclick="decrease(this)" data-id="{{$value['id']}}" class="bg-text-gray px-10 text-text-white text-3xl font-bold pb-1 rounded">-</button>
                                <button type="button" onclick="increase(this)" data-id="{{$value['id']}}" class="bg-text-blue px-10 text-text-white text-3xl pb-1 font-bold rounded">+</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td class="text-text-gray text-xl font-bold">Estimasi Biaya</td>
                        <td class="text-right text-text-blue text-xl font-bold" ><input type="text" id="total" readonly name="total" value="Rp. 0"></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="flex flex-col">
            <label for="note" class="text-xl mb-5">Catatan untuk kami</label>
            <textarea name="note" id="note" cols="30" rows="10" class="border rounded py-4 px-5 text-text-gray  text-xl valid:text-text-black" placeholder="Ketikan sebuah catatan"></textarea>
        </section>
        <div class="mt-9  w-full flex justify-end">
            <button type="submit" class="py-4 px-14 bg-text-blue w-fit h-fit rounded text-white text-xl font-bold">Kirim Pesanan</button>
        </div>
    </form>
</main>
@endsection
@section('js')
<script>
    var total = 0;


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

    function increase(params) {
        id = params.getAttribute('data-id'); 
        tr = document.getElementById(id);
        td = tr.getElementsByTagName('td')[1];
        input = td.getElementsByTagName('input')[0];
        displayNumb = td.getElementsByTagName('p')[1];
        numb = parseFloat(displayNumb.innerHTML);
        value = parseInt(input.value);;

        value++;
        numb++;
        displayNumb.innerHTML = numb;
        input.value = value;
        updateTotal(params,true);
    }

    function decrease(params) {
        id = params.getAttribute('data-id');
        tr = document.getElementById(id);
        td = tr.getElementsByTagName('td')[1];
        input = td.getElementsByTagName('input')[0];
        displayNumb = td.getElementsByTagName('p')[1];
        numb = parseFloat(displayNumb.innerHTML);
        value = parseInt(input.value);

        if (numb>0) {
            value--;
            numb--;
            displayNumb.innerHTML = numb;
            input.value = value;
            updateTotal(params,false);
        }
    }

    function updateTotal(params,isIncrease) {
        id = params.getAttribute('data-id');
        tr = document.getElementById(id);
        td0 = tr.getElementsByTagName('td')[0];
        price = parseFloat(td0.getElementsByTagName('span')[0].innerHTML);
        displayTotal = document.getElementById('total');

        console.log(price);

        if (isIncrease) {
            total += price;
        } else {
            total -= price;
        }

        displayTotal.value ="Rp. " + total;
    }

</script>

@endsection
