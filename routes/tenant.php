<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('login', \App\Livewire\Tenant\Auth\Login::class)
            ->name('login');

        Route::get('register', \App\Livewire\Auth\Register::class)
            ->name('register');
    });

    Route::get('/', \App\Livewire\Tenant\Home\Welcome::class)->name('home');

    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function () {
        Route::get('/', \App\Livewire\Tenant\Dashboard\Index::class)->name('index');
    });
});
