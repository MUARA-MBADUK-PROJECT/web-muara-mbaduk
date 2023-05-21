@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1 class="text-text-white font-bold text-5xl ">Paket untuk Camping</h1>
    </x-parts-header>
    <main class="p-24 ">

        <section class="flex">
            <img class="w-80 h-80 grow-0" src="{{$packet->image}}" alt="">
            <section class="ml-20 flex-col justify-start">
                <h2 class="text-4xl font-bold capitalize">{{$packet->title}}</h2>
                <h3 class="text-text-blue text-4xl ">RP. {{$packet->price}}</h3>
                <summary class="text-text-black list-none max-w-xl mt-6">{{$packet->summary}}</summary>
                <a href="{{route('dashboard')}}"><button class="bg-text-blue text-left py-4 px-10 rounded text-white font-bold my-6">Pesan Sekarang</button></a>
                <div>
                    <h3 class="font-bold pb-6">Description</h3>
                    <p class="pb-6">{{$packet->description}}</p>
                    <ul class="pl-4 list-disc">
                        @foreach($packet->products as $list)
                        <li>{{$list->title}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </section>
        <section class="mt-20">
            <h2 class="font-bold text-xl mb-14">Ulasan</h2>
            <div id="container" class="flex flex-col gap-6">
                @foreach($reviews as $review)
                <article class="flex ">
                    <div class="w-24 shrink-0 h-24">
                        <img class="rounded-full  w-full h-full " src="{{$review->images}}" alt="">
                    </div>
                    <div class="mt-4 ml-8">
                        <h3>{{$review->fullname}}</h3>
                        <div class="flex">
                            @for($i = 0; $i < 5; $i++) <svg class="{{$i<intval($review->star)? 'fill-yellow-300 stroke-yellow-300' : 'fill-none stroke-gray-600'}} " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="F7AE40" stroke-width="0.5" stroke-linecap="sharp" stroke-linejoin="sharp" class="feather feather-star">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                @endfor

                        </div>
                        <p class="text-text-black mt-4">{{$review->description}}</p>
                    </div>
                </article>
                @endforeach
            </div>
            {{-- <div class="mt-20 flex justify-center">
                <button onclick="loadMoreComment(this)" class="py-4 px-8 bg-text-blue text-text-white font-bold rounded">Muat Lebih Banyak</button>
            </div> --}}
        </section>

    </main>
    @endsection
    @section('js')
    <script>
        function appendNewsComment(parentElement, data) {
            // Create article element
            const article = document.createElement('article');
            article.classList.add('flex');

            // Create div element for image
            const imgDiv = document.createElement('div');
            imgDiv.classList.add('w-24', 'shrink-0', 'h-24');
            article.appendChild(imgDiv);

            // Create img element
            const img = document.createElement('img');
            img.classList.add('rounded-full', 'w-full', 'h-full');
            img.src = data.img;
            img.alt = '';
            imgDiv.appendChild(img);

            // Create div element for text content
            const textDiv = document.createElement('div');
            textDiv.classList.add('mt-4', 'ml-8');
            article.appendChild(textDiv);

            // Create h3 element for name
            const nameH3 = document.createElement('h3');
            nameH3.textContent = data.name;
            textDiv.appendChild(nameH3);

            // Create div element for star rating
            const starDiv = document.createElement('div');
            starDiv.classList.add('flex');
            textDiv.appendChild(starDiv);

            // Loop to create svg elements for star rating
            for (let i = 0; i < 5; i++) {
                const starSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                starSvg.setAttribute('width', '24');
                starSvg.setAttribute('height', '24');
                starSvg.setAttribute('viewBox', '0 0 24 24');
                starSvg.setAttribute('fill', i <= data.star ? 'yellow' : 'none');
                starSvg.setAttribute('stroke', i <= data.star ? 'F7AE40' : 'gray');
                starSvg.setAttribute('stroke-width', '0.5');
                starSvg.setAttribute('stroke-linecap', 'sharp');
                starSvg.setAttribute('stroke-linejoin', 'sharp');
                starSvg.classList.add('feather', 'feather-star');

                const starPolygon = document.createElementNS('http://www.w3.org/2000/svg', 'polygon');
                starPolygon.setAttribute('points', '12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2');
                starSvg.appendChild(starPolygon);

                starDiv.appendChild(starSvg);
            }

            // Create p element for comment
            const commentP = document.createElement('p');
            commentP.classList.add('text-text-black', 'mt-4');
            commentP.textContent = data.comment;
            textDiv.appendChild(commentP);

            parentElement.appendChild(article);

        }

        function loadMoreComment(param) {
            // cardNews = document.getElementsByClassName('getElementsByClassName');
            container = document.getElementById("container");

            var xhr = new XMLHttpRequest();


            var url = "{{route('packet.more')}}";
            xhr.open('GET', url, true);


            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    for (let index = 0; index < response.length; index++) {

                        appendNewsComment(container, response[index]);
                    }
                } else if (xhr.readyState === XMLHttpRequest.DONE) {
                    console.error('Error retrieving data: ' + xhr.statusText);
                } else {
                    param.innerHTML = "loading data"
                }
            };

            // Send the AJAX request
            xhr.send();

            param.hidden = true;



        }

    </script>
    @endsection
