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
     * @param  Closure(Request): (Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        // Cek apakah user sudah login dan apakah rolenya sesuai (Admin = 1)
        if (!auth()->check() || auth()->user()->roles_id != $role) {
            abort(403, 'Anda bukan Admin!');
        }
        return $next($request);
    }
}
