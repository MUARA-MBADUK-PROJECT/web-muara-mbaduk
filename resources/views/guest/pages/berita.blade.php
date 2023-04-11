@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1 class="text-5xl font-bold text-text-white ">Berita</h1>
    <h2 class="text-2xl text-text-white">Informasi terbaru wisata alam Muara Mbaduk</h2>
</x-parts.header>
<div class="flex flex-col px-28 py-28">

    <section class="aspect-[5/2] shadow-inner w-full bg-no-repeat bg-cover" style="background-image: url('{{$hotNews['img']}}')">
        <div class="w-full h-full grid grid-cols-1 p-5  content-end bg-gradient-to-t from-neutral-900 ">
            <div class="w-full">
                <p class="text-text-white ">{{$hotNews['release']}}</p>
                <p class="text-2xl font-bold line-clamp-1 text-text-white">{{$hotNews['title']}}</p>
                <p class="text-text-white line-clamp-1">{{$hotNews['sumary']}}</p>
            </div>
        </div>
    </section>

    <div class="py-28 flex flex-row justify-between h-fit w-full flex-wrap gap-7">
        @foreach($news as $title)
        <x-cards.news link="{{route('news.conten',['id'=>$title['id_news']])}}" img="{{$title['img']}}" title="{{$title['title']}}" summary="{{$title['summary']}}"></x-cards.news>
        @endforeach
        
    </div>
    
    <div class="flex justify-center ">
        <button onclick="loadMoreNews()" class="text-center bg-text-blue w-fit text-text-white font-bold text-xl px-8 py-3 rounded">Muat Lebih Banyak</button>
    </div>

</div>
@endsection
