<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAttributeValue;
use App\Models\ProductCategoryAttribute;
use App\Models\ProductCategory;


class ProductCategoryController extends Controller
{
    public function getProductCategoryFiltersById(int $category_id){
        $productCategoryAttributes = ProductCategoryAttribute::where('product_category_id', $category_id)->get()->toArray();
        $attributeValues = [];

        return array_map(function($productCategoryAttribute){
            $attributeValues = ProductAttributeValue::where('product_category_attribute_id', $productCategoryAttribute['id'])->groupBy('value')->get();

            $filter = [
                'attribute_id' => $productCategoryAttribute['id'],
                'label' => $productCategoryAttribute['label'],
                "items" => []
            ];

            foreach($attributeValues as $attributeValue) {
                $filter["items"][] = $attributeValue->value;
            }
            return $filter;

        },$productCategoryAttributes);
    }

    public function getCategories(){
        return ProductCategory::all();
    }
}
