<div class="flex flex-col h-[80vh] space-y-6 overflow-hidden">
    <div class="flex flex-col space-y-4 h-[40%]">
        <div class="grid grid-cols-3 gap-4 h-full">
            <!-- Stats Section -->
            <div class="col-span-2 flex">
                <div class="grid grid-cols-4 gap-4 w-full">
                    <x-card.stat-card colour="blue" icon="chat" stat="5082" description="Consultation"></x-card.stat-card>
                    <x-card.stat-card colour="blue" icon="presentation-chart-line" stat="2082" description="In Progress"></x-card.stat-card>
                    <x-card.stat-card colour="blue" icon="star" stat="1082" description="In Review"></x-card.stat-card>
                    <x-card.stat-card colour="blue" icon="shield-check" stat="1000" description="Report Done"></x-card.stat-card>
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
    <div class="flex flex-col space-y-4 h-[60%]">
        <div class="grid grid-cols-3 gap-4 h-full">
            <!-- Stats Section -->
            <div class="col-span-2 flex">
                <x-card class="w-full h-full">
                    <div class="p-3">
                        <x-chart :chart-id="'linechart'" type="line" :chartData="$barchartData" :options="['scales' => ['y' => ['beginAtZero' => true]]]" />
                    </div>
                </x-card>
            </div>
            <!-- Bar Chart Section -->
            <div class="flex w-full">
                <x-card class="w-full">
                    <div class="p-3">
                        <x-chart :chart-id="'piechart'" type="pie" :chartData="$barchartData" :options="['scales' => ['y' => ['beginAtZero' => true]]]" />
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</div>
