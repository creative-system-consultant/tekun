<?php

namespace App\Livewire\Module\Cif\MaklumatPeminjam;

use App\Models\Customer;
use Livewire\Component;

class Main extends Component
{
    public $currentIndex = 1;
    public Customer $customer;
    public $name;

    public function mount()
    {
        $this->name = $this->customer->CUST_NAME;
    }

    public function changeIndex($newIndex)
    {
        $this->currentIndex = $newIndex;
    }

    public function render()
    {
        return view('livewire.module.cif.maklumat-peminjam.main')->extends('layouts.main');
    }
}
