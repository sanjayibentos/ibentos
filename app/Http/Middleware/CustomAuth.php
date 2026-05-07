<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    /**
     * Handle an incoming request.
     */
    public function handle(
        Request $request,
        Closure $next
    ): Response
    {
        // Check Login Session
        if (!session()->has('user_id')) {

            return redirect('/login');

        }

        return $next($request);
    }
}