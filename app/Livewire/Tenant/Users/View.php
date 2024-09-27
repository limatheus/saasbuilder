<?php

namespace App\Livewire\Tenant\Users;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.tenant.users.view')->extends('layouts.tenant.main');
    }
}
