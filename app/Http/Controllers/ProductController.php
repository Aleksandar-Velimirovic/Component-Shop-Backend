<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class ProductController extends Controller
{
    public function index(){

        $this->setNumberOfOrders();

        return Product::with('orders', 'image')->orderBy('number_of_orders', 'DESC')->paginate(4);
    }

    public function setNumberOfOrders(){
        $products = Product::all();
        

        foreach($products as $product){
            $orders = Order::where('product_id', $product['id'])->count();

            $product['number_of_orders'] = $orders;

            $product->save();
        }
    }
}
