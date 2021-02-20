<?php

namespace App\Repositories\Interfaces;

use App\Models\ProductCategory;
use Illuminate\Support\Collection;

interface ProductCategoryRepositoryInterface {
    public function getProductCategoryFiltersById(int $category_id) :array;
    public function getCategories() : Collection;
    public function getCategory(int $categoryId) : ProductCategory;
}