<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserGuardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->tokenCan('type:user')) {
            return $next($request);
        }

        return response()->json(['message' => 'UNAUTHENTICATED'], 401);
    }
}
