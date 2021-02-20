<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;
use App\Models\ProductAttributeValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategoryAttribute extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productAttributeValues() {
        return $this->hasMany(ProductAttributeValue::class);
    }
}


