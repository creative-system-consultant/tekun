<?php

namespace App\Livewire\Module\Cif;

use Livewire\Component;

class MaklumatPeminjam extends Component
{
    public function render()
    {
        return view('livewire.module.cif.maklumat-peminjam')->extends('layouts.main');
    }
}
