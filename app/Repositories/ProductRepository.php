<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    private $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function allProductsOrderedByPopularity() : LengthAwarePaginator {
        return $this->model->orderBy('number_of_orders', 'DESC')->paginate(4);
    }

    public function getProductsByCategoryId(Request $request, int $categoryId) : Collection {
        $filters = $request->get('filters') ?? [];
        $query =  $this->model->where('product_category_id', $categoryId);

        foreach($filters as $filter) {
            $filter = json_decode($filter);
            $query->whereHas('productAttributeValues', function($q) use ($filter) {
                $q->where('product_category_attribute_id', $filter->attribute_id)->whereIn('value', $filter->values);
            });
        }

        return $query->get();
    }

    public function searchProducts(Request $request, string $searchTerm) : Collection {
        $filters = $request->get('filters') ?? [];

        if($filters) {
            $query =  $this->model->with('category')->where('product_title', 'LIKE', '%' . $searchTerm . '%')->whereHas('category', function($q) use ($filters) {
                $q->whereIn('id', $filters);
            });

            return $query->get();
        }
        
        return $this->model->with('category')->where('product_title', 'LIKE', '%' . $searchTerm . '%')->orderBy('number_of_orders', 'DESC')->get();
    }

    public function getSingleProduct(int $id) : Product {
        return Product::with('comments.user')->find($id);
    }
}
