<?php

namespace App\Http\Middleware;
use Closure;
use Auth;

class CheckRole
{
    public function handle($request, Closure $next,$roles)
    {
        if ( !Auth::user()->hasRoles($roles) ) {
            return redirect('/404');
            }
            return $next($request);
    }
}

