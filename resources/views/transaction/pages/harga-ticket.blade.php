@extends('layouts.user.app')
@section('head')
<script src="https://unpkg.com/jsbarcode@latest/dist/JsBarcode.all.min.js"></script>
@endsection
@section('conten')
<x-parts.header>
    <h1>Harga Tiket</h1>
</x-parts.header>
<article class="container p-24">
    <nav class="mt-16 flex w-full justify-center rounded">
        <button onclick="showTransport(this)">
            <div class="bg-text-gray px-10 md:px-36 py-6">
                <p class="text-white font-bold md:text-xl">Transport</p>
            </div>
        </button>
        <button onclick="showTourist(this)">
            <div class="bg-text-blue px-10 md:px-36 py-6">
                <p class="text-white font-bold md:text-xl">Tourist</p>
            </div>
        </button>
    </nav>
    <div class="my-16">
        <div id="tourist">
            <div class="flex justify-evenly flex-wrap">

                @foreach($tourist->data as $key => $value)
                <div class="w-full max-w-sm p-4 bg-white border mt-9 border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700  flex-shrink-0">
                    <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">{{$value->title}}</h5>
                    <div class="flex flex-col">
                        <div class="flex items-baseline text-gray-900 dark:text-white">
                            <span class="text-3xl font-semibold">Rp</span>
                            <span class="text-5xl font-extrabold tracking-tight">{{$value->normal_day}}</span>

                        </div>
                        <div class="flex items-baseline text-gray-900 dark:text-white">
                            <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">Rp</span>
                            <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">{{$value->weekend_day}} in weekend</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
        <div id="transport" hidden>
            <div class="flex justify-evenly flex-wrap">
                @foreach($transport->data as $key => $value)
                <div class="w-full max-w-sm p-4 bg-white border mt-9 border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700  flex-shrink-0">
                    <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">{{$value->title}}</h5>
                    <div class="flex flex-col">
                        <div class="flex items-baseline text-gray-900 dark:text-white">
                            <span class="text-3xl font-semibold">Rp</span>
                            <span class="text-5xl font-extrabold tracking-tight">{{$value->normal_day}}</span>

                        </div>
                        <div class="flex items-baseline text-gray-900 dark:text-white">
                            <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">Rp</span>
                            <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">{{$value->weekend_day}} in weekend</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</article>
@endsection
@section('js')
<script>
    const noRec = document.getElementById('norec');
    transportPage = document.getElementById('transport');
    touristPage = document.getElementById('tourist');

    function copyToclipboard() {
        navigator.clipboard.writeText(noRec.innerHTML);
    }

    function showTourist(params) {
        div = params.children[0];
        div2 = params.parentNode.children[0].children[0];
        console.log(div);

        div.classList.remove("bg-text-gray");
        div.classList.add("bg-text-blue");

        div2.classList.remove("bg-text-blue");
        div2.classList.add("bg-text-gray");

        console.log(div2);

        transportPage.hidden = true;
        touristPage.hidden = false;

    }

    function showTransport(params) {
        div = params.children[0];
        div2 = params.parentNode.children[1].children[0];

        div.classList.remove("bg-text-gray");
        div.classList.add("bg-text-blue");

        div2.classList.remove("bg-text-blue");
        div2.classList.add("bg-text-gray");

        transportPage.hidden = false;
        touristPage.hidden = true;
    }

</script>
@endsection
