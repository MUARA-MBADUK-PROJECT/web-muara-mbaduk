{{-- PENYEWAAN --}}
<div class="bg-gray-100 py-28  px-[5%]">
    <div class="py-16 h-fit w-full">
        <h2 class="text-center text-text-black font-bold text-4xl">Kami menyediakan <span class="text-text-blue">paket</span>
            untuk berkemah
        </h2>
        <p class="text-center text-text-gray text-xl">
            Kamu tidak perlu bingung untuk memulai berkemah
            kami menyediakan berbagai kebutuhanya
        </p>
    </div>
    <div class="flex justify-center">
        <div id="packages" class="flex justify-start snap-x gap-20 w-fit overflow-x-auto h-auto scroll-px-80">
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
    </div>
</div>
