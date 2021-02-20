<?php

namespace App\Services\Interfaces;

interface CheckIfUserHasPermissionToCommentInterface {

    public function checkIfUserHasPermission(string $token, int $productId) : bool;
}