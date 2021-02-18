<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;


class OrderedItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'price', 'product_id', 'order_id'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    // public function 
}
