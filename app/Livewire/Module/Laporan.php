<?php

namespace App\Livewire\Module;

use Livewire\Component;

class Laporan extends Component
{
    public function render()
    {
        return view('livewire.module.laporan')->extends('layouts.main');
    }
}
