@props(['alpineName' => null, 'icon' => null, 'routePrefix' => null])

<div @click="{{ $alpineName }} = true">
    <a href="#" class="hidden md:flex flex-col items-center w-full p-3 text-xs font-medium rounded-md group {{ Str::startsWith(Route::currentRouteName(), $routePrefix) ? 'text-white bg-gray-700' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
        {{ $icon }}
        {{ $slot }}
    </a>
</div>
