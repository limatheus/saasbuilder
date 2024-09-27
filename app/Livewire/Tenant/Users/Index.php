<?php

namespace App\Livewire\Tenant\Users;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tenant.users.index')->extends('layouts.tenant.main');
    }
}
