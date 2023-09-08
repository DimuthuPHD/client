<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $type): Response
    {
        $success = false;
        $types = explode(",", $type);
        if ($type !== null &&   in_array('job_seeker', $types) && JobseekerLogged()) {
            $success = true;
        }

        if ($type !== null && in_array('consultant', $types) && ConsultantLogged()) {

            $success = true;
        }

        return $success ? $next($request) : redirect()->route('login');
    }
}
