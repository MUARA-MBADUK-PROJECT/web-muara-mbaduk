@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    Syarat dan Ketentuan
</x-parts.header>
<div class="flex flex-col justify-center py-24 px-28">
    @php
        echo $data->data->body;
    @endphp
</div>
@endsection
