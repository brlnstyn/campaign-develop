<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

// class Authenticate extends Middleware
class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::user()) {
            return $next($request);
            // dd('masuk');
        }else{
            return redirect('form-login')->with('error','You can not access, Please Login');
        }

    }

}

