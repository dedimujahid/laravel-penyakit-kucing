<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
        public function handle($request, Closure $next, ...$roles)
    {
        $user = auth()->user();
        if (auth()->check() && (auth()->user()->role === 'Admin' || auth()->user()->role === 'User')) {
            return $next($request);
        }
        return $next($request);
    }
}
