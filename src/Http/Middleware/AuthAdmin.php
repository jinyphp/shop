<?php

namespace Jiny\Shop\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
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
        // 커널.php 에 등록
        if(Session('utype') === "ADM")
        {
            return $next($request);
        } else {
            session()->flush();
            return redirect('/login');
        }

        return $next($request);
    }
}
