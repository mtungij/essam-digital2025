<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
    if (auth()->check() && auth()->user()->position === 'admin') {
        return $next($request);
    }

    // Redirect non-admins to homepage instead of dashboard
    return redirect('/')->with('error', 'Access denied.');
}

}
