<div>
    <div>
        <div class="navbar w-full h-28 flex justify-between">
            <div class="logo h-auto w-auto my-6 ml-32">
                <img src="{{Vite::asset('resources\images\logo-muara-mbaduk.png')}}" alt="">
            </div>
            <div class="nav my-7 mr-28 flex">
                <ul class="flex justify-center space-x-14 my-auto hover:cursor-pointer">
                    <a href=""><li class="inline text-text-white my-auto">Beranda</li></a>
                    <a href=""><li class="inline text-text-white ">Eksplore</li></a>
<<<<<<< HEAD
                    <a href="{{route('packet.list')}}"><li class="inline text-text-white ">Paket Camping</li></a>
                    <a href="{{route('about')}}"><li class="inline text-text-white ">Tentang</li></a>
                </ul>
                <button class="text-text-white  font-bold ml-14 px-5 bg-text-blue my-2 rounded hover:bg-blue-800">masuk</button>
=======
                    <a href=""><li class="inline text-text-white ">Paket Camping</li></a>
                    <a href="/about"><li class="inline text-text-white ">Tentang</li></a>
                </ul> 
                <a href="{{route("login")}}" ><button class="text-text-white  font-bold ml-14 px-5 bg-text-blue my-2 rounded hover:bg-blue-800">masuk</button></a>
>>>>>>> 471ff79adc8ac2d6048e2aea8a2fbd8f556921a2
            </div>
        </div>
    </div>
</div>