<x-card class="relative">
    <div class="static h-full w-full flex flex-col justify-center items-center">
        <div class="relative rounded-full">
            <div class="absolute inset-0 bg-{{ $colour }}-600 opacity-30 rounded-full"></div>
            <div class="relative p-5 flex items-center justify-center">
                <x-icon solid name="{{ $icon }}" class="w-6 h-6 text-{{ $colour }}-600" />
            </div>
        </div>
        <div class="mt-6">
            <h2 class=" font-semibold text-xl">{{ $stat }}</h2>
        </div>
        <div class="mt-1">
            <h2 class=" font-semibold text-base text-gray-500">{{ $description }}</h2>
        </div>
        <div class="absolute top-0 right-0 pt-4 pr-3">
            <x-icon name="dots-vertical" class="w-6 h-6 text-gray-500" />
        </div>
    </div>
</x-card>