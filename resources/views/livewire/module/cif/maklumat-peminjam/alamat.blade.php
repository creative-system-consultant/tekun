<div class="grid grid-cols-2 gap-6 ">
    @for($i = 0; $i < 4; $i++)
        <x-card>
            <div class="p-4">
                <div class="grid grid-cols-2 gap-4">
                    <x-select label="Jenis Alamat" :options="['LELAKI']" disabled />
                    <div class="flex items-center justify-end ">
                        <x-checkbox id="right-label" label="Surat-Menyurat" disabled />
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 mt-4">
                    <div class="grid grid-cols-1 col-span-2 gap-4 ">
                        <div>
                            <x-input label="Alamat" disabled />
                            <div class="mt-2">
                                <x-input disabled />
                            </div>
                            <div class="mt-2">
                                <x-input disabled />
                            </div>
                        </div>
                        <div class="flex">
                            <div class="mr-1">
                                <x-input label="Poskod" disabled />
                            </div>
                            <div class="ml-1">
                                <x-input label="Bandar" disabled />
                            </div>
                        </div>
                        <x-select label="Negeri" :options="['LELAKI']" disabled />
                        <x-input label="Emel" disabled />
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <x-select label="Status Premis" :options="['']" disabled />
                        <x-input label="No Telefon 1" disabled />
                        <x-input label="No Telefon 2" disabled />
                        <x-input label="No Fax" disabled />
                        <x-input label="No Telefon Lain" disabled />
                    </div>
                </div>
            </div>
        </x-card>
    @endfor
</div>
