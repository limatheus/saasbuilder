<?php

namespace App\Livewire\Datatables\Admin;

use App\Custom\CustomColumn;
use App\Models\Tenant;
use Arm092\LivewireDatatables\Column;
use Arm092\LivewireDatatables\DateColumn;
use Illuminate\Database\Eloquent\Model;
use Arm092\LivewireDatatables\Livewire\LivewireDatatable;

class Tenants extends LivewireDatatable
{
    public string|null|Model $model = Tenant::class;

    public function getColumns(): array|Model
    {
        return [
            Column::name('name')
                ->label(__('Name'))
                ->defaultSort('asc')
                ->searchable(),

            DateColumn::raw('created_at')
                ->label(__('Created at'))
                ->format('d/m/Y H:i:s'),

            CustomColumn::name('id')
                ->label(__('Actions'))
                ->view('components.actions-table', 'admin.tenants', ['impersonate'], 'name')
        ];
    }
}
