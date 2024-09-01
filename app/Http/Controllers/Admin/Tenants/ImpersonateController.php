<?php

namespace App\Http\Controllers\Admin\Tenants;

use App\Http\Controllers\Controller;
use App\Models\ImpersonationToken;
use App\Models\Tenant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImpersonateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Tenant $tenant): RedirectResponse
    {
        $user = $tenant->run(function ($tenant) {
            return \App\Models\User::first();
        });

        $token =ImpersonationToken::create([
            'tenant_id' => $tenant->id,
            'user_id' => $user->id,
            'impersonator_id' => auth()->user()->id,
            'redirect_url' => tenant_route($tenant->id . '.' . env('APP_DOMAIN'), 'tenant.dashboard.index')

        ]);
        //$token = tenancy()->impersonate($tenant, $user->id, tenant_route($tenant->id . '.' . env('APP_DOMAIN'), 'tenant.dashboard.index'));

        $domain = 'http://' . $tenant->id . '.' . env('APP_DOMAIN');

        return redirect("{$domain}" . "/impersonate/{$token->token}");
    }
}
