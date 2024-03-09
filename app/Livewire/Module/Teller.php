<?php

namespace App\Livewire\Module;

use Livewire\Component;

class Teller extends Component
{
    public function render()
    {
        return view('livewire.module.teller')->extends('layouts.main');
    }
}
