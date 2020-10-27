<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Rating;

class ProductController extends Controller
{
    public function getPopularProductsOfAnyCategory(){

        $this->setNumberOfOrders();

        return Product::with('orders', 'image', 'ratings')->orderBy('number_of_orders', 'DESC')->paginate(4);
    }

    public function setNumberOfOrders(){
        $products = Product::all();
        

        foreach($products as $product){
            $orders = Order::where('product_id', $product['id'])->count();

            $product['number_of_orders'] = $orders;

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

    public function searchProductsOfAnyCategory($searchTerm){
        return Product::with('image')->where('product_title', 'LIKE', '%' . $searchTerm . '%')->orderBy('number_of_orders', 'DESC')->get();
    }
}
