@props(['routeName' => null, 'title' => null])

<a href="{{ $routeName ? route($routeName) : '#' }}" class="mt-1 flex items-center px-3 py-2 text-sm font-medium  rounded-md  group {{ Route::currentRouteName() == $routeName || Str::startsWith(Route::currentRouteName(), $routeName) ? 'text-white bg-gray-900' : 'text-gray-400 hover:text-white hover:bg-gray-800' }}">

    <span>{{ $title }}</span>
</a>
