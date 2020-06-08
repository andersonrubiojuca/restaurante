<?php

namespace App\Http\Middleware;

use Closure;
use Session;

//este é apenas um exemplo, não o leve a sério
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if(!Session::get('usuario')){
            return redirect('/login');
        }
        

        return $next($request);
    }
}
