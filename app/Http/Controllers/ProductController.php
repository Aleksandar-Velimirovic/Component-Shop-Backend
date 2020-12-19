<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Rating;
use App\Models\ProductCategory;
use App\Models\ProductAttributeValue;

use  Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getPopularProductsOfAnyCategory(){

        $this->setNumberOfOrders();

        $this->setProductRating();

        return Product::with('orders')->orderBy('number_of_orders', 'DESC')->paginate(4);
    }

    public function setNumberOfOrders(){
        $products = Product::all();
        

        foreach($products as $product){
            $orders = Order::where('product_id', $product['id'])->count();

            $product['number_of_orders'] = $orders;

            $product->save();
        }
    }

    public function setProductRating(){
        
        $products = Product::all();

        foreach($products as $product){

            $ratings = Rating::where('product_id', $product['id'])->get()->toArray();

            $ratingValue = array_column($ratings, 'rating');

            $avgRating =  collect($ratingValue)->average();

            $product['rating'] = $avgRating;
            $product->save();
        }
    }

    public function getProductsByCategoryId(Request $request, int $categoryId) {
        $filters = $request->get('filters') ?? [];
        $query = Product::where('product_category_id', $categoryId);

        foreach($filters as $filter){
            $filter = json_decode($filter);
            $query->whereHas('productAttributeValues', function($q) use ($filter){
                $q->where('product_category_attribute_id', $filter->attribute_id)->whereIn('value', $filter->values);
            });
        }

        return $query->get();
    }

    public function searchProductsOfAnyCategory(Request $request, $searchTerm){
        
        $filters = $request->get('filters') ?? [];

        if($filters){

            $query =  Product::with('category')->where('product_title', 'LIKE', '%' . $searchTerm . '%')->whereHas('category', function($q) use ($filters){
                $q->whereIn('id', $filters);
            });

            return $query->get();
        }

        return Product::with('category')->where('product_title', 'LIKE', '%' . $searchTerm . '%')->orderBy('number_of_orders', 'DESC')->get();
    }

    public function getSingleProduct($id){
        $product =  Product::with('images')->find($id);

        $productAttribueValues = ProductAttributeValue::where('product_id', $id)->with('productCategoryAttribute')->get();

        return response()->json(['product' => $product, 'productAttribueValues' => $productAttribueValues]);
    }
}
