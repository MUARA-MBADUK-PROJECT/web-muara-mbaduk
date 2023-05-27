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
    @include('users.pages.detail.nav')
    <div class="my-16">
        @include('users.pages.detail.instruction.index')
        @include('users.pages.detail.detail.index')
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
