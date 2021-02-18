<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\Order;

class HasUserOrdered
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
        if ($request->bearerToken() == 'null') {
            return response()->json(['errors' => ['token' => ['Not authorized']]], 401);
        }

        JWTAuth::setToken($request->bearerToken());
        $user = JWTAuth::toUser($request->bearerToken());

        if(!Order::where('user_id', $user->id)->where('product_id', $request->product_id)->where('has_rating', false)->get()) {
            return response()->json(['errors' => ['no_order' => ['Not authorized']]], 401);
        }

        return $next($request);
    }
}
