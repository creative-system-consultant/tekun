<?php

namespace App\Livewire\Table\Cif;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class WarisPasangan extends PowerGridComponent
{
    public function datasource(): ?Collection
    {
        return collect([
            ['id' => 1, 'name' => 'WAN NORHASLINDA BINTI WAN AB RAHMAN', 'icno' => '86007236406', 'relationship' => 'KAKAK',],
            ['id' => 2, 'name' => 'TAJUL ARIFFIN BIN NASSARUDDIN', 'icno' => '570549651235', 'relationship' => 'BAPA',],
            ['id' => 3, 'name' => 'JULIA BINTI ABDUL RANI', 'icno' => '591234596214', 'relationship' => 'IBU',],
        ]);
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('icno')
            ->add('relationship');
    }

    public function columns(): array
    {
        return [
            Column::make('Nama Waris', 'name')
                ->sortable(),

            Column::make('Kad Pengenalan', 'icno')
                ->sortable(),

            Column::make('Hubungan', 'relationship'),

            Column::action('Status')
        ];
    }
}
