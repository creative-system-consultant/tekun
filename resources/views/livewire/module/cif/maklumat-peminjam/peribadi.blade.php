<x-card>
    <div class="p-4">
        <div class="grid grid-cols-3 gap-4">
            <x-input label="Pangkat" disabled />
            <x-input label="ID Pengenalan Lain" disabled />
            <x-select label="Jenis ID Lain" :options="['']" disabled />
            <x-input label="Tarikh Lahir" disabled />
            <x-input label="Status Usahawan" disabled />
            <x-select label="Jantina" :options="['LELAKI']" disabled />
            <x-select label="Bangsa / Kaum" :options="['MELAYU']" disabled />
            <x-input label="Suku Kaum" disabled />
            <x-select label="Status Perkahwinan" :options="['MELAYU']" disabled />
            <x-select label="Warganegara" :options="['MELAYU']" disabled />
            <x-select label="Kategori Pekerjaan" :options="['MELAYU']" disabled />
            <x-select label="Kumpulan Pendapatan" :options="['MELAYU']" disabled />
            <div>
                <label class="block mr-2 text-sm font-medium text-gray-500 dark:text-gray-400">Staff Tekun?</label>
                <div class="flex mt-4">
                    <div class="mr-4 ">
                        <x-radio id="right-label" label="YA" disabled />
                    </div>
                    <div class="text-gray-500">
                        <x-radio id="right-label" label="TIDAK" disabled />
                    </div>
                </div>
            </div>
            <x-datetime-picker label="Tarikh Bekerja" placeholder="00-00-0000" parse-format="DD-MM-YYYY" display-format="DD-MM-YYYY" without-time=true disabled />
            <x-input label="Nama Majikan" disabled />
            <x-input label="Tempoh Berkhidmat" disabled />
            <x-input label="Majikan Terdahulu" disabled />
        </div>
    </div>
</x-card>
