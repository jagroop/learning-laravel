<?php

namespace App\Http\Middleware;

use Closure;

class ValidateIpAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->ip() !== '127.0.0.1') {
          die('Can be accessed on development server only');
        }
        return $next($request);
    }
}
