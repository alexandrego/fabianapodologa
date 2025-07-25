<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PatientMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('patient')->check()) {
            return redirect()->route('patient.login');
        }
        return $next($request);
    }
}
