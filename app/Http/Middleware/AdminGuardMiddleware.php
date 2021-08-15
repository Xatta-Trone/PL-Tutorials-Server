<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminGuardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user('admin') && $request->user('admin')->tokenCan('type:admin')) {
            return $next($request);
        }

        return response()->json(['message' => 'UNAUTHENTICATED'], 401);
    }
}
