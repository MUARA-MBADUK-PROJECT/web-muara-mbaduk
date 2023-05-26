<div class="flex justify-center">
    <div id="packages" class="flex justify-start snap-x gap-20 w-fit overflow-x-auto h-auto scroll-px-80">
        @foreach($packages as $package)
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
