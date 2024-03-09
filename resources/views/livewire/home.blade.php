<div class="flex flex-col h-[80vh] space-y-6 overflow-hidden">
    <div class="flex flex-col space-y-4 h-[40%]">
        <div class="grid grid-cols-3 gap-4 h-full">
            <!-- Stats Section -->
            <div class="col-span-2 flex">
                <div class="grid grid-cols-4 gap-4 w-full">
                    <x-card>stat 1</x-card>
                    <x-card>stat 2</x-card>
                    <x-card>stat 3</x-card>
                    <x-card>stat 4</x-card>
                </div>
            </div>
            <!-- Bar Chart Section -->
            <div class="flex w-full">
                <x-card class="w-full">bar chart</x-card>
            </div>
        </div>
    </div>
    <div class="flex flex-col space-y-4 h-[60%]">
        <div class="grid grid-cols-3 gap-4 h-full">
            <!-- Line Chart Section -->
            <div class="col-span-2 flex">
                <x-card class="w-full">line chart</x-card>
            </div>
            <!-- Pie Chart Section -->
            <div class="flex w-full">
                <x-card class="w-full">pie chart</x-card>
            </div>
        </div>
    </div>
</div>
