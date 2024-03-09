<?php

use App\Livewire\Module\Cif\SenaraiCtos;
use Illuminate\Support\Facades\Route;

Route::get('/senarai-ctos', SenaraiCtos::class)->name('senarai-ctos');
