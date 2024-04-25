<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session::get("locale") !=null)
        {
            \Illuminate\Support\Facades\App::setLocale(session::get("locale"));
        }
        else
        {
            Session::put("locale", "en");
            \Illuminate\Support\Facades\App::setLocale((Session::get("locale")));
        }
        return $next($request);
    }
}
