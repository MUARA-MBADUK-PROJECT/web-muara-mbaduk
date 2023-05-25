{{-- PENYEWAAN --}}
<div class="bg-gray-100 pb-4  px-[5%]">
    <div class="flex gap-20 w-full overflow-x-auto h-auto">
        @foreach($packets as $package)
        <x-cards.packet packet-id="{{$package->id}}" packet-name="{{$package->title}}" slug="{{$package->slug}}" packet-price="{{$package->price}}" packet-img="{{$package->image}}">
            <ul>
                @foreach($package->products as $product)
                <li>{{$product->title}} {{$product->quantity}}</li>
                @endforeach
            </ul>
        </x-cards.packet>
        @endforeach
    </div>
    <div class=" flex justify-center gap-7  py-14 flex-wrap">
        <div>
            <p class="text-xl font-bold text-left">Belum menemukan paket yang sesuai dengan kebutuhanmu ?</p>
            <p>Tenang, kamu bisa membuat pesanan paket spesial sendiri</p>
        </div>
        <a href="{{route('packet.custom')}}">
            <div class="hover:cursor-pointer hover:bg-text-darkblue py-4 px-12 bg-text-blue rounded">
                <p class="text-text-white font-bold text-center">Buat Paket <img class="inline" src="{{asset('resources\icon\chevron-right.svg')}}" /></p>
            </div>
        </a>
    </div>
</div>