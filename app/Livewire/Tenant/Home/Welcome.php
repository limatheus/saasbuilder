<?php

namespace App\Livewire\Tenant\Home;

use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.tenant.home.welcome')->extends('layouts.app');
    }
}
