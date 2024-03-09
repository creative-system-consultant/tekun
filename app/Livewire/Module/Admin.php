<?php

namespace App\Livewire\Module;

use Livewire\Component;

class Admin extends Component
{
    public function render()
    {
        return view('livewire.module.admin')->extends('layouts.main');
    }
}
