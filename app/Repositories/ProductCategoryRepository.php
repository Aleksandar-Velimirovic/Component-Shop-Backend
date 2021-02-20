<?php

namespace App\Repositories;

use App\Models\ProductAttributeValue;
use App\Models\ProductCategoryAttribute;
use App\Repositories\Interfaces\ProductCategoryRepositoryInterface;
use App\Models\ProductCategory;
use Illuminate\Support\Collection;

class ProductCategoryRepository implements ProductCategoryRepositoryInterface
{
    private $model;

    public function __construct(ProductCategory $model)
    {
        $this->model = $model;
    }

    public function getProductCategoryFiltersById(int $category_id) :array {
        $productCategoryAttributes = ProductCategoryAttribute::where('product_category_id', $category_id)->get()->toArray();
        $attributeValues = [];

        return array_map(function($productCategoryAttribute) {
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

    public function getCategories() : Collection {
        return $this->model->all();
    }

    public function getCategory(int $categoryId) : ProductCategory {
        return $this->model->where('id', $categoryId)->first();
    }
}
