<?php

namespace App\Livewire;

use App\Models\AccountMaster;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    public function render()
    {
        $barchartData = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];

        return view('livewire.home', [
            'barchartData' => $barchartData,
        ])->extends('layouts.main');
    }
}
