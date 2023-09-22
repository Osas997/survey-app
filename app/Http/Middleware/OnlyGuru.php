<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OnlyGuru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard("guru")->check()) {
            return $next($request);
        } else if (Auth::guard("sekolah")->check() || Auth::guard("murid")->check() || Auth::guard("admin")->check()) {
            return abort(401, "Unauthorized");
        } else {
            return redirect("/login");
        }
    }
}
