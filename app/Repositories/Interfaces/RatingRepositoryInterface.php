<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\CommentsRequest;
use App\Models\Rating;

interface RatingRepositoryInterface {
    public function create(CommentsRequest $request, int $commentId) : Rating;
}