@php
use Carbon\Carbon;

$dateString = $data->created_at;
$date = Carbon::parse($dateString)->format('d M Y');

@endphp
@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1 class="text-5xl text-text-white font-bold">{{$data->title}}</h1>
    <p class="text-text-white text-2xl font-medium mt-3">{{$date}}</p>
</x-parts.header>

<article class="p-28 ">
    <img class="w-full" src="{{$data->thumbnail}}" alt="">
    <p class="whitespace-pre-line indent-4">
        {{$data->body}}
    </p>
</article>
@endsection
