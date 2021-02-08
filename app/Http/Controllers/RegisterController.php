<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserVerification;
use App\Events\NewUserHasRegisteredEvent;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request) {
        $user = User::create($request->all());
        $user['password'] = bcrypt($user['password']);
        $user->save();

        event(new NewUserHasRegisteredEvent($user));

        return response()->json(['message' => 'Please check your email to verify your account!']);
    }
}
