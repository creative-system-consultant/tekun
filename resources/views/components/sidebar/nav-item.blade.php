@props(['routeName' => null, 'icon' => null])

<li class="relative group">
    @if(Route::currentRouteName() === $routeName)
    <div class="absolute left-0 inset-y-0 w-1 bg-red-600"></div>
    @endif

    <a href="{{ $routeName ? route($routeName) : '#' }}" class="flex items-center gap-x-3 pl-4 p-2 text-sm leading-6 font-semibold {{ Route::currentRouteName() === $routeName ? 'text-white bg-gray-800' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
        @if($icon)
        {{ $icon }}
        @endif
        {{ $slot }}
    </a>
</li>
