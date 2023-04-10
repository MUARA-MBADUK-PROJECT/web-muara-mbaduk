<div>
    <div class="w-screen h-auto bg-no-repeat  bg-cover" style="background-image: url('{{Vite::asset('resources/images/header-image.png')}}')">
        <x-parts.navbar/>
        <div class="flex justify-center py-40 text-text-white text-4xl font-bold">
            {{$slot}}
        </div>
    </div>
</div>