<div class="z-40 flex items-center h-16 px-4 bg-white border-b border-gray-200 shadow-sm shrink-0 gap-x-4 sm:gap-x-6 sm:px-6 lg:px-8" x-data="{ openMenu: false }">
    <button type="button" class="-m-2.5 p-2.5 text-gray-400 lg:hidden" @click="open = true">
        <span class="sr-only">Open sidebar</span>
        <x-icon name="menu" class="w-6 h-6" />
    </button>

    <!-- Separator -->
    <div class="w-px h-6 bg-gray-900/10 lg:hidden" aria-hidden="true"></div>

    <div class="flex self-stretch flex-1 gap-x-4 lg:gap-x-6">
        <div class="relative flex items-center flex-1">
            <H2 class="text-lg font-semibold text-gray-500 ">SELAMAT DATANG KE SISTEM PENGURUSAN PEMBIAYAAN</H2>
        </div>
        <div class="flex items-center gap-x-4 lg:gap-x-6">
            <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
                <x-icon name="bell" class="w-6 h-6" />
            </button>

            <!-- Separator -->
            <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-900/10" aria-hidden="true"></div>

            <!-- Profile dropdown -->
            <div class="relative">
                <button type="button" @click="openMenu = !openMenu" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <span class="hidden lg:flex lg:items-center">
                        <span class="ml-4 text-sm font-semibold leading-6 text-gray-500" aria-hidden="true">{{ strtoupper(auth()->user()->name) }}</span>
                        <div class="w-5 h-5 ml-2 text-gray-400 transition-transform duration-500" :class="{'rotate-180': openMenu, 'rotate-0': !openMenu}">
                            <x-icon name="chevron-down" class="w-6 h-6" />
                        </div>
                    </span>
                </button>
                <div x-show="openMenu" @click.away="openMenu = false" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Your profile</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-1">Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>