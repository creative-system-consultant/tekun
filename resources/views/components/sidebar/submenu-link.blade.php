@props(['route'])

@php
$isCurrentRoute = Route::currentRouteName() === $route;
@endphp

<a href="{{ ($route === '#') ? '#' : route($route) }}" class="relative block text-gray-400 hover:text-white pl-6 hover:bg-gray-800 px-2 py-1 text-sm leading-6 font-semibold {{ $isCurrentRoute ? 'bg-gray-800 text-white' : '' }}">
    @if($isCurrentRoute)
    <div class="absolute left-0 inset-y-0 w-1 bg-red-600"></div>
    @endif
    {{ $slot }}
</a>
