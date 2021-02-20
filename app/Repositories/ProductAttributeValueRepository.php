<?php

namespace App\Repositories;

use App\Models\ProductAttributeValue;
use App\Repositories\Interfaces\ProductAttributeValueRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductAttributeValueRepository implements ProductAttributeValueRepositoryInterface
{
    private $model;

    public function __construct(ProductAttributeValue $model)
    {
        $this->model = $model;
    }

    public function getAttributeValuesByProductId(int $id) : Collection {
        return $this->model->where('product_id', $id)->with('productCategoryAttribute')->get();
    }
}
