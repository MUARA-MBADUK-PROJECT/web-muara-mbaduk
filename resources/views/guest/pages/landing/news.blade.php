@php
use Carbon\Carbon;
@endphp
{{-- BERITA --}}
<div class="bg-white w-screen h-fit flex flex-col">
    <div class="grid justify-items-center mt-24 mx-[10%]">
        <h2 class="text-text-black font-bold text-4xl">Berita terbaru dari <span class="text-text-blue">Muara Mbaduk</span></h2>
    </div>
    <div class="flex justify-center gap-24 mt-16">
        <div class="card h-500 w-96  shadow rounded">

            @for($i = 0; $i < 1; $i++) <img class="rounded-t" src="{{$news[$i]->thumbnail}}" alt="">
                <div class="flex flex-col mx-5">
                    <div class="date mt-4">
                        <p class="date text-text-gray text-base text-left">@php

                            $dateString = $news[$i]->created_at;
                            $date = Carbon::parse($dateString)->format('d M Y');
                            echo $date;

                            @endphp</p>
                    </div>
                    <div class="title h-20 flex-none">
                        <p class="text-left font-bold text-text-black text-xl line-clamp-2" style="">{{$news[$i]->title}}</p>
                    </div>
                    <div class="sumary">
                        <p class=" text-base text-text-gray text-left line-clamp-2">{{$news[$i]->body}}</p>
                    </div>
                </div>
                @endfor

        </div>

    </div>
    <div class="mt-12 mx-[512px] bg-text-blue flex-none rounded mb-24">
        <a href="{{route('news.show')}}"><button class="text-text-white w-full text-xl text-center font-bold px-7 py-4">Muat Lebih Banyak</button></a>
    </div>
</div>