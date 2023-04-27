<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class twt
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('adminId')){
            return $next($request);
        }elseif(Session::has('adminName')){
            return $next($request);
        }
        else{
            session()->put('url.intended', url()->current());
            return redirect('/twt/login')->with('error', 'Invalid User');
        }
    }
}
