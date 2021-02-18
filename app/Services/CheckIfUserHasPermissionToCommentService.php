<?php

namespace App\Services;

use App\Services\Interfaces\CheckIfUserHasPermissionToCommentInterface;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\Order;

class CheckIfUserHasPermissionToCommentService implements CheckIfUserHasPermissionToCommentInterface
{
    public function checkIfUserHasPermission(string $token, int $productId) : bool {
        if ($token == 'null') {
            return false;
        }

        JWTAuth::setToken($token);
        $user = JWTAuth::toUser($token);

        $initialCheck = Order::where('user_id', $user->id)->where('has_rating', false)->get();

        if(count($initialCheck) == 0) {
            return false;
        }
        $query = Order::where('user_id', 1)->where('has_rating', false);
        $query->whereHas('orderedItems', function ($q) use ($productId) { 
            $q->where('product_id', $productId);
        });
        
        if(count($query->get()) == 0) {
            return false;
        }

        return true;
    }

}
