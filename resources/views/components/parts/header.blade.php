<div>
    <div class="w-full h-fit bg-no-repeat header  bg-" style="background-image: url('{{asset('resources/images/header-image.png')}}')">
        <x-parts.navbar/>
        <div class="flex justify-center py-40 flex-col text-center text-text-white text-4xl font-bold">
            {{$slot}}
        </div>
    </div>
</div>