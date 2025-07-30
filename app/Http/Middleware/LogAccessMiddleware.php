<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Acesso;
use Illuminate\Support\Facades\Auth;

class LogAccessMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        Acesso::create([
            'user_id' => $user ? $user->id : null,
            'origem' => $request->headers->get('referer') ?? 'direto',
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return $next($request);
    }
}
