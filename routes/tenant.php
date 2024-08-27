<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\FirstLoginController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Features\UserImpersonation;
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
])->as('tenant.')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('login', \App\Livewire\Tenant\Auth\Login::class)
            ->name('login');

        Route::get('first-login', FirstLoginController::class)
            ->name('first.login');

        Route::get('register', \App\Livewire\Auth\Register::class)
            ->name('register');
    });

    Route::get('/', \App\Livewire\Tenant\Home\Welcome::class)->name('home');

    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function () {
        Route::get('/', \App\Livewire\Tenant\Dashboard\Index::class)->name('index');
    });


    Route::get('/auth/logout', function () {
        auth()->logout();

        return redirect('/');

    })->name('logout');

    Route::get('/impersonate/{token}', function ($token) {
        return UserImpersonation::makeResponse($token);
    })->name('impersonate');


});

Route::group(['prefix' => config('sanctum.prefix', 'sanctum')], static function () {
    Route::get('/csrf-cookie', [\Laravel\Sanctum\Http\Controllers\CsrfCookieController::class, 'show'])
        ->middleware([
            'web',
            InitializeTenancyByDomain::class // Use tenancy initialization middleware of your choice
        ])->name('sanctum.csrf-cookie');
});


