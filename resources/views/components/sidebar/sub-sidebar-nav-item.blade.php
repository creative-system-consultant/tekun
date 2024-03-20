@props(['routeName' => null, 'title' => null])

<a href="{{ $routeName ? route($routeName) : '#' }}" class="flex items-center px-3 py-2 text-sm font-medium text-indigo-100 rounded-md hover:bg-gray-800 hover:text-white group">
    <span>{{ $title }}</span>
</a>
