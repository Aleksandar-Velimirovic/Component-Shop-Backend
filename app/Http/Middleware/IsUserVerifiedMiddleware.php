<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Http\Requests\LoginRequest;

class IsUserVerifiedMiddleware
{
    /**
     * Handle an incoming request.
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|regex:/\w*[0-9]{1,}\w*/'
        ]);

        if(!$user = User::where('email', $request->email)->first()){

            return response()->json(['errors' => ['email' => ['Email doesn\'t exist!']]], 401);

        }else{

            if(!$user->is_verified){
                return response()->json(['errors' => ['verify' => ['Please verify your email to login!']]], 401);
            }
        }

        return $next($request);
    }
}
