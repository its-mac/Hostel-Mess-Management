<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle the incoming request by checking the supplied guards.
     *
     * If the user is authenticated with any of the guards, the request
     * continues and the guard is set as the default for the rest of the
     * lifecycle (so "auth()->user()" works correctly). Otherwise the
     * visitor is redirected to the login page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed ...$guards
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::shouldUse($guard);
                return $next($request);
            }
        }

        return redirect()->route('auth.login');
    }
}
