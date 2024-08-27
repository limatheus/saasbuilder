<?php

namespace App\Livewire\Auth;

use App\Models\Tenant;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $first_name = '';

    /** @var string */
    public $last_name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $domain = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';

    public function register()
    {
        $domain = $this->domain;

        $this->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'domain' => ['required','min:4', Rule::unique('domains')->where(function ($builder) use ($domain) {
                $builder->where('domain', $domain.'.'.env('APP_DOMAIN'));
            })],
            'domain' => ['required', 'min:4', Rule::unique('tenants', 'id')],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);


        $tenant = Tenant::create(['id' => $this->domain, 'name' => $this->domain,   'email' => $this->email, 'token' => generateNanoId(length:32)]);

        $tenant->domains()->create([
            'domain' => $this->domain.'.'.env('APP_DOMAIN'),
        ]);

        $tenant->run(function () {
            $user = User::create([
                'email' => $this->email,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'password' => Hash::make($this->password),
            ]);

            event(new Registered($user));
        });

        return redirect(tenant_route($domain.'.'.env('APP_DOMAIN'), 'tenant.first.login', ['token' => $tenant->token]));

    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
