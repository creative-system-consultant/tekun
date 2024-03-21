<?php

namespace App\Livewire\Table\Cif;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Detail;
use PowerComponents\LivewirePowerGrid\Facades\Rule;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;

final class Penama extends PowerGridComponent
{
    public function datasource(): ?Collection
    {
        return collect([
            ['id' => 1, 'pinjaman' => 'Pinjaman 1', 'amount' => 15000],
        ]);
    }

    public function setUp(): array
    {
        return [
            Detail::make()
                ->view('table.cif.penama.detail')
                ->showCollapseIcon(),
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('pinjaman')
            ->add('amount_format', function ($entry) {
                return number_format($entry->amount, 2);
            });
    }

    public function columns(): array
    {
        return [
            Column::make('Pinjaman', 'pinjaman')
                ->sortable(),

            Column::make('Jumlah', 'amount_format')
                ->sortable(),

            Column::action('Lihat Terperinci'),
        ];
    }

    public function actions(): array
    {
        return [
            Button::add('detail')
                ->slot('Detail')
                ->class('bg-indigo-500 rounded-md cursor-pointer text-white px-3 py-2 m-1 text-sm')
                ->toggleDetail(),
        ];
    }

    public function actionRules(): array
    {
        return [
            Rule::rows()
                ->detailView('table.cif.penama.detail'),
        ];
    }
}
