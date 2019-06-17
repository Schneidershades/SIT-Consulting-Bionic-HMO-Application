<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class HmoMiddleware
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
        if(Auth::user()->userable_type != "hmo")
        {
            Session::flash('info', 'Page not found');
            
            return redirect()->route('home');
        }
        return $next($request);
    }
}
