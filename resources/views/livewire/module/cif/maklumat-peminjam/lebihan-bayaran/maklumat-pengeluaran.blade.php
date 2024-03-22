<div class="grid grid-cols-1 gap-4">
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-4">
            <x-card title="Senarai Pengeluaran">
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
        <div class="grid grid-cols-1 gap-4">
            <x-button primary label="Mohon" />
            <x-button secondary label="Re-print Surat Mohon" />
            <x-button negative label="Batal Cek Simpanan" />
        </div>
    </div>
    <div>
        <x-card title="Butiran Terperinci">
            <div class="grid grid-cols-3 gap-4">
                <x-input label="No. Permohonan" disabled />
                <x-input label="Tarikh Permohonan" disabled />
                <x-input label="Jenis Pengeluaran" disabled />
                <x-input label="Jumlah Amaun (RM)" disabled />
                <x-input label="Kaedah Bayaran" disabled />
                <x-input label="Sebab" disabled />
                <x-input label="No. Cek" disabled />
                <x-input label="Tarikh Cek" disabled />
                <x-input label="Tarikh Serah Cek" disabled />
                <x-input label="Status" disabled />
                <div class="col-span-2">
                    <x-input label="Sebab Pembatalan" disabled />
                </div>
                <x-input label="Diluluskan Oleh" disabled />
                <x-input label="Dibatalkan Oleh" disabled />
                <x-input label="Tarikh Dibatalkan" disabled />
                <x-input label="Taikh Diluluskan" disabled />
                <x-input label="Diproses Oleh" disabled />
            </div>
        </x-card>
    </div>
</div>
