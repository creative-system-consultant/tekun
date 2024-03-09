<?php

namespace App\Livewire\Module;

use Livewire\Component;

class Produk extends Component
{
    public function render()
    {
        return view('livewire.module.produk')->extends('layouts.main');
    }
}
