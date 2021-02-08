<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'address', 'apartment_number', 'customer_first_name', 'customer_last_name', 'city', 'number', 'order_id'
    ];

    public function order() {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
