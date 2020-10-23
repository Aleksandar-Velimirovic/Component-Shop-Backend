<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use ReallySimpleJWT\Token;
// use App\Http\Requests\LoginRequest;
use  App\Http\Middleware\IsUserVerifiedMiddleware;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('mailVerified')->only('authenticate');
    }

    public function authenticate(Request $request)
    {
    
        $credentials = $request->only(['email', 'password']);
            
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['errors' => ['credentials' => ['Invalid credentials.']]], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['errors' => 'Could not create token.'], 500);
        }

        return response()->json(['token' => $token]);
    }

    public function verification ($token) {

        JWTAuth::setToken($token);

        if(!$user = JWTAuth::toUser($token)){
            return response()->json(['message' => 'Invalid token']);
        }else {
            $user->is_verified = true;
            $user->save();
        }
    }
}
