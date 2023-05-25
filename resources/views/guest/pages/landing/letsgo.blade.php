{{-- LETS GO --}}
<div class="bg-white p-10 w-full h-fit">
    <div class="flex justify-center">
        <div class="bg-text-blue w-full h-auto px-[10%] py-12 flex flex-col rounded">
            <div>
                <h2 class="text-4xl text-text-white font-bold text-center">Sekarang giliran kamu</h2>
            </div>
            <div class="mt-1">
                <p class="text-2xl text-text-white text-center">untuk merasakan pengalaman wisata alam
                    yang tak terlupakan di Muara Mbaduk</p>
            </div>
            <a href="{{route('packet.list')}}">
                <button class="inline-flex space-x-1.5 hover:bg-blue-800 hover:cursor-pointer items-center justify-center w-full h-14 px-6 pt-3.5 pb-3 bg-blue-900 rounded mt-12">
                    <p class="text-xl font-bold text-white">Pesan Sekarang</p>
                    <img class="w-6 h-6 rounded-lg" src="{{asset('resources\icon\chevron-right.svg')}}" />
                </button>
            </a>
        </div>
    </div>
</div>