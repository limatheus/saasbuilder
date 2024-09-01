<?php

use App\Http\Controllers\Admin\Tenants\ImpersonateController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::view('/', 'welcome')->name('home');

        Route::middleware('guest')->group(function () {
            Route::get('login', Login::class)
                ->name('login');

            Route::get('register', Register::class)
                ->name('register');
        });

        Route::get('password/reset', Email::class)
            ->name('password.request');

        Route::get('password/reset/{token}', Reset::class)
            ->name('password.reset');

        Route::middleware('auth')->group(function () {
            Route::get('email/verify', Verify::class)
                ->middleware('throttle:6,1')
                ->name('verification.notice');

            Route::get('password/confirm', Confirm::class)
                ->name('password.confirm');
        });

        Route::middleware('auth')->group(function () {
            Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
                ->middleware('signed')
                ->name('verification.verify');

            Route::post('logout', LogoutController::class)
                ->name('logout');
        });

        Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {

            Route::get('/', \App\Livewire\Admin\Dashboard\Index::class)->name('index');

            Route::group(['prefix' => 'tenants', 'as' => 'tenants.'], function () {
                Route::get('/', \App\Livewire\Admin\Tenants\Index::class)->name('index');
                Route::get('/impersonate/{tenant}', ImpersonateController::class)->name('impersonate');
            });

        });
    });


    Route::get('teste', function () {

        $tenant = \App\Models\Tenant::find('omega');

        $user = $tenant->run(function ($tenant) {
            return \App\Models\User::first();
        });

        $token = tenancy()->impersonate($tenant, $user->id, tenant_route($tenant->id . '.' . env('APP_DOMAIN'), 'tenant.dashboard.index'));

        $domain = 'http://' . $tenant->id . '.' . env('APP_DOMAIN');

        return redirect("{$domain}" . "/impersonate/{$token->token}");

        //return redirect(tenant_route($tenant->id.'.'.env('APP_DOMAIN'), 'tenant.impersonate'),['token' => $token->token] );
    });

}


