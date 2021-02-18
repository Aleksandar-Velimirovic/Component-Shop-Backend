<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Services\Interfaces\CheckIfUserHasPermissionToCommentInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Repositories\Interfaces\ProductAttributeValueRepositoryInterface;

class ProductController extends Controller
{
    private $productRepository;
    private $checkIfUserHasPermissionToCommentService;
    private $productAttributeValueRepository;

    public function __construct(ProductRepositoryInterface $productRepository, CheckIfUserHasPermissionToCommentInterface $checkIfUserHasPermissionToCommentService,
        ProductAttributeValueRepositoryInterface $productAttributeValueRepository) {
        $this->productRepository = $productRepository;
        $this->checkIfUserHasPermissionToCommentService = $checkIfUserHasPermissionToCommentService;
        $this->productAttributeValueRepository = $productAttributeValueRepository;
    }

    public function getPopularProductsOfAnyCategory() : LengthAwarePaginator {
        return $this->productRepository->allProductsOrderedByPopularity();
    }

    public function getProductsByCategoryId(Request $request, int $categoryId) : Collection {
        return $this->productRepository->getProductsByCategoryId($request, $categoryId);
    }

    public function searchProductsOfAnyCategory(Request $request, string $searchTerm) : Collection {
        return $this->productRepository->searchProducts($request, $searchTerm);
    }

    public function userHasOrdered(int $productId){
        return $this->checkIfUserHasPermissionToCommentService->checkIfUserHasPermission($productId);
    }

    public function getSingleProductWithAttributeValues(Request $request, int $id) {
        return response()->json([
            'product' => $this->productRepository->getSingleProduct($id), 
            'productAttribueValues' => $this->productAttributeValueRepository->getAttributeValuesByProductId($id), 
            'userHasOrdered' => $this->userHasOrdered($request->bearerToken(), $id, $this->checkIfUserHasPermissionToCommentService)
            ]);
    }
}
