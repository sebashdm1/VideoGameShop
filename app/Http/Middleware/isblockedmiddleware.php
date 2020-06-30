<?php

namespace App\Http\Middleware;

use Closure;

class isblockedmiddleware
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
        if(auth()->check() && auth()->user()->isBlocked==0)
          return $next($request);

        return redirect('/blocked');
    }
}
