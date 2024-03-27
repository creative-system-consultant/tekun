<header class="w-full" x-data="{ openMenu: false }">
    <div class="relative z-10 flex flex-shrink-0 h-16 bg-white border-b border-gray-200 shadow-sm md:bg-transparent md:border-none md:shadow-none">
        <button type="button" class="px-4 text-gray-500 border-r border-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden" @click="open = true">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
            </svg>
        </button>
        <div class="flex justify-between w-full px-4 md:px-0">
            <!-- Title Div with Polygon on the Right for desktop -->
            <div class="flex items-center w-full md:w-2/3 md:pl-8 md:mr-20 md:relative md:bg-gradient-to-r from-red-800 via-red-500 to-pink-500 md:shadow-xl">
                <H2 class="text-lg font-semibold text-gray-500 md:text-white">SELAMAT DATANG KE SISTEM PENGURUSAN PEMBIAYAAN</H2>
                <svg class="hidden md:block md:absolute md:right-0 md:h-full md:text-pink-500 md:transform md:translate-x-1/2 md:fill-current" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>
            </div>
            <!-- Icons Div with Polygon on the Left for desktop -->
            <div class="flex items-center justify-end ml-2 space-x-4 md:w-1/3 md:pr-8 sm:ml-6 sm:space-x-6 md:relative md:ml-10 md:bg-gradient-to-r from-blue-500 via-sky-500 to-sky-800 md:shadow-xl">
                <svg class="hidden md:block md:absolute md:left-0 md:h-full md:text-blue-500 md:transform md:-translate-x-1/2 md:fill-current" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>

                <button type="button" class="-m-2.5 text-gray-400 md:text-white hover:text-gray-500 md:hover:text-gray-200">
                    <x-icon name="bell" class="w-6 h-6" />
                </button>

                <!-- Separator -->
                <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-white" aria-hidden="true"></div>

                <!-- Profile dropdown -->
                <div class="relative flex-shrink-0">
                    <div>
                        <button type="button" @click="openMenu = !openMenu" class="flex text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                        </button>
                    </div>
                    <div x-cloak x-show="openMenu" @click.away="openMenu = false" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Sign out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
