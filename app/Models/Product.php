<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\ProductImage;
use App\Models\Rating;
use App\Models\ProductCategory;
use App\Models\ProductAttributeValue;
use App\Models\Comment;


class Product extends Model
{
    use HasFactory;

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function images() {
        return $this->hasMany(ProductImage::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }

    public function category() {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function productAttributeValues() {
        return $this->hasMany(ProductAttributeValue::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function getNumberOfOrdersAttribute() {
        $orders = Order::whereHas('orderedItems', function ($q) { 
            $q->where('product_id', $this->id);
        })->get()->toArray();
        return count($orders);
    }

    public function getRatingAttribute() {
        return $this->ratings()->avg('rating') ?: 0;
    }
}
