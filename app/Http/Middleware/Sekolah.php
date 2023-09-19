<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Sekolah
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard("sekolah")->check()) {
            return $next($request);
        } else if (Auth::guard("admin")->check() || Auth::guard("guru")->check() || Auth::guard("murid")->check()) {
            return abort(401, "Unauthorized");
        } else {
            return redirect("/login");
        }
    }
}