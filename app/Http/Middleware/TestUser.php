<?php

namespace App\Http\Middleware;

use Closure;

class TestUser
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
        if ($request->name == null) {
            return redirect('/form');
        }

        return $next($request);
    }
}
