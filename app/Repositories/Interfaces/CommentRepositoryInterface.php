<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\CommentsRequest;
use App\Models\Comment;

interface CommentRepositoryInterface {
    public function create(CommentsRequest $request) : Comment;
}