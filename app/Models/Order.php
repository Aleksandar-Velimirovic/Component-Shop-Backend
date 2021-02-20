<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;
use App\Models\OrderDetail;
use App\Models\OrderedItem;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'product_id', 'rating'
    ];

    // protected $casts = [
    //     'product_id' => 'array'
    // ];

    public function products() {
        return $this->hasOne(Product::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }

    public function orderedItems() {
        return $this->hasMany(OrderedItem::class);
    }
}
