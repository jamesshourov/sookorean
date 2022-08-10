<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (auth('api')->guest()) {
            return response()->json(['errors' => 'Unauthorized'] , 401);
        }
        return $next($request);
    }
}
