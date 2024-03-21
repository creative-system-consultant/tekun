<div>
    <x-card>
        <div>
            <!-- mobile tab -->
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <select id="tabs" name="tabs" class="block w-full border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500">
                    <option>My Account</option>
                    <option>Company</option>
                    <option selected>Team Members</option>
                    <option>Billing</option>
                </select>
            </div>

            <!-- desktop tab -->
            <div class="hidden sm:block" x-data="{ active: @entangle('currentIndex') }">
                <nav class="flex space-x-4" aria-label="Tabs">
                    <x-form.tab index=1 title="Peminjam" wire:click="changeIndex(1)" />
                    <x-form.tab index=2 title="Peribadi" wire:click="changeIndex(2)" />
                    <x-form.tab index=3 title="Alamat" wire:click="changeIndex(3)" />
                    <x-form.tab index=4 title="Waris / Pasangan" wire:click="changeIndex(4)" />
                    <x-form.tab index=5 title="Penama" wire:click="changeIndex(5)" />
                    <x-form.tab index=6 title="Galeri Imej" wire:click="changeIndex(6)" />
                    <x-form.tab index=7 title="Akaun" wire:click="changeIndex(7)" />
                    <x-form.tab index=8 title="Simpanan" wire:click="changeIndex(8)" />
                    <x-form.tab index=9 title="Lebihan Bayaran" wire:click="changeIndex(9)" />
                    <x-form.tab index=10 title="Takaful" wire:click="changeIndex(10)" />
                    <x-form.tab index=11 title="Wasiat" wire:click="changeIndex(11)" />
                </nav>
            </div>
        </div>
    </x-card>

    <div class="mt-6">
        @switch($currentIndex)
            @case(1)
                <livewire:module.cif.maklumat-peminjam.peminjam />
                @break
            @case(2)
                <livewire:module.cif.maklumat-peminjam.peribadi />
                @break
            @case(3)
                <livewire:module.cif.maklumat-peminjam.alamat />
                @break
            @case(4)
                <livewire:module.cif.maklumat-peminjam.waris-pasangan />
                @break
            @case(5)
                <livewire:module.cif.maklumat-peminjam.penama />
                @break
        @endswitch
    </div>
</div>