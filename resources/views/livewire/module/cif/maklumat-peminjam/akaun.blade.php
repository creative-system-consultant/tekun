<x-card>
    <div class="p-4" x-data="{ active: @entangle('currentIndex') }">
        <x-form.tab-underline>
            <x-form.tab-underline-item index='1' title="Akaun Semasa" wire:click="changeIndex(1)" />
            <x-form.tab-underline-item index='2' title="Tutup | Writeoff | Pindah Kawasan" wire:click="changeIndex(2)" />
            <x-form.tab-underline-item index='3' title="Info Kelulusan" wire:click="changeIndex(3)" />
            <x-form.tab-underline-item index='4' title="Maklumat Perniagaan" wire:click="changeIndex(4)" />
        </x-form.tab-underline>
    </div>
    <div class="mt-6">
        @switch($currentIndex)
            @case(1)
                <livewire:module.cif.maklumat-peminjam.akaun.akaun-semasa />
                @break
            @case(2)
                <livewire:module.cif.maklumat-peminjam.akaun.tutup-write-off-pindah />
                @break
            @case(3)
                <livewire:module.cif.maklumat-peminjam.akaun.info-kelulusan />
                @break
            @case(4)
                <livewire:module.cif.maklumat-peminjam.akaun.maklumat-perniagaan />
                @break
        @endswitch
    </div>
</x-card>
