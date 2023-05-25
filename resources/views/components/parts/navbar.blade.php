

<nav class="bg-none border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto mr-0 p-4" style="background-image: url()">
        <a href="{{route('landing')}}"><img src="{{asset('resources\images\logo-muara-mbaduk.png')}}" alt=""></a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6 stroke-text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-none md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-none dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{route('landing')}}" class="block py-2 pl-3 pr-4 text-text-white rounded md:bg-transparent md:text-text-white md:p-0 dark:text-text-white md:dark:text-text-white" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{route('landing')}}#explore" class="block py-2 pl-3 pr-4 text-text-white rounded md:bg-transparent md:text-text-white md:p-0 dark:text-text-white md:dark:text-text-white">explore</a>
                </li>
                <li>
                    <a href="{{route('packet.list')}}" class="block py-2 pl-3 pr-4 text-text-white rounded md:bg-transparent md:text-text-white md:p-0 dark:text-text-white md:dark:text-text-white">Paket Camping</a>
                </li>
                <li>
                    <a href="{{route('pages',['slug'=>'about'])}}" class="block py-2 pl-3 pr-4 text-text-white rounded md:bg-transparent md:text-text-white md:p-0 dark:text-text-white md:dark:text-text-white">About</a>
                </li>
                <li class="">
                    <x-profil />
                </li>
                
            </ul>
            
        </div>
    </div>
</nav>
