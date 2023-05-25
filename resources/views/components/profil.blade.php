@if(isset($profil))
<div class="flex pl-3 items-center md:order-2 py-2 md:-mt-4 md:ml-14 hover:cursor-pointer">
    <div class="p-2 flex justify-start bg-transparent  rounded justify-items-center gap-2" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" >
            {{-- <span class="sr-only">Open user menu</span> --}}
            <img class="w-8 h-8 rounded-full" src="{{$profil->images}}" alt="user photo">
            
        </button>
        <p class="text-text-white flex flex-col justify-center hover:cursor-pointer">{{$profil->fullname}}</p>
    </div>
    <!-- Dropdown menu -->
    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">{{$profil->fullname}}</span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{$profil->email}}</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
                <a href="{{route('dashboard')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="{{route('logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </li>
        </ul>
    </div>
</div>
@else
<a href="{{route("login.view")}}"><button class="text-text-white flex flex-col justify-center  font-bold md:ml-14 px-5 bg-transparent py-2 rounded hover:bg-blue-800 md:-mt-2">masuk</button></a>
@endif



