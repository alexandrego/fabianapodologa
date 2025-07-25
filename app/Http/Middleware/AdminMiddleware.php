<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Garante que o usuário está autenticado e é admin
        if (!Auth::check() || (method_exists(Auth::user(), 'isAdmin') ? !Auth::user()->isAdmin() : (Auth::user()->role ?? null) !== 'admin')) {
            return redirect()->route('login')->withErrors(['Acesso restrito à área administrativa.']);
        }
        return $next($request);
    }
}
