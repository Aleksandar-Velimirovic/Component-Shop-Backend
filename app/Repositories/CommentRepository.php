<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CommentRepositoryInterface;
use App\Http\Requests\CommentsRequest;
use App\Models\Comment;

class CommentRepository implements CommentRepositoryInterface
{
    private $model;

    public function __construct(Comment $model)
    {
        $this->model = $model;
    }

    public function create(CommentsRequest $request) : Comment {
        $comment = $this->model->create(['user_id' => $request->user_id, 'product_id' => $request->product_id, 'content' => $request->content]);
        return $comment;
    }
}
