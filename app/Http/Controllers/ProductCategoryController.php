<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ProductCategoryRepositoryInterface;

class ProductCategoryController extends Controller
{
    private $productCategoryRepositoryInterface;

    public function __construct(ProductCategoryRepositoryInterface $productCategoryRepositoryInterface)
    {
        $this->productCategoryRepositoryInterface = $productCategoryRepositoryInterface;
    }

    public function getProductCategoryFiltersById(int $category_id) {
        return $this->productCategoryRepositoryInterface->getProductCategoryFiltersById($category_id);
    }

    public function getCategories() {
        return $this->productCategoryRepositoryInterface->getCategories();
    }

    public function getCategory(int $categoryId) {
        return $this->productCategoryRepositoryInterface->getCategory($categoryId);
    }
}
