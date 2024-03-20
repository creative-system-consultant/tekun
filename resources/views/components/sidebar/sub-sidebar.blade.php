<div x-show="{{ $alpineName }}" class="relative z-30" aria-labelledby="slide-over-title" x-ref="dialog" aria-modal="true" x-cloak>
    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 z-20 overflow-hidden">
            <div class="fixed inset-y-0 left-0 flex max-w-full pt-16 pointer-events-none pl-28">
                <div x-show="{{ $alpineName }}" x-transition:enter="ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="ease-in duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="w-screen max-w-md pointer-events-auto" @click.away="{{ $alpineName }} = false">
                    <div class="flex flex-col h-full py-6 overflow-y-scroll bg-gray-700 shadow-xl">
                        <div class="px-4 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-base font-semibold leading-6 text-white" id="slide-over-title">{{ $title }}</h2>
                                <div class="flex items-center ml-3 h-7">
                                    <button type="button" class="relative text-gray-400 bg-white rounded-md hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2" @click="{{ $alpineName }} = false">
                                        <span class="absolute -inset-2.5"></span>
                                        <x-icon name="x" class="w-6 h-6" />
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex-1 px-4 mt-6 sm:px-6">
                            <div class="relative block w-full h-full p-4 text-center border-2 border-gray-300 border-dashed rounded-lg hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
