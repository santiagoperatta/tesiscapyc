<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class NoCrearCartaPresentacion
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        
        if ($user->cartaPresentacion) {
            return redirect()->route('carta_presentacion.edit', $user->cartaPresentacion->id);
        }
        
        return $next($request);
    }
}
