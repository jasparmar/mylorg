<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminCheckSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request);
        $uri = $request->path();
        if($uri == 'admin/login' && $request->session()->has('admin_id') > 0){
            return redirect('/admin/dashboard');
        }
        if (!$request->session()->has('admin_id') && $request->getRequestUri() != '/admin/login') {
            return redirect('/admin/login')->withErrors('Please login to access this page!');
        }
        return $next($request);
    }
}
