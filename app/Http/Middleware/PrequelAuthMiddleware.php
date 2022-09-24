<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrequelAuthMiddleware
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

        $key = $request->get('kay');
        $allowedKeys = config('monzurul.allowed_keys');

        if (in_array($key, $allowedKeys)) {
            return $next($request);
        } else {
            return  abort(403);
        }
    }
}