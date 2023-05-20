@extends('layouts.user.app')
@section('conten')
<x-parts.header>
    <h1>Detail Wisatawan</h1>
</x-parts.header>
{{-- {{dd($ticket)}} --}}
<div class="h-auto w-screen bg-white flex p-28 justify-center flex-col">
    <form action="{{route('order.paymentMethod')}}" method="POST">
        @csrf
        @foreach($ticket as $key => $value)
        @if($value['count']>0)
        <div class="flex justify-between flex-row px-3 mt-20">
            <div class="text-left">
                <h2 class="text-text-black font-bold text-xl">Detail {{$value['data']->category}} | {{$value['data']->title}}</h2>
                <h3 class="text-text-gray text-base mt-2">Masukan beberapa informasi mengenai data diri kamu</h3>
            </div>
            <div class="text-right">
                <h2 class="text-xl font-bold">{{$value['count']}}</h2>
            </div>
        </div>
        @for($i = 0; $i < $value['count']; $i++) <div class="mt-12 flex justify-between px-3 border-b rounded-sm border-text-gray p-7">
            <div class="flex space-x-4 mx-3">
                <svg width="76px" height="76px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M15 5V8" stroke="#323232" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M15 16V19" stroke="#323232" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M15 11V13" stroke="#323232" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M4.4416 10.4557C3.79252 9.73379 2.96682 8.93468 3.07899 7.97035C3.35831 5.56902 4.46022 5 7.648 5H16.352C19.5398 5 20.6417 5.56902 20.921 7.97035C21.0332 8.93468 20.2075 9.73379 19.5584 10.4557C19.2424 10.8072 19 11.3037 19 12C19 12.6963 19.2424 13.1928 19.5584 13.5443C20.2075 14.2662 21.0332 15.0653 20.921 16.0296C20.6417 18.431 19.5398 19 16.352 19H7.648C4.46022 19 3.35831 18.431 3.07899 16.0296C2.96682 15.0653 3.79252 14.2662 4.4416 13.5443C4.75761 13.1928 5 12.6963 5 12C5 11.3037 4.75761 10.8072 4.4416 10.4557Z" stroke="#323232" stroke-width="2"></path>
                    </g>
                </svg>
                <div class="text-base flex flex-col justify-center font-normal ">
                    <h2><input type="text" name="ticket[{{$value['data']->id}}][{{$i}}][name]" placeholder="belum ada" required class="border-0"></h2>
                    <h2 class="mt-1"><input type="text" name="ticket[{{$value['data']->id}}][{{$i}}][identity]" placeholder="belum ada" required class="border-0"></h2>
                </div>
            </div>
            <div class="mx-3">
                <button class="flex justify-center h-8 w-28 bg-text-blue hover:bg-blue-700 text-white text-xs font-bold rounded py-2">
                    ISI DATA<svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
            </div>


</div>
@endfor
@else

@endif
@endforeach


<button type="submit" class="h-14 w-full bg-text-blue hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-12">
    Berikutnya
</button>
</form>
</div>




@section('js')
<script>
    var currentDate = new Date();

    // Get the current date components
    var year = currentDate.getFullYear();
    var month = currentDate.getMonth() + 1; // Month is zero-indexed, so add 1 to get the correct month
    var day = currentDate.getDate();

    $(function() {
        $("#datepicker").datepicker({
            minDate: currentDate
            , dateFormat: "dd MM yy"
        });
    });

</script>
@endsection
@endsection
