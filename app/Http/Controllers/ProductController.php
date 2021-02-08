<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Rating;
use App\Models\ProductCategory;
use App\Models\ProductAttributeValue;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use  Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;

class ProductController extends Controller
{

    public function getPopularProductsOfAnyCategory() {
        // $this->setProductRating();
        return Product::orderBy('number_of_orders', 'DESC')->paginate(4);
    }

    // public function setNumberOfOrders(){
    //     $products = Product::all();
        

    //     foreach($products as $product){
    //         $product->numberOfOrders;
    //         $orders = Order::where('product_id', $product['id'])->count();

    //         $product['number_of_orders'] = $orders;

    //         $product->save();
    //     }
    // }

    // public function setProductRating(){
        
    //     $products = Product::all();

    //     foreach($products as $product){

    //         $ratings = Rating::where('product_id', $product['id'])->get()->toArray();

    //         $ratingValue = array_column($ratings, 'rating');

    //         $avgRating =  collect($ratingValue)->average();

    //         $product['rating'] = $avgRating;
    //         $product->save();
    //     }
    // }

    public function getProductsByCategoryId(Request $request, int $categoryId) {
        $filters = $request->get('filters') ?? [];
        $query = Product::where('product_category_id', $categoryId);

        foreach($filters as $filter) {
            $filter = json_decode($filter);
            $query->whereHas('productAttributeValues', function($q) use ($filter) {
                $q->where('product_category_attribute_id', $filter->attribute_id)->whereIn('value', $filter->values);
            });
        }

        return $query->get();
    }

    public function searchProductsOfAnyCategory(Request $request, string $searchTerm) {
        $filters = $request->get('filters') ?? [];

        if($filters) {
            $query =  Product::with('category')->where('product_title', 'LIKE', '%' . $searchTerm . '%')->whereHas('category', function($q) use ($filters) {
                $q->whereIn('id', $filters);
            });

            return $query->get();
        }

        return Product::with('category')->where('product_title', 'LIKE', '%' . $searchTerm . '%')->orderBy('number_of_orders', 'DESC')->get();
    }

    public function userHasOrdered(string $token, int $productId) {
        if ($token == 'null') {
            return false;
        }

        JWTAuth::setToken($token);
        $user = JWTAuth::toUser($token);

        if(!Order::where('user_id', $user->id)->where('product_id', $productId)->where('has_rating', false)->first()) {
            return false;
        }

        return true;
    }

    public function getSingleProduct(Request $request, int $id) {
        $product =  Product::with('images', 'comments.user', 'comments.rating')->find($id);
        $productAttribueValues = ProductAttributeValue::where('product_id', $id)->with('productCategoryAttribute')->get();
        
        return response()->json(['product' => $product, 'productAttribueValues' => $productAttribueValues, 'userHasOrdered' => $this->userHasOrdered($request->bearerToken(), $product->id)]);
        
        // if($request->bearerToken() == 'null'){

        //     return response()->json(['product' => $product, 'productAttribueValues' => $productAttribueValues, 'userHasOrdered' => false]);
        // }else{

        //     JWTAuth::setToken($request->bearerToken());

        //     $user = JWTAuth::toUser($request->bearerToken());

        //     if(!Order::where('user_id', $user->id)->where('product_id', $product->id)->first()){
        //         return response()->json(['product' => $product, 'productAttribueValues' => $productAttribueValues, 'userHasOrdered' => false]);
        //     }

        //     return response()->json(['product' => $product, 'productAttribueValues' => $productAttribueValues, 'userHasOrdered' => true]);
        // }
    }
}
