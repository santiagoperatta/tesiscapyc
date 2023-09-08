<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class NoCrearDatosPersonales
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        
        if ($user->datosPersonales) {
            return redirect()->route('datos_personales.edit', $user->datosPersonales->id);
        }
        
        return $next($request);
    }
}
