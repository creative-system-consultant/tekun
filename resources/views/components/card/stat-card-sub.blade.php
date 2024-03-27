<li class="flex col-span-1 rounded-md shadow-sm">
    <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white {{ $colour }} rounded-l-md">{{ $no }}</div>
    <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
        <div class="flex-1 px-4 py-2 text-sm text-wrap">
            <a href="#" class="font-medium text-gray-900 hover:text-gray-600">{{ $title }}</a>
        </div>
        <div class="flex-shrink-0 pr-2">
            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <x-icon name="external-link" class="w-5 h-5" />
            </button>
        </div>
    </div>
</li>
