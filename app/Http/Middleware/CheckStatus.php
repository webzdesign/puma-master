<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (auth()->user()->status == '1') {
                if (auth()->user()->role->status == '1') {
                    return $next($request);
                } else {
                    Session::flush();
                    Auth::logout();
                    return redirect(route('login'));
                }
            } else {
                Session::flush();
                Auth::logout();
                return redirect(route('login'));
            }
        } else {
            Auth::logout();
            return redirect(route('login'));
        }
    }
}
