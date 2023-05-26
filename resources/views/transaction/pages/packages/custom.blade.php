@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Buat Rencana Campingmu Sendiri</h1>
</x-parts.header>
<main class="py-24 px-[5%] w-full">
    <h2 class="text-text-black text-xl font-bold">Silahkan isi formulir di bawah ini, dan rencanakan camping paling pas untuk Kamu.</h2>
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
    <div class="flex justify-between gap-16 mt-8 flex-wrap">
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
    <section class="mt-8">
        <table class=" border-separate border-spacing-y-5 table-auto w-full">
            <thead class="w-full">
                <tr class="text-left w-full ">
                    <th class=" ">AlatyangTersedia</th>
                    <th class=""><p class="mx-5">jumlah</p></th>
                    <th class=""></th>
                </tr>
            </thead>
            <tbody id="list-product" >
                @foreach($products->data as $key => $product)
                <tr id="{{$product->id}}">
                    <td>
                        <div class="flex items-center flex-nowrap">
                            <img class="w-24 aspect-square" src="{{$product->image}}" alt="">
                            <div class="ml-6">
                                <h3 class="text-text-black text-xl" data-id="title">{{$product->title}}</h3>
                                <p class="text-text-blue text-xl">Rp. <span data-id="price">{{$product->price}}</span></p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input class="w-fit" name="{{$product->id}}" type="number" hidden value="0">
                        <div class="flex item-center justify-center">
                            <p class="text-text-black text-xl">x</p>
                            <p class="text-text-black text-xl" data-id="count">0</p>
                        </div>
                    </td>
                    <td >
                        <div class="flex justify-center flex-nowrap gap-5 ">
                            <button type="button" onclick="decrease(this)" data-id="{{$product->id}}" class="bg-text-gray px-2 text-text-white text-3xl font-bold pb-1 rounded">-</button>
                            <button type="button" onclick="increase(this)" data-id="{{$product->id}}" class="bg-text-blue px-2 text-text-white text-3xl pb-1 font-bold rounded">+</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-full flex flex-wrap justify-end ">
            <label for="tatal" class="text-text-gray text-xl font-bold mr-4">Estimasi Biaya</label>
            <input class="text-right border-0 text-text-blue text-xl font-bold" type="text" id="total" readonly name="total" value="Rp. 0">
        </div>
    </section>
    <section class="flex flex-col mt-5">
        <label for="note" class="text-xl mb-5">Catatan untuk kami</label>
        <textarea name="note" id="note" cols="30" rows="10" class="border rounded py-4 px-5 text-text-gray  text-xl valid:text-text-black" placeholder="Ketikan sebuah catatan"></textarea>
    </section>
    <div class="mt-9  w-full flex justify-end">
        <button id="sendWhatsapp" onclick="sendWhatsapp()" type="button" class="py-4 px-14 bg-text-blue w-fit h-fit rounded text-white text-xl font-bold">Kirim Pesanan</button>
    </div>

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
        updateTotal(params, true);
    }

    function decrease(params) {
        id = params.getAttribute('data-id');
        tr = document.getElementById(id);
        td = tr.getElementsByTagName('td')[1];
        input = td.getElementsByTagName('input')[0];
        displayNumb = td.getElementsByTagName('p')[1];
        numb = parseFloat(displayNumb.innerHTML);
        value = parseInt(input.value);

        if (numb > 0) {
            value--;
            numb--;
            displayNumb.innerHTML = numb;
            input.value = value;
            updateTotal(params, false);
        }
    }

    function updateTotal(params, isIncrease) {
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

        displayTotal.value = "Rp. " + total;
    }

    const options = {
        day: '2-digit'
        , month: 'long'
        , year: 'numeric'
    };
    StringTime = currentDate.toLocaleDateString('id-ID', options);


    inputDate = document.getElementById('datepicker');
    inputName = document.getElementById('name');
    inputEmail = document.getElementById('email');
    inputContactWhatsapp = document.getElementById('whatsapp');
    inputNote = document.getElementById('note');
    inputTotal = document.getElementById('total')

    function validateInput() {
        if (!inputDate.value || !inputName.value || !inputEmail.value || !inputContactWhatsapp.value || !inputTotal.value) {
            return false;
        }

        return true;
    }

    function sendWhatsapp() {
        var phoneNumber = "+6285607185972";
        var message = "*Pemesanan%20Camping%20di%20Muarambaduk*%0A" +
            "%0A" +
            "Halo,%0A" +
            "Saya%20ingin%20memesan%20paket%20camping%20di%20Muarambaduk%20pada%20tanggal%20" + StringTime + ".%0A" +
            "%0ABerikut%20adalah%20informasi%20pemesan:%0A" +
            "Nama%20Pemesan:%20" + inputName.value + "%0A" +
            "Tanggal%20Pemesanan:%20" + inputDate.value + "%0A" +
            "Email:%20" + inputEmail.value + "%0A" +
            "Nomor%20WhatsApp:%20" + inputContactWhatsapp.value + "%0A" +
            "%0A" +
            "Daftar%20Alat%20yang%20Dipesan:%0A" +
            getlistProducttoMEssage() +
            "%0A" +
            "Total%20Harga:%20" + inputTotal.value + "%0A" +
            "%0ACatatan:%0A" + inputNote.value + "";
        var url = "https://wa.me/" + phoneNumber + "/?text=" + message;
        // console.log(inputDate.value);

        if (validateInput()) {
            window.open(url, "_blank");
        } else {
            alert('mohon isi terlebuh dahulu semua input diatas')
        }
    }

    function getlistProducttoMEssage() {
        tbody = document.getElementById('list-product');
        products = tbody.getElementsByTagName('tr');
        message = "";
        productTitle = products[0].getAttribute("data-title");
        price = products[0].querySelector('span[data-id="price"]').textContent;
        // console.log(price);
        for (let index = 0; index < products.length - 1; index++) {
            productTitle = products[index].querySelector('h3[data-id="title"]').textContent;
            productCount = products[index].querySelector('p[data-id="count"]').textContent;
            productPrice = products[index].querySelector('span[data-id="price"]').textContent;
            // console.log(productTitle+" "+index);
            // console.log(productCount);
            // console.log(productPrice);
            if (productCount == 0) {
                message = message;
            } else {
                message = message + "- " + productTitle + "%20(jumlah):%20" + productCount + ",%20Harga:%20" + productPrice + "%0A";
            }
        }
        return message;
    }

</script>

@endsection
