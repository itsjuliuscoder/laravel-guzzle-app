<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\CookieHelper;


class CustomGuestCheck
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
        //if user is authenticated redirect home
        if (CookieHelper::isAuthenticated()) {
            //if by any means user finds there way doing login again
            //via ajax, we redirect them back with a 'success response'
            if ($request->ajax()) {
              return response()->json(['success'=>'Already Logged In, says Middleware', 'status' => 200]);
            }
            
            return redirect('/publisher/home');
        }

        return $next($request);
    }
}
