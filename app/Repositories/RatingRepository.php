<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RatingRepositoryInterface;
use App\Http\Requests\CommentsRequest;
use App\Models\Rating;

class RatingRepository implements RatingRepositoryInterface
{
    private $model;

    public function __construct(Rating $model)
    {
        $this->model = $model;
    }

    public function create(CommentsRequest $request, int $commentId) : Rating {
        $rating = $this->model->create(['user_id' => $request->user_id, 'product_id' => $request->product_id, 'comment_id' => $commentId, 'rating' => $request->rating]);
        return $rating;
    }
}
