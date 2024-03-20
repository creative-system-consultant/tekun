<div class="space-y-6 ">
    <div class="flex flex-col space-y-4 ">
        <div class="grid h-full grid-cols-1 xl:grid-cols-3 gap-y-4 xl:gap-4">
            <!-- Stats Section -->
            <div class="flex col-span-2">
                <div class="grid w-full grid-cols-2 gap-4 lg:grid-cols-4">
                    <x-card.stat-card bgColour="bg-blue-600" iconColor="text-blue-600" icon="chat" stat="5082" description="Consultation" />
                    <x-card.stat-card bgColour="bg-blue-600" iconColor="text-blue-600" icon="presentation-chart-line" stat="2082" description="In Progress" />
                    <x-card.stat-card bgColour="bg-blue-600" iconColor="text-blue-600" icon="star" stat="1082" description="In Review" />
                    <x-card.stat-card bgColour="bg-blue-600" iconColor="text-blue-600" icon="shield-check" stat="1000" description="Report Done" />
                </div>
            </div>
            <!-- Bar Chart Section -->
            <div class="flex w-full">
                <x-card class="w-full">
                    <div class="p-3">
                        <x-chart :chart-id="'barChart'" type="bar" :chartData="$barchartData" :options="['scales' => ['y' => ['beginAtZero' => true]]]" />
                    </div>
                </x-card>
            </div>
        </div>
    </div>
    <div class="flex flex-col space-y-4">
        <div class="grid h-full grid-cols-1 xl:grid-cols-3 gap-y-4 xl:gap-4">
            <!-- Stats Section -->
            <div class="flex col-span-2">
                <x-card class="w-full h-full">
                    <div class="p-3  h-[20rem]">
                        <x-chart :chart-id="'linechart'" type="line" :chartData="$barchartData" :options="['scales' => ['y' => ['beginAtZero' => true]]]" />
                    </div>
                </x-card>
            </div>
            <!-- Bar Chart Section -->
            <div class="flex w-full">
                <x-card class="w-full h-full">
                    <div class="p-3 h-[20rem]">
                        <x-chart :chart-id="'piechart'" type="pie" :chartData="$barchartData" :options="['scales' => ['y' => ['beginAtZero' => true]]]" />
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</div>
