<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\Interfaces\CreateUserInterface;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request, CreateUserInterface $createUserService) {
        $createUserService->createUser($request->all());

        return response()->json(['message' => 'Please check your email to verify your account!']);
    }
}
