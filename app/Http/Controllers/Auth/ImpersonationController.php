<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Stancl\Tenancy\Database\Models\ImpersonationToken;

class ImpersonationController extends Controller
{
    public static $ttl = 60; // seconds
    public function __invoke($token){
        $token = $token instanceof ImpersonationToken ? $token : ImpersonationToken::findOrFail($token);

        if (((string) $token->tenant_id) !== ((string) tenant()->getTenantKey())) {
            abort(403);
        }

        $ttl = $ttl ?? static::$ttl;

        if ($token->created_at->diffInSeconds(Carbon::now()) > $ttl) {
            abort(403);
        }

        Auth::guard($token->auth_guard)->loginUsingId($token->user_id);

        if($token->impersonator_id){
            session()->put('impersonator_id', $token->impersonator_id);
            //Cookie::queue('impersonator_id', $token->impersonator_id, 2628000);
        }

        $token->delete();

        return redirect($token->redirect_url);
    }
}
