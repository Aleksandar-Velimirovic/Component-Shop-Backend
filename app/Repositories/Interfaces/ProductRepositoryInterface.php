<?php

namespace App\Repositories\Interfaces;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Product;

interface ProductRepositoryInterface 
{
    public function allProductsOrderedByPopularity() : LengthAwarePaginator;
    public function getProductsByCategoryId(Request $request, int $categoryId) : Collection;
    public function searchProducts(Request $request, string $searchTerm) : Collection;
    public function getSingleProduct(int $id) : Product;
}