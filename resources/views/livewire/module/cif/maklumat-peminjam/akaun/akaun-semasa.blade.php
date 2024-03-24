<div>
    <x-card title="LEBIHAN BAYARAN">
        <x-table.main loading="true" loadingtarget="paginated">
            <x-slot name="thead">
                <tr>
                    <x-table.header class="text-left" value="Bil. Pinjaman" sort="" />
                    <x-table.header class="text-left" value="No. Akaun" sort="" />
                    <x-table.header class="text-left" value="Amaun Lulus" sort="" />
                    <x-table.header class="text-left" value="Baki Pembiayaan" sort="" />
                    <x-table.header class="text-left" value="Baki Pokok" sort="" />
                    <x-table.header class="text-left" value="Caj Belum Bayar" sort="" />
                    <x-table.header class="text-left" value="Jumlah Simpanan" sort="" />
                </tr>
                <tr class="">
                    <x-table.header colspan="3" class="text-center" value="Jenis Pembiayaan" sort="" />
                    <x-table.header class="text-center" value="Amaun Provision" sort="" />
                    <x-table.header colspan="3" class="text-center" value="Status Akaun" sort="" />
                </tr>
            </x-slot>
            <x-slot name="tbody">
                <tr>
                    <x-table.body colspan="7" class="text-xs font-medium text-center text-gray-700 ">
                        <p>NO DATA</p>
                    </x-table.body>
                </tr>
            </x-slot>
        </x-table.main>
    </x-card>
</div>