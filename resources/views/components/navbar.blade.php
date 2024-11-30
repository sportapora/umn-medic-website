<nav class="bg-white">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-10 md:mx-16 lg:mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/logos/medic-logo.png') }}" class="h-16" alt="UMN Medical Center Logo"/>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col md:items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{route('home')}}"
                       class="block py-2 px-3  {{request()->routeIs('home') ? 'bg-medic-primary md:text-medic-primary text-white' : 'text-gray-900 hover:text-medic-primary'}}  rounded md:bg-transparent  md:p-0"
                       aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{route('about')}}"
                       class="block py-2 px-3  {{request()->routeIs('about') ? 'bg-medic-primary md:text-medic-primary text-white' : 'text-gray-900 hover:text-medic-primary'}}  rounded md:bg-transparent  md:p-0">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{route('proker')}}"
                       class="block py-2 px-3  {{request()->routeIs('proker') ? 'bg-medic-primary md:text-medic-primary text-white' : 'text-gray-900 hover:text-medic-primary'}}  rounded md:bg-transparent  md:p-0">
                        Program Kerja
                    </a>
                </li>
                <li>
                    <a href="{{route('gallery')}}"
                       class="block py-2 px-3  {{request()->routeIs('gallery') ? 'bg-medic-primary md:text-medic-primary text-white' : 'text-gray-900 hover:text-medic-primary'}}  rounded md:bg-transparent  md:p-0">
                        Gallery
                    </a>
                </li>
                @auth
                <li>
                    <a href="{{route('attendance.index')}}"
                       class="block py-2 px-3  {{request()->routeIs('attendance.*') ? 'bg-medic-primary md:text-medic-primary text-white' : 'text-gray-900 hover:text-medic-primary'}}  rounded md:bg-transparent  md:p-0">
                        Attendance
                    </a>
                </li>
                @endauth
                <li>
                    <a href="{{route('login')}}"
                       class="block py-2 px-3  {{request()->routeIs('login') ? 'bg-medic-primary md:text-medic-primary text-white' : 'text-gray-900 hover:text-medic-primary'}}  rounded md:bg-transparent  md:p-0">
                        Login
                    </a>
                </li>
                <li class="mt-4 md:mt-0">
                    <a href="{{route('contactUs')}}"
                        class="text-white mt-2 md:mt-0 bg-medic-primary focus:ring-4 hover:bg-green-800 focus:ring-green-800 font-medium rounded-lg px-5 py-2.5 focus:outline-none">Contact
                        Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
