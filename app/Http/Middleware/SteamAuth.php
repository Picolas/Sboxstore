<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AuthController;
use Closure;
use Illuminate\Support\Facades\Auth;
use Invisnik\LaravelSteamAuth\SteamAuthInterface;

class SteamAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if (!Auth::check()) {
			return redirect("/login");
		}else{
			return $next($request);
		}
    }
}
