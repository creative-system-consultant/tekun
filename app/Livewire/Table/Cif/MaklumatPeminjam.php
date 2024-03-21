<?php

namespace App\Livewire\Table\Cif;

use App\Models\Customer;
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

final class MaklumatPeminjam extends PowerGridComponent
{
    public string $primaryKey = 'CUSTOMER.CUST_ID';
    public string $sortField = 'CUSTOMER.CUST_ID';

    public int $perPage = 5;
    public array $perPageValues = [5, 10, 25, 50 ];

    public function setUp(): array
    {
        return [
            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Customer::query()->where('PARTY_TYPE', 'I');
    }

    // public function fields(): PowerGridFields
    // {
    //     return PowerGrid::fields()
    //         ->add('name')
    //         ->add('name_lower', fn (Customer $model) => strtolower(e($model->name)))
    //         ->add('created_at')
    //         ->add('created_at_formatted', fn (Customer $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    // }

    public function columns(): array
    {
        return [
            Column::make('Kad Pengenalan', 'IC_BREG_NO')
                ->searchable(),

            Column::make('Kad Pengenalan Lama', 'IC_BREG_NO2')
                ->hidden(),

            Column::make('Nama Peminjam', 'CUST_NAME')
                ->searchable(),

            Column::make('Branch', 'BRANCH')
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('IC_BREG_NO'),
            Filter::inputText('IC_BREG_NO2'),
            Filter::inputText('CUST_NAME'),
        ];
    }

    #[On('edit')]
    public function edit($rowId): void
    {
        $this->redirectRoute('cif.maklumat-peminjam.main', ['customer' => $rowId]);
    }

    public function actions(Customer $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: '.$row->CUST_ID)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->CUST_ID])
        ];
    }

    /*
    public function actionRules(Customers $row): array
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
