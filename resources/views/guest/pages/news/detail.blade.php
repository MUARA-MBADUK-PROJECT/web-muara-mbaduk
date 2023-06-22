@php
    use Carbon\Carbon;
@endphp
@extends('layouts.user.app')
@section('conten')
{{-- {{dd($data)}} --}}
    <x-parts.header>
        <h1 class="text-5xl text-text-white font-bold">{{$data->title}}</h1>
        <p class="text-text-white text-2xl font-medium mt-3">{{Carbon::parse($data->updated_at)->format('d F Y');}}</p>
    </x-parts.header>

    <article class="container p-5 flex flex-col justify-center">
        <img class="" src="{{$data->thumbnail}}" alt="">
        <p class="whitespace-pre-line indent-4">
            @php
                echo $data->body;
            @endphp
        </p>
    </article>
@endsection