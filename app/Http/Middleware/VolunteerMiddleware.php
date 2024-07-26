<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VolunteerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('volunteer_id')) {
            return redirect('login')->with('fail', 'Please login first...');
        }

        return $next($request);
    }
}
