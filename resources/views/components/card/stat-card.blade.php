<x-card class="relative">
    <div class="static flex flex-col items-center justify-center w-full h-full">
        <div class="relative rounded-full">
            <div class="absolute inset-0 {{ $bgColour }} opacity-30 rounded-full"></div>
            <div class="relative flex items-center justify-center p-5">
                <x-icon solid name="{{ $icon }}" class="w-6 h-6 {{ $iconColor }}" />
            </div>
        </div>
        <div class="mt-6">
            <h2 class="text-xl font-semibold ">{{ $stat }}</h2>
        </div>
        <div class="mt-1">
            <h2 class="text-base font-semibold text-gray-500 ">{{ $description }}</h2>
        </div>
        <div class="absolute top-0 right-0 pt-4 pr-3">
            <x-icon name="dots-vertical" class="w-6 h-6 text-gray-500" />
        </div>
    </div>
</x-card>
