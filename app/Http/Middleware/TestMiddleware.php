<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
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
        // Apenas permite acesso se query param 'allow' for 'true'
        if ($request->query('allow') !== 'true') {
            return response('Acesso negado pelo TestMiddleware.', 403);
        }
        return $next($request);
    }
}
