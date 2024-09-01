<?php

namespace App\Livewire\Admin\Tenants;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.tenants.index')->extends('layouts.admin.main');
    }
}
