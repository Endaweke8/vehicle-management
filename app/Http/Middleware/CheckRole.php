<?php
// app/Http/Middleware/CheckRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $roleName
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $roleName)
    {
        // Check if the user is authenticated and has the required role
        if (Auth::check() && Auth::user()->role && Auth::user()->role->name === $roleName) {
            return $next($request);
        }

        // If not authorized, abort with 403 Forbidden status
        return abort(403, 'Access denied');
    }
}
