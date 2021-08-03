<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UpdateSanctumConfigForCustomGuard
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->url() == env('APP_URL').'/v1/admin/*') {
            // Without this, remember_me feature could break
            //  using the wrong cookie if guards use different user models/tables
            config(['auth.defaults.guard' => 'admin']);
            config(['sanctum.guard' => 'admin']);
        }

        return $next($request);
    }
}
