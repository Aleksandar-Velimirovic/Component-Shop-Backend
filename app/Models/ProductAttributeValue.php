<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\ProductCategoryAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductAttributeValue extends Model
{
    use HasFactory;
    
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function productCategoryAttribute(){
        return $this->belongsTo(ProductCategoryAttribute::class, 'product_category_attribute_id');
    }
}
