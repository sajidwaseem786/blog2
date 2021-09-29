<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class verifyUserByEmail
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
        //   $user=\App\User::findOrFail(Auth::id());
        // if($user->status==0){
 
        //  Auth::logout();

        //  return redirect('login')->with('message','You need to verify your Account, Check Your Email');

        // }

        $user = \App\User::findOrFail(Auth::id());
        if($user->status==0){


            Auth::logout();
            return redirect('login')->with("message","you need to verify your account, checkout your email");
        }



         return $next($request);
    }
}
