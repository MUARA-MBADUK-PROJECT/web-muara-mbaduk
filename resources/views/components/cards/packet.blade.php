<div>
    <div class="snap-normal snap-start cardsNews w-80 h-fit flex flex-col bg-white border rounded-md pb-8">
        <img class="w-full h-full mx-0 rounded-t-md" src="{{$packetImg}}" alt="">
        <div class="mt-9 mx-7 pb-7 grid justify-items-center border-b-2 border-text-gray">
            <p class="font-bold text-xl text-text-black">{{$packetName}}</p>
            <p class="text-xl text-text-blue">RP. {{$packetPrice}}</p>
        </div>
        <div class="ml-6 mt-9">
            {{$slot}}
        </div>

        <div class="mt-9 mx-6 bg-text-blue mb-10 w-auto h-fit rounded-md justify-center py-1 px-16 grid justify-items-center">
            <a class="w-full h-full text-white rounded" href="/packet/detail/{{$slug}}">
                
                    Selengkapnya
                
            </a>
        </div>

    </div>
</div>
