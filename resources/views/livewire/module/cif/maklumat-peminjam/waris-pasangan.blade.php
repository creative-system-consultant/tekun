<div>
    <x-card>
        <div class="p-2">
            <livewire:table.cif.waris-pasangan />
        </div>
    </x-card>

    <div class="mt-4">
        <x-card>
            <div class="grid grid-rows-1 gap-4">
                <x-card>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-2 ">
                            <x-input label="Nama Waris" disabled />
                        </div>
                        <x-input label="Kad Pengenalan" disabled />
                        <x-select label="Kategori Waris" :options="['']" disabled />
                        <x-input label="Hubungan" disabled />
                        <x-select label="Status" :options="['']" disabled />
                        <x-datetime-picker label="Tarikh Lahir" placeholder="00-00-0000" parse-format="DD-MM-YYYY" display-format="DD-MM-YYYY" without-time=true disabled />
                        <x-input label="Jawatan" disabled />
                        <x-select label="Agama" :options="['']" disabled />
                    </div>
                </x-card>
                <div class="grid grid-cols-2 gap-4">
                    <x-card title="Alamat Rumah">
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <x-input disabled />
                                <div class="mt-2">
                                    <x-input disabled />
                                </div>
                                <div class="mt-2">
                                    <x-input disabled />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <x-input label="Poskod" disabled />
                                <x-input label="Tel. Rumah" disabled />
                            </div>
                            <x-select label="Negeri" :options="['']" disabled />
                        </div>
                    </x-card>
                    <x-card title="Alamat Pejabat">
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <x-input disabled />
                                <div class="mt-2">
                                    <x-input disabled />
                                </div>
                                <div class="mt-2">
                                    <x-input disabled />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <x-input label="Poskod" disabled />
                                <x-input label="Tel. Pejabat" disabled />
                            </div>
                            <x-select label="Negeri" :options="['']" disabled />
                        </div>
                    </x-card>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <x-card title="Maklumat Akaun Bank">
                        <div class="grid grid-cols-2 gap-4">
                            <x-input label="No. Akaun" disabled />
                            <x-select label="Nama Bank" :options="['']" disabled />
                        </div>
                    </x-card>
                    <x-card title="Maklumat Tambahan">
                        <div class="grid grid-cols-1 gap-4">
                            <x-checkbox id="right-label" label="BERDAFTAR SEBAGAI PENERIMA WASIAT" disabled />
                            <x-input label="No. Telefon Bimbit" disabled />
                        </div>
                    </x-card>
                </div>
            </div>
        </x-card>
    </div>
</div>
