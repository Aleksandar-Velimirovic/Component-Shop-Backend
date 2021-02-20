<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\ProductCategoryAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;
    
    public function products() {
        return $this->hasMany(Product::class);
    }

    public function productCategoryAttributes() {
        return $this->hasMany(ProductCategoryAttribute::class);
    }
}


