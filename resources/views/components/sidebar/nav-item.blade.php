@props(['routeName' => null, 'icon' => null])

<div>
    <!-- Desktop Sidebar Item -->
    <a href="{{ $routeName ? route($routeName) : '#' }}" class="hidden md:flex flex-col items-center w-full p-3 text-xs font-medium rounded-md group {{ Route::currentRouteName() === $routeName ? 'text-white bg-gray-700' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">
        @if($icon)
        {{ $icon }}
        @endif
        {{ $slot }}
    </a>

    <!-- Mobile Sidebar Menu Item -->
    <a href="{{ $routeName ? route($routeName) : '#' }}" class="flex items-center px-3 py-2 text-sm font-medium text-indigo-100 rounded-md hover:bg-indigo-800 hover:text-white group md:hidden">
        @if($icon)
        {{ $icon }}
        @endif
        <span>{{ $slot }}</span>
    </a>
</div>