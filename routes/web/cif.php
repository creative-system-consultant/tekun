<?php

use App\Livewire\Module\Cif\MaklumatPeminjam;
use App\Livewire\Module\Cif\SenaraiCtos;
use Illuminate\Support\Facades\Route;

Route::get('/maklumat-peminjam', MaklumatPeminjam::class)->name('maklumat-peminjam');
Route::prefix('maklumat-peminjam')->as('maklumat-peminjam.')->group(
    base_path('routes/web/cif/maklumat_peminjam.php'),
);

Route::get('/senarai-ctos', SenaraiCtos::class)->name('senarai-ctos');
