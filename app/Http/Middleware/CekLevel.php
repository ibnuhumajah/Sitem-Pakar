<?php

namespace App\Http\Middleware;

use Closure;
use PDO;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {
        if (in_array($request->user()->levels, $levels)) {
            return $next($request);
        }
        return redirect('/');
    }
}
