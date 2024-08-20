<?php

namespace App\Livewire\Tenant\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tenant.dashboard.index')->extends('layouts.tenant.main');
    }
}
