<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div x-show="open" class="relative z-50 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">
    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-900/80" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."></div>
    <div class="fixed inset-0 flex">
        <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative mr-16 flex w-full max-w-xs flex-1" @click.away="open = false">
            <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on off-canvas menu state." class="absolute left-full top-0 flex w-16 justify-center pt-5">
                <button type="button" class="-m-2.5 p-2.5" @click="open = false">
                    <span class="sr-only">Close sidebar</span>
                    <x-icon name="x" class="w-6 h-6 text-white" />
                </button>
            </div>

            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 pb-4 ring-1 ring-white/10">
                <div class="flex h-16 shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=500" alt="Your Company">
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                <li>
                                    <a href="#" class="bg-gray-800 text-white group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-800 text-white&quot;, Default: &quot;text-gray-400 hover:text-white hover:bg-gray-800&quot;">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-800 text-white&quot;, undefined: &quot;text-gray-400 hover:text-white hover:bg-gray-800&quot;">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                                        </svg>
                                        Team
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-800 text-white&quot;, undefined: &quot;text-gray-400 hover:text-white hover:bg-gray-800&quot;">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"></path>
                                        </svg>
                                        Projects
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-800 text-white&quot;, undefined: &quot;text-gray-400 hover:text-white hover:bg-gray-800&quot;">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"></path>
                                        </svg>
                                        Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-800 text-white&quot;, undefined: &quot;text-gray-400 hover:text-white hover:bg-gray-800&quot;">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75"></path>
                                        </svg>
                                        Documents
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-800 text-white&quot;, undefined: &quot;text-gray-400 hover:text-white hover:bg-gray-800&quot;">
                                        <svg class="h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z"></path>
                                        </svg>
                                        Reports
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
                            <ul role="list" class="-mx-2 mt-2 space-y-1">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-800 text-white&quot;, Default: &quot;text-gray-400 hover:text-white hover:bg-gray-800&quot;">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">H</span>
                                        <span class="truncate">Heroicons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-800 text-white&quot;, undefined: &quot;text-gray-400 hover:text-white hover:bg-gray-800&quot;">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">T</span>
                                        <span class="truncate">Tailwind Labs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-white hover:bg-gray-800 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold" x-state-description="undefined: &quot;bg-gray-800 text-white&quot;, undefined: &quot;text-gray-400 hover:text-white hover:bg-gray-800&quot;">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white">W</span>
                                        <span class="truncate">Workcation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="mt-auto">
                            <a href="#" class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-400 hover:bg-gray-800 hover:text-white">
                                Settings
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 pb-4">

        <div class="flex h-16 shrink-0 items-center justify-center">
            <x-logo class="h-16 w-auto" />
        </div>
        <nav class="flex flex-1 flex-col">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                <li>
                    <ul role="list" class=" space-y-1">
                        <x-sidebar.nav-item routeName="home">
                            <x-slot name="icon">
                                <x-icon name="home" class="w-6 h-6" />
                            </x-slot>
                            Dashboard
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item routeName="firasat">
                            <x-slot name="icon">
                                <x-icon name="book-open" class="w-6 h-6" />
                            </x-slot>
                            Firasat
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item routeName="teller">
                            <x-slot name="icon">
                                <x-icon name="receipt-refund" class="w-6 h-6" />
                            </x-slot>
                            Teller | Resit
                        </x-sidebar.nav-item>

                        <x-sidebar.nav-item-sub label="CIF" openOnRoutePrefix="cif">
                            <x-slot name="icon">
                                <x-icon name="user-group" class="w-6 h-6" />
                            </x-slot>
                            <x-sidebar.submenu-link route="cif.senarai-ctos">Senarai CTOS</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Account Maintenance</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Produk CBRM</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Produk TBRS</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">CBRM 2.0 | SPIN 2.0 | SPIM</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">E-Mandate</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Takaful | Perkeso</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">PMGi</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Akaun Perhebat</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Pelarasan Pukal</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Senarai Kutipan PSAT</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Moratorium Sakit Kronik / Bencana</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">PS Version 2.0</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Usahawan Banjir</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Lebihan Bayaran</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Carian Cek</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Tagging Selian PT</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Upload Surat Perjanjian</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">JPP</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Pengeluaran Simpanan</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">FMS Reconciliation</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Carian Peminjam</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Permohonan Lulus</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Tukar Kata Laluan</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Set Pencetak</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Penjadualan Semula</x-sidebar.submenu-link>
                            <x-sidebar.submenu-link route="#">Penangguhan Teman 2.0</x-sidebar.submenu-link>
                        </x-sidebar.nav-item-sub>
                        <x-sidebar.nav-item routeName="admin">
                            <x-slot name="icon">
                                <x-icon name="lock-closed" class="w-6 h-6" />
                            </x-slot>
                            Admin
                        </x-sidebar.nav-item>
                        <x-sidebar.nav-item routeName="produk">
                            <x-slot name="icon">
                                <x-icon name="library" class="w-6 h-6" />
                            </x-slot>
                            Produk
                        </x-sidebar.nav-item>
                        <x-sidebar.nav-item routeName="laporan">
                            <x-slot name="icon">
                                <x-icon name="document-report" class="w-6 h-6" />
                            </x-slot>
                            Laporan
                        </x-sidebar.nav-item>
                    </ul>
                </li>

                <li class="mt-auto">
                    <a href="#" class="flex items-center gap-x-3 pl-4 p-2 text-sm leading-6 font-semibold text-gray-400 hover:text-white hover:bg-gray-800">
                        <x-icon name="cog" class="w-6 h-6" />
                        Tetapan
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>