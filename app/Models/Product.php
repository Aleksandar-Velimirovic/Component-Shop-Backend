<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\ProductImage;
use App\Models\Rating;
use App\Models\ProductCategory;
use App\Models\ProductAttributeValue;


class Product extends Model
{
    use HasFactory;

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function image(){
        return $this->hasOne(ProductImage::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function productAttributeValues(){
        return $this->hasMany(ProductAttributeValue::class);
    }
}
