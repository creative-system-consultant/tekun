<x-card>
    <div class="p-4" x-data="{ active: @entangle('currentIndex') }">
        <x-form.tab-underline>
            <x-form.tab-underline-item index='1' title="Ringkasan" wire:click="changeIndex(1)" />
            <x-form.tab-underline-item index='2' title="Maklumat Pengeluaran" wire:click="changeIndex(2)" />
        </x-form.tab-underline>
    </div>
    <div class="mt-6">
        @switch($currentIndex)
            @case(1)
            <livewire:module.cif.maklumat-peminjam.lebihan-bayaran.ringkasan />
            @break
        @case(2)
            <livewire:module.cif.maklumat-peminjam.lebihan-bayaran.maklumat-pengeluaran />
            @break
        @endswitch
    </div>
</x-card>
