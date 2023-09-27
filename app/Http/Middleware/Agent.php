<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Agent
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAgent()) {
            return $next($request);
        }

        return redirect('/'); // Redirigez vers la page d'accueil si l'utilisateur n'est pas administrateur
    }
}
