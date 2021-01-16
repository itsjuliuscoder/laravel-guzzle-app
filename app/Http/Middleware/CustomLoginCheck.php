<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\CookieHelper;

class CustomLoginCheck
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
       //if the following cookies are available and'authenticated is true: proceed; Else: to login
       if (CookieHelper::isAuthenticated())
        {
            return $next($request);
        }

        CookieHelper::destroyAuthCookies();

        return redirect()->action("Auth\AuthController@showForm")->with(['error', 'You are restricted from accessing this page']);
    }
}
