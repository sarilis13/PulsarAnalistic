<?php

namespace App\Http\Middleware;

use Closure;

class RolAdministrador
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
        if($this->roladmin())
        return $next($request);
        return redirect('/')->with('mensaje', 'No tienes permiso para ingresar aquí');
    }
    private function roladmin(){
        return session()->get('rol_nombre') == 'administrador';
    }
}
