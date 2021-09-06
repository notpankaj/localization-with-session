<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('applocale')){
            app()->setlocale(session()->get("applocale"));
            
        }else{
            app()->setlocale(session()->get("applocale"));
        }
        return $next($request);
    }
}
