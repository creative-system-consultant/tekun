<?php

use App\Livewire\Module\Cif\MaklumatPeminjam\Main;
use Illuminate\Support\Facades\Route;

Route::get('/{customer}', Main::class)->name('main');
