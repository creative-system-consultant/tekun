<?php

namespace App\Livewire\Module\Cif\MaklumatPeminjam;

use Livewire\Component;

class Simpanan extends Component
{
    public $currentIndex = 1;

    public function changeIndex($newIndex)
    {
        $this->currentIndex = $newIndex;
    }

    public function render()
    {
        return view('livewire.module.cif.maklumat-peminjam.simpanan');
    }
}
