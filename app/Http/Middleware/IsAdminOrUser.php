<?php

namespace App\Http\Middleware;

use Closure;

class IsAdminOrUser
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && (auth()->user()->role === 'Admin' || auth()->user()->role === 'User')) {
            return $next($request);
        }

        return abort(403, 'Unauthorized action.');
    }
}
