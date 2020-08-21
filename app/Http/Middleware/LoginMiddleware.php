<?php

namespace App\Http\Middleware;

use Closure;
Use Session;

class LoginMiddleware
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
         $Path=$request->Path();
       if(!Session()->has('data')){
           return redirect('login');
       }

        return $next($request);
    }
}

