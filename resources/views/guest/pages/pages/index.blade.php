@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>{{$data->data->pages}}</h1>
    </x-header>

    <div class="flex justify-center flex-col gap-4 py-24 px-10 w-full text-center">
        @php
            echo $data->data->body
        @endphp
        
    </div>
    @endsection
