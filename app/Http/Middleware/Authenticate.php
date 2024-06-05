<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        if(Session::get("isLoged") == null) {
            return redirect()->route("auth.loginPage")->with("error", "Harus Login Terlebih Dahulu!!!");
        } 

        if(Session::get("token") != "124fj154KL132cI06P541pP20541" ) {
            return redirect()->route("auth.loginPage")->with("error", "Harus Login Terlebih Dahulu!!!");
        }
        return $next($request);
    }
}
