<div>
    <div class="grid grid-cols-3 gap-4">
        <x-card title="LEBIHAN BAYARAN">
            <x-table.main loading="true" loadingtarget="paginated">
                <x-slot name="thead">
                    <x-table.header class="text-left" value="Bil." sort="" />
                    <x-table.header class="text-left" value="No. Akaun" sort="" />
                    <x-table.header class="text-left" value="Jumlah Lebihan Bayaran" sort="" />
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <x-table.body colspan="3" class="text-xs font-medium text-center text-gray-700 ">
                            <p>NO DATA</p>
                        </x-table.body>
                    </tr>
                </x-slot>
            </x-table.main>
        </x-card>
        <div class="col-span-2">
            <x-card title="PENGELUARAN LEBIHAN BAYARAN">
                <x-table.main loading="true" loadingtarget="paginated">
                    <x-slot name="thead">
                        <x-table.header class="text-left" value="Bil." sort="" />
                        <x-table.header class="text-left" value="No. Permohonan" sort="" />
                        <x-table.header class="text-left" value="Amaun (RM)" sort="" />
                        <x-table.header class="text-left" value="Tarikh" sort="" />
                        <x-table.header class="text-left" value="Status" sort="" />
                        <x-table.header class="text-left" value="Diluluskan Oleh" sort="" />
                    </x-slot>
                    <x-slot name="tbody">
                        <tr>
                            <x-table.body colspan="6" class="text-xs font-medium text-center text-gray-700 ">
                                <p>NO DATA</p>
                            </x-table.body>
                        </tr>
                    </x-slot>
                </x-table.main>
            </x-card>
        </div>
    </div>
</div>
