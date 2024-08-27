<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstLoginController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        if (tenant('token') === $request->token) {
            $user = User::where('email', tenant('email'))->firstOrFail();

            tenant()->update(['token' => null]);

            Auth::login($user, false);


        }else{
            return abort(403);
        }

        return redirect(route('tenant.dashboard.index'));
    }
}
