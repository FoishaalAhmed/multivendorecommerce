<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {

            if (@Auth::user()->hasRole('Admin')) {

                return $next($request);
                
            } else {

                abort('401');
            }
            
        } else {

            return redirect('/');
        }
    }
}
