<?php

namespace App\Services;

use App\Models\User;
use App\Events\NewUserHasRegisteredEvent;
use App\Services\Interfaces\CreateUserInterface;

class CreateUserService implements CreateUserInterface
{
    public function createUser($data) {
        $user = User::create($data);
        $user->save();
        
        event(new NewUserHasRegisteredEvent($user));
    }
}
