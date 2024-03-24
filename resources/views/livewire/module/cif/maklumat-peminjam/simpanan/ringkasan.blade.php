<div>
    <div class="grid grid-cols-2 gap-4">
        <x-card title="SIMPANAN">
            <x-table.main loading="true" loadingtarget="paginated">
                <x-slot name="thead">
                    <tr>
                        <x-table.header class="text-left" value="Bil." sort="" />
                        <x-table.header class="text-left" value="No. Akaun" sort="" />
                        <x-table.header class="text-left" value="Jumlah Simpanan" sort="" />
                        <x-table.header class="text-left" value="Baki Simpanan" sort="" />
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <x-table.body colspan="" class="text-xs font-medium text-center text-gray-700 ">
                            <p>1</p>
                        </x-table.body>
                        <x-table.body colspan="" class="text-xs font-medium text-center text-gray-700 ">
                            <p>36071212000083</p>
                        </x-table.body>
                        <x-table.body colspan="" class="text-xs font-medium text-right text-gray-700 ">
                            <p>0.00</p>
                        </x-table.body>
                        <x-table.body colspan="" class="text-xs font-medium text-right text-gray-700 ">
                            <p>0.00</p>
                        </x-table.body>
                    </tr>
                    <tr class="bg-gray-200">
                        <x-table.body colspan="3" class="text-xs font-semibold text-left text-gray-700 ">
                            <p>JUMLAH KESELURUHAN</p>
                        </x-table.body>
                        <x-table.body colspan="" class="text-xs font-semibold text-right text-gray-700 ">
                            <p>0.00</p>
                        </x-table.body>
                    </tr>
                </x-slot>
            </x-table.main>
        </x-card>

        <x-card title="PENGELUARAN SIMPANAN">
            <x-table.main loading="true" loadingtarget="paginated">
                <x-slot name="thead">
                    <tr>
                        <x-table.header class="text-left" value="Bil." sort="" />
                        <x-table.header class="text-left" value="No. Permohonan" sort="" />
                        <x-table.header class="text-left" value="Amaun (RM)" sort="" />
                        <x-table.header class="text-left" value="Tarikh" sort="" />
                        <x-table.header class="text-left" value="Status" sort="" />
                        <x-table.header class="text-left" value="Diluluskan Oleh" sort="" />
                    </tr>
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
