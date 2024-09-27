<?php

namespace App\Livewire\Datatables\Tenant;


use App\Custom\CustomColumn;
use App\Models\User;
use Arm092\LivewireDatatables\Column;
use Illuminate\Database\Eloquent\Model;
use Arm092\LivewireDatatables\Livewire\LivewireDatatable;

class Users extends LivewireDatatable
{
    public string|null|Model $model = User::class;

    public function getColumns(): array|Model
    {
        return [
            Column::name('full_name')
                ->label(__('Name'))
                ->defaultSort('asc')
                ->searchable(),

            Column::name('first_name')->hide(),

            Column::name('last_name')->hide(),

            CustomColumn::name('email') ->view('components.copy-to-clipboard')->label(__('Email'))->searchable(),


            CustomColumn::name('roles.name')->view('components.role-view')->label(__('Role')),

            CustomColumn::name('status')->view('components.status-view')->label(__('Status')),

            CustomColumn::name('id')
                ->label(__('Actions'))
                ->view('components.actions-table', 'tenant.dashboard.users', ['view', 'delete'], 'full_name'),
        ];
    }
}
