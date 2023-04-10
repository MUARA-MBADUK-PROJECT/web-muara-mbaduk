<div>
    <div class="w-screen h-auto bg-no-repeat  bg-cover" style="background-image: url('{{Vite::asset('resources/images/header-image.png')}}')">
        <x-parts.navbar/>
        <div class="flex flex-col justify-center py-40 text-center text-text-white text-4xl font-bold">
            {{$slot}}
        </div>
    </div>
</div>