<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentsRequest;
use App\Models\Comment;
use App\Models\Rating;

class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('hasUserOrdered');
    }

    public function store(CommentsRequest $request) {
        $comment = new Comment();
        $rating = new Rating();
        
        $comment->user_id = $request->user_id;
        $comment->product_id = $request->product_id;
        $comment->content = $request->content;

        $comment->save();

        $rating->product_id = $request->product_id;
        $rating->user_id = $request->user_id;
        $rating->comment_id = $comment->id;
        $rating->rating = $request->rating;

        $rating->save();
    }
}
