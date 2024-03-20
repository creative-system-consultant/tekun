<!-- Narrow sidebar -->
<div class="hidden overflow-y-auto bg-gray-900 w-28 md:block">
    <div class="flex flex-col items-center w-full py-6">
        <div class="flex items-center flex-shrink-0">
            <x-logo class="w-auto h-16" />
        </div>
        <div class="flex-1 w-full px-2 mt-6 space-y-1">
            <x-sidebar.nav-item routeName="home">
                <x-slot name="icon">
                    <x-icon name="home" class="w-6 h-6" />
                </x-slot>
                <span class="mt-2">Dashboard</span>
            </x-sidebar.nav-item>
            <x-sidebar.nav-item routeName="firasat">
                <x-slot name="icon">
                    <x-icon name="book-open" class="w-6 h-6" />
                </x-slot>
                <span class="mt-2">Firasat</span>
            </x-sidebar.nav-item>
            <x-sidebar.nav-item routeName="teller">
                <x-slot name="icon">
                    <x-icon name="receipt-refund" class="w-6 h-6" />
                </x-slot>
                <span class="mt-2">Teller | Resit</span>
            </x-sidebar.nav-item>
            <x-sidebar.nav-item routeName="">
                <x-slot name="icon">
                    <x-icon name="user-group" class="w-6 h-6" />
                </x-slot>
                <span class="mt-2">CIF</span>
            </x-sidebar.nav-item>
            <x-sidebar.nav-item routeName="admin">
                <x-slot name="icon">
                    <x-icon name="lock-closed" class="w-6 h-6" />
                </x-slot>
                <span class="mt-2">Admin</span>
            </x-sidebar.nav-item>
            <x-sidebar.nav-item routeName="produk">
                <x-slot name="icon">
                    <x-icon name="library" class="w-6 h-6" />
                </x-slot>
                <span class="mt-2">Produk</span>
            </x-sidebar.nav-item>
            <x-sidebar.nav-item routeName="laporan">
                <x-slot name="icon">
                    <x-icon name="document-report" class="w-6 h-6" />
                </x-slot>
                <span class="mt-2">Laporan</span>
            </x-sidebar.nav-item>
            <x-sidebar.nav-item routeName="">
                <x-slot name="icon">
                    <x-icon name="cog" class="w-6 h-6" />
                </x-slot>
                <span class="mt-2">Tetapan</span>
            </x-sidebar.nav-item>
        </div>
    </div>
</div>

<!-- Mobile menu -->
<div x-cloak x-show="open" class="relative z-20 md:hidden" role="dialog" aria-modal="true"x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" >
    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-900/80" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state.">
    </div>
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>
    <div class="fixed inset-0 z-40 flex" x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." @click.away="open = false">
        <div class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-gray-700">
            <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on off-canvas menu state." class="absolute right-0 p-1 top-1 -mr-14">
                <button type="button" class="flex items-center justify-center w-12 h-12 rounded-full focus:outline-none focus:ring-2 focus:ring-white" @click="open = false">
                    <x-icon name="x" class="w-6 h-6 text-white" />
                    <span class="sr-only">Close sidebar</span>
                </button>
            </div>

            <div class="flex items-center flex-shrink-0 px-4">
                <x-logo class="w-auto h-16" />
            </div>
            <div class="flex-1 h-0 px-2 mt-5 overflow-y-auto">
                <nav class="flex flex-col h-full">
                    <div class="space-y-1">
                        <x-sidebar.nav-item routeName="home">
                            <x-slot name="icon">
                                <x-icon name="home" class="w-6 h-6 mr-3 text-indigo-300 group-hover:text-white" />
                            </x-slot>
                            <span>Dashboard</span>
                        </x-sidebar.nav-item>
                        <x-sidebar.nav-item routeName="firasat">
                            <x-slot name="icon">
                                <x-icon name="book-open" class="w-6 h-6" />
                            </x-slot>
                            <span>Firasat</span>
                        </x-sidebar.nav-item>
                        <x-sidebar.nav-item routeName="teller">
                            <x-slot name="icon">
                                <x-icon name="receipt-refund" class="w-6 h-6" />
                            </x-slot>
                            <span>Teller | Resit</span>
                        </x-sidebar.nav-item>
                        <x-sidebar.nav-item routeName="">
                            <x-slot name="icon">
                                <x-icon name="user-group" class="w-6 h-6" />
                            </x-slot>
                            <span>CIF</span>
                        </x-sidebar.nav-item>
                        <x-sidebar.nav-item routeName="admin">
                            <x-slot name="icon">
                                <x-icon name="lock-closed" class="w-6 h-6" />
                            </x-slot>
                            <span>Admin</span>
                        </x-sidebar.nav-item>
                        <x-sidebar.nav-item routeName="produk">
                            <x-slot name="icon">
                                <x-icon name="library" class="w-6 h-6" />
                            </x-slot>
                            <span>Produk</span>
                        </x-sidebar.nav-item>
                        <x-sidebar.nav-item routeName="laporan">
                            <x-slot name="icon">
                                <x-icon name="document-report" class="w-6 h-6" />
                            </x-slot>
                            <span>Laporan</span>
                        </x-sidebar.nav-item>
                        <x-sidebar.nav-item routeName="">
                            <x-slot name="icon">
                                <x-icon name="cog" class="w-6 h-6" />
                            </x-slot>
                            <span>Tetapan</span>
                        </x-sidebar.nav-item>
                    </div>
                </nav>
            </div>
        </div>

        <div class="flex-shrink-0 w-14" aria-hidden="true">
        </div>
    </div>
</div>
