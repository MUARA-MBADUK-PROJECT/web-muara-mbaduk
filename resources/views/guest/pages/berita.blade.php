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

    <div id="newsContainer" class="py-28 flex flex-row justify-between h-fit w-full flex-wrap gap-7">
        @foreach($news as $title)
        <x-cards.news link="{{route('news.conten',['id'=>$title['id_news']])}}" img="{{$title['img']}}" title="{{$title['title']}}" summary="{{$title['summary']}}"></x-cards.news>
        @endforeach

    </div>

    <div class="flex justify-center ">
        <button onclick="loadMoreNews()" class="text-center bg-text-blue w-fit text-text-white font-bold text-xl px-8 py-3 rounded">Muat Lebih Banyak</button>
    </div>

</div>

@section('js')
<script>
    function appendNewsCard(parentElement, obj) {
        // Create a new section element
        var section = document.createElement("section");
        section.classList.add(
            "new-card"
            , "h-80"
            , "w-96"
            , "rounded"
            , "grow-0"
            , "shadow"
        );

        // Create an image element
        var img = document.createElement("img");
        img.classList.add("h-1/2", "w-full", "rounded");
        img.src = obj.img; // Set the src attribute with the value of  variable
        img.alt = ""; // Set the alt attribute to an empty string

        // Create a div element for the container
        var divContainer = document.createElement("div");
        divContainer.classList.add("flex", "flex-col", "h-fit", "w-full", "px-4");

        // Create a p element for the release text
        var releaseText = document.createElement("p");
        releaseText.classList.add("text-text-gray", "text-left");
        releaseText.textContent = obj.release; // Set the text content with the value of  variable

        // Create an anchor element for the title link
        var titleLink = document.createElement("a");
        titleLink.href = obj.link; // Set the href attribute with the value of  variable

        // Create an h1 element for the title text
        var titleText = document.createElement("h1");
        titleText.classList.add(
            "text-left"
            , "text-xl"
            , "line-clamp-2"
            , "font-bold"
        );
        titleText.textContent = obj.title; // Set the text content with the value of  variable

        // Create a p element for the summary text
        var summaryText = document.createElement("p");
        summaryText.classList.add("text-left", "line-clamp-2", "text-text-gray");
        summaryText.textContent = obj.summary; // Set the text content with the value of  variable

        // Append the elements to the appropriate parent elements
        section.appendChild(img);
        section.appendChild(divContainer);
        divContainer.appendChild(releaseText);
        divContainer.appendChild(titleLink);
        titleLink.appendChild(titleText);
        divContainer.appendChild(summaryText);

        // Append the section element to the desired location in the DOM
        parentElement.appendChild(section);
    }

    function loadMoreNews() {


        countNews = {{count($news)}};
        cardNews = document.getElementsByClassName('getElementsByClassName');
        container = document.getElementById("newsContainer");

        var xhr = new XMLHttpRequest();


        var url = "{{route('news.more',['start'=>" + countNews + "])}}";
        xhr.open('GET', url, true);


        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                for (let index = 0; index < response.length; index++) {
                    
                    obj = {
                        img: response[index].img
                        , release: response[index].release
                        , title: response[index].title
                        , summary: response[index].summary,
                    };
                    appendNewsCard(container, obj)
                }
            } else if (xhr.readyState === XMLHttpRequest.DONE) {
                console.error('Error retrieving data: ' + xhr.statusText);
            } else {
                this.innerHTML = "loading data"
            }
        };

        // Send the AJAX request
        xhr.send();



    }

</script>
@endsection
@endsection
