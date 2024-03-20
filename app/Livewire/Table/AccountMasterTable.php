<?php

namespace App\Livewire\Table;

use App\Jobs\ExportAccountMasterData;
use App\Models\AccountMaster;
use Illuminate\Bus\Batch;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\Rule;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class AccountMasterTable extends PowerGridComponent
{
    use WithExport;

    public string $primaryKey = 'account_masters.ACTID';
    public string $sortField = 'account_masters.ACTID';

    //Custom per page
    public int $perPage = 10;
    //Custom per page values
    public array $perPageValues = [10, 25, 50, 100, 500];

    public function setUp(): array
    {
        $this->showCheckBox('ACTID');

        return [
            // Exportable::make('Report')
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV)
            //     ->queues(5),
            Header::make()
                ->includeViewOnTop('components.datatable.header-top')
                ->showSearchInput()
                ->showToggleColumns(),
            Footer::make()
                ->showPerPage($this->perPage, $this->perPageValues)
                ->showRecordCount(),
        ];
    }

    public function customExport()
    {
        ExportAccountMasterData::dispatch();
    }

    public function datasource(): Builder
    {
        return AccountMaster::query();
        // ->where('account_no', 'LIKE', '%130107030%');
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('ACTID')
            ->add('ACCOUNT_NO')
            ->add('APPROVED_DATE')
            ->add('APPROVED_DATE_FORMATTED', fn (AccountMaster $model) => Carbon::parse($model->APPROVED_DATE)->format('d/m/Y'));
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'ACTID')
                ->searchable()
                ->sortable(),

            Column::make('Account No', 'ACCOUNT_NO')
                ->searchable()
                ->sortable(),

            Column::make('Approved Date', 'APPROVED_DATE')
                ->hidden(),

            Column::make('Approved Date', 'APPROVED_DATE_FORMATTED', 'APPROVED_DATE')
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('ACCOUNT_NO'),
            Filter::datepicker('APPROVED_DATE_FORMATTED', 'APPROVED_DATE'),
        ];
    }

    #[On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(AccountMaster $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: '.$row->ACTID)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->ACTID])
        ];
    }

    /*
    public function actionRules(AccountMaster $row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
