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

        // if(!Order::where('user_id', $user->id)->where('product_id', $productId)->where('has_rating', false)->first()) {
        //     return false;
        // }

        
        if(!$query = Order::where('user_id', $user->id)->where('has_rating', false)->first()) {
            return false;
        }

        $newQuery = $query->whereHas('orderedItems', function($q) use ($productId) {
            $q->where('product_id', $productId);
        });

        if(!$newQuery){
            return false;
        }

        return true;
    }

}
