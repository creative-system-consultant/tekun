<div class="p-2 ">
    <div class="grid grid-cols-2 gap-3">
        @for($i = 0; $i < 2; $i++)
        <x-card>
            <x-input label="Nama Penama" disabled />
            <div class="grid grid-cols-2 gap-2 mt-2">
                <x-input label="K.P. Baru" disabled />
                <x-input label="K.P. Lama" disabled />
            </div>
            <div class="mt-2">
                <x-input label="Hubungan" disabled />
            </div>
            <div class="mt-4">
                <x-card title="Alamat penama">
                    <div class="grid grid-cols-1 gap-2">
                        <x-input label="" disabled />
                        <x-input label="" disabled />
                        <x-input label="" disabled />
                    </div>
                    <div class="grid grid-cols-2 gap-2 mt-2">
                        <x-input label="Poskod" disabled />
                        <x-select label="Negeri" :options="['LELAKI']" disabled />
                    </div>
                </x-card>
            </div>
        </x-card>
        @endfor
    </div>
</div>
