@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Detail Kunjungan</h1>
</x-parts.header>
<div class="h-auto w-screen bg-white flex p-28 justify-center flex-col">
    <form action="{{route('order.chose.fill')}}" method="POST">
        @csrf
        <div class="text-left">
            <h2 class="text-text-black font-bold text-xl">Tanggal Berkunjung</h2>
            <h3 class="text-text-gray text-base mt-2">Masukan Tanggal dimana kamu akan berkunjung ke muarambaduk</h3>
            <div class="border-2 border-text-gray rounded flex mt-5">
                <svg id="datePickerIcon" width="20" height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="grow-0 shrink-0 m-4">
                    <path d="M27.7083 5.8335H7.29167C5.68084 5.8335 4.375 7.13933 4.375 8.75016V29.1668C4.375 30.7777 5.68084 32.0835 7.29167 32.0835H27.7083C29.3192 32.0835 30.625 30.7777 30.625 29.1668V8.75016C30.625 7.13933 29.3192 5.8335 27.7083 5.8335Z" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M23.3333 2.9165V8.74984" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M11.6667 2.9165V8.74984" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M4.375 14.5835H30.625" stroke="#939393" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class=" flex felx-col justify-center h-14 w-full">
                    <input id="datepicker" name="date" class="text-text-gray text-left h-full w-full text-xl " type="text" required>
                </div>
            </div>
            <h2 class="text-text-black font-bold text-xl mt-5">Apakah kamu akan melakukan kegiatan camping/berkemah?</h2>
            <select id="camping" onchange="isCamping()" name="camping" class="px-3 border-2 border-text-gray rounded mt-5 flex felx-col justify-center h-14 w-full text-text-gray font-medium">
                <option value="true">Ya, Saya akan melakukan camping</option>
                <option value="false">Tidak, Saya tidak melakukan camping</option>

            </select>
        </div>
        <div class="px-3 mt-12 border-2 rounded-sm border-text-gray p-5">
            <div class="flex flex-row justify-between">
                <div class="text-left">
                    <h2 class="text-text-black text-xl mt-4 mx-3 font-medium">Tiket Wisata Alam</h2>
                    <h2 class="text-text-blue text-lg mx-3 font-bold">Muara Mbaduk</h2>
                </div>
                <div class="text-right">
                    <h2 class="text-text-gray text-lg mt-4 mx-3 font-medium">Tanggal 26 Februari 2023 </h2>
                    @if($isWeekDay)
                    <h2 class="text-text-gray text-lg mx-3 font-medium">Hari Akhir Pekan / Libur</h2>
                    @else
                    <h2 class="text-text-gray text-lg mx-3 font-medium">Hari Biasa / Bukan Hari Libur</h2>
                    @endif

                </div>
            </div>

            <table class="w-full border-separate border-spacing-y-5 ">
                <thead>

                </thead>
                <tbody>
                    @foreach($tickets->data as $key => $ticket)
                    <tr id="{{$ticket->id}}" class="border-b-2">
                        <td>
                            <div class="flex items-center">
                                <div class="w-24 aspect-square">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M15 5V8" stroke="#323232" stroke-width="2" stroke-linecap="round"></path>
                                            <path d="M15 16V19" stroke="#323232" stroke-width="2" stroke-linecap="round"></path>
                                            <path d="M15 11V13" stroke="#323232" stroke-width="2" stroke-linecap="round"></path>
                                            <path d="M4.4416 10.4557C3.79252 9.73379 2.96682 8.93468 3.07899 7.97035C3.35831 5.56902 4.46022 5 7.648 5H16.352C19.5398 5 20.6417 5.56902 20.921 7.97035C21.0332 8.93468 20.2075 9.73379 19.5584 10.4557C19.2424 10.8072 19 11.3037 19 12C19 12.6963 19.2424 13.1928 19.5584 13.5443C20.2075 14.2662 21.0332 15.0653 20.921 16.0296C20.6417 18.431 19.5398 19 16.352 19H7.648C4.46022 19 3.35831 18.431 3.07899 16.0296C2.96682 15.0653 3.79252 14.2662 4.4416 13.5443C4.75761 13.1928 5 12.6963 5 12C5 11.3037 4.75761 10.8072 4.4416 10.4557Z" stroke="#323232" stroke-width="2"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="ml-6">
                                    <h3 class="text-text-black text-xl" data-id="title">{{$ticket->title}}</h3>
                                    <p class="text-text-blue text-xl">Rp. <span data-id="price">{{$isWeekDay?$ticket->weekend_day:$ticket->normal_day}}</span></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <input class="w-fit" name="ticket[{{$ticket->id}}]" hidden type="number" value="0">
                            <div class="flex item-center ">
                                <p class="text-text-black text-xl">x</p>
                                <p class="text-text-black text-xl" data-id="count">0</p>

                            </div>
                        </td>
                        <td>
                            <div class="flex justify-end gap-5">
                                <button type="button" onclick="decrease(this)" data-id="{{$ticket->id}}" class="bg-text-gray px-10 text-text-white text-3xl font-bold pb-1 rounded">-</button>
                                <button type="button" onclick="increase(this)" data-id="{{$ticket->id}}" class="bg-text-blue px-10 text-text-white text-3xl pb-1 font-bold rounded">+</button>
                                {{-- <input hidden type="number" name="ticket[{{$ticket->id}}]"> --}}
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div id="package-camping">
                <div>
                    <h2 class="text-text-black text-xl mt-14 mx-3 font-medium">Paket camping yang tersedia</h2>
                </div>
                <table class="w-full border-separate border-spacing-y-5 ">
                    <thead>

                    </thead>
                    <tbody>
                        @foreach($packages->data as $key => $package)
                        <tr id="{{$package->id}}" class="border-b-2">
                            <td>
                                <div class="flex items-center" onclick="getPackage(this)" data-slug="{{$package->slug}}" data-modal-target="package-modal" data-modal-toggle="package-modal">
                                    <img src="{{$package->image}}" alt="" srcset="">
                                    <div class="ml-6">
                                        <h3 class="text-text-black text-xl" data-id="title">{{$package->title}}</h3>
                                        <p class="text-text-blue text-xl">Rp. <span data-id="price">{{$package->price}}</span></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input class="w-fit" name="package[{{$package->slug}}]" type="number" hidden value="0">
                                <div class="flex item-center ">
                                    <p class="text-text-black text-xl">x</p>
                                    <p class="text-text-black text-xl" data-id="count">0</p>

                                </div>
                            </td>
                            <td>
                                <div class="flex justify-end gap-5">
                                    <button type="button" onclick="decrease(this)" data-id="{{$package->id}}" class="bg-text-gray px-10 text-text-white text-3xl font-bold pb-1 rounded">-</button>
                                    <button type="button" onclick="increase(this)" data-id="{{$package->id}}" class="bg-text-blue px-10 text-text-white text-3xl pb-1 font-bold rounded">+</button>
                                    {{-- <input hidden type="number" name="package[{{$package->id}}]"> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="w-full flex justify-end">
                <tr>
                    <td class="">
                        <p class="text-text-gray text-xl font-bold flex-col justify-center">Estimasi Biaya</p>
                    </td>
                    <td><input type="text" class="border-0 text-right text-text-blue text-xl font-bold" id="total" readonly name="total" value="Rp. 0"></td>
                </tr>
            </div>
        </div>
        <div class="mt-12 border-2 rounded-sm border-text-gray p-14 px-12">
            <div class="flex space-x-28">
                <div>
                    <h1 class="text-xl font-bold">Belum menemukan paket yang sesuai dengan kebutuhanmu?</h1>
                    <h2 class="text-base font-normal">Tenang, kamu bisa membuat pesanan paket spesial sendiri</h2>
                </div>
                <div>
                    <a href="{{route('packet.custom')}}">
                        <button type="button" class="flex justify-center h-14 w-52 bg-text-blue hover:bg-blue-700 text-white font-bold rounded py-4">
                            Buat Paket <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <button type="submit" class="h-14 w-full bg-text-blue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-12">
            Berikutnya
        </button>
    </form>
</div>


<!-- Modal toggle -->
<button data-modal-target="package-modal" data-modal-toggle="package-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
</button>

<!-- Main modal -->
<div id="package-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Detail package
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="package-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div  class="p-6 space-y-6">
                <div id="modal-body"></div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="package-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="package-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
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

    function isCamping() {
        input = document.getElementById('camping');
        packageCamping = document.getElementById('package-camping');
        if (input.value == "true") {
            packageCamping.hidden = false;
        } else {
            packageCamping.hidden = true;
        }
    }


    function createPackageDiv(listItems, packageName, packagePrice, packageImageURL) {
        const div = document.createElement('div');
        div.className = 'cardsNews w-80 h-fit flex flex-col bg-white border rounded-md pb-8';

        const img = document.createElement('img');
        img.className = 'w-full h-full mx-0 rounded-t-md';
        img.src = packageImageURL;
        img.alt = '';
        div.appendChild(img);

        const divInner = document.createElement('div');
        divInner.className = 'mt-9 mx-7 pb-7 grid justify-items-center border-b-2 border-text-gray';

        const p1 = document.createElement('p');
        p1.className = 'font-bold text-xl text-text-black';
        p1.textContent = packageName;
        divInner.appendChild(p1);

        const p2 = document.createElement('p');
        p2.className = 'text-xl text-text-blue';
        p2.textContent = packagePrice;
        divInner.appendChild(p2);

        div.appendChild(divInner);

        const divList = document.createElement('div');
        divList.className = 'ml-6 mt-9';

        const ul = document.createElement('ul');

        listItems.forEach(item => {
            const li = document.createElement('li');
            li.textContent = item.title;
            ul.appendChild(li);
        });

        divList.appendChild(ul);
        div.appendChild(divList);

        const divLink = document.createElement('div');
        divLink.className = 'mt-9 mx-6 bg-text-blue mb-10 w-auto h-fit rounded-md justify-center py-1 px-16 grid justify-items-center';

        const a = document.createElement('a');
        a.className = 'w-full h-full text-white rounded';
        a.href = '/packet/detail/paket-standart-2';
        a.textContent = 'Selengkapnya';

        divLink.appendChild(a);
        div.appendChild(divLink);

        return div;
    }

    function getPackage(params) {
        let slug = params.getAttribute("data-slug");
        // WARNING: For GET requests, body is set to null by browsers.

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function() {
            if (this.readyState === 4) {
                if (this.status === 200) {
                    var response = JSON.parse(this.responseText);
                    var listItems = response.products;
                    var packageName = response.title;
                    var packagePrice = response.price;
                    var packageImageURL = response.image;

                    var parentElement = document.getElementById('modal-body'); // Replace 'parentElementId' with the actual ID of the parent element

                    var packageDiv = createPackageDiv(listItems, packageName, packagePrice, packageImageURL);
                    parentElement.appendChild(packageDiv);
                } else {
                    console.log("Request failed with status:", this.status);
                    var parentElement = document.getElementById('modal-body'); // Replace 'parentElementId' with the actual ID of the parent element
                    parentElement.innerHTML = "data gagal di load";
                }
            }else {
                    console.log("Request failed with status:", this.status);
                    var parentElement = document.getElementById('modal-body'); // Replace 'parentElementId' with the actual ID of the parent element
                    parentElement.innerHTML = "data masih di load";
                }
        });

        xhr.open("GET", "https://api.muarambaduk.biz.id/v1/packages/"+slug);
        xhr.setRequestHeader("Authorization", "21a5abce903553898ace6ab4915c60a50b8a97e9");

        xhr.send();
    }

</script>

@endsection
@endsection
