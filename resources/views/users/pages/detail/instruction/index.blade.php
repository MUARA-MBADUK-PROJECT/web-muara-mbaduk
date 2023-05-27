<div id="Instruksi">
    <div class="flex justify-between flex-wrap">
        <div>
            <h3 class="text-text-black text-xl font-bold">Kode Order</h3>
            <p>{{$data->order_id}}</p>
        </div>
        <div>
            <h3 class="text-text-black text-xl font-bold">Status Pembayaran</h3>
            <x-status.badge status="{{$data->status}}" />
        </div>
    </div>
    <div class="mt-16">
        @if( $data->status == "settlement" )
            @if($review->data == [])
                @include('users.pages.detail.instruction.review.post')
            @else
                @include('users.pages.detail.instruction.review.put')
            @endif
        @else
            <div>
            @if($data->type=='cash')
                @include('users.pages.detail.instruction.cash')
            @else
                @include('users.pages.detail.instruction.bank')
            @endif
            </div>
        @endif
    </div>
</div>