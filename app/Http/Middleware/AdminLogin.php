<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $tipo)
    {
        if( !Auth::check() ){
            return redirect('login');
        }
        
        if( Auth::user()->tipo <> $tipo ){
            return redirect('login');
        }
        
        return $next($request);
    }
}
