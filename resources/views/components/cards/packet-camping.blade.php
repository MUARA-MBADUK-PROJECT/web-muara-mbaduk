<div>
    <div class="w-80 h-750 flex-none bg-white">
        <img class="w-80 mx-0 " src="{{Vite::asset('resources\images\paket-1.png')}}" alt="">
        <div class="mt-9 mx-7 pb-7 grid justify-items-center border-b-2 border-text-gray">
            <p class="font-bold text-xl text-text-black">{{$packetName}}</p>
            <p class="text-xl text-text-blue">RP. {{$packetName}}</p>
        </div>
        <div class="ml-6 mt-9">
            {{$slot}}
        </div>

        <div class="mt-9 mx-6 mb-10 w-auto h-12 rounded-md">
            <a href="/packet/detail/{{$packetId}}">
                <button class="bg-text-blue w-full h-full text-white rounded">
                    Selengkapnya
                </button>
            </a>
        </div>

    </div>
</div>
