<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class HcpMiddleware
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
        if(Auth::user()->userable_type != "hcp")
        {
             // dd(Auth::user()->userable_type);
            Session::flash('info', 'Page not found');
            // Auth::logout();
            return redirect()->route('home');
        }
        return $next($request);
    }
}
