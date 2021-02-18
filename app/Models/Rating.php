<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;
use App\Models\Comment;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment() {
        return $this->belongsTo(Comment::class, 'comment_id');
    }
}
