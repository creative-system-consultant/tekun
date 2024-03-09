@props(['label' => null, 'icon' => null, 'openOnRoutePrefix' => null])

@php
$shouldOpenSubmenu = $openOnRoutePrefix ? Str::startsWith(Route::currentRouteName(), $openOnRoutePrefix) : false;
@endphp

<div x-data="{ openSubmenu: {{ $shouldOpenSubmenu ? 'true' : 'false' }} }">
    <div @click="openSubmenu = !openSubmenu" class="cursor-pointer text-gray-400 hover:text-white hover:bg-gray-800 px-4 flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
        {{ $icon }}
        {{ $label }}
        <div class="ml-auto transition-transform duration-500" :class="{'rotate-180': openSubmenu, 'rotate-0': !openSubmenu}">
            <x-icon name="chevron-down" class="w-6 h-6" />
        </div>
    </div>
    <div x-show="openSubmenu" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="mt-2 space-y-2">
        {{ $slot }}
    </div>
</div>
