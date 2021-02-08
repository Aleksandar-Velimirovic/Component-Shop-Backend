<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    public function store(Request $request){
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->product_id = implode(",", $request->product_id);
        $order->save();

        

        $orderDetail = new OrderDetail();
        $orderDetail->address = $request->address;
        $orderDetail->apartment_number = $request->apartment_number;
        $orderDetail->customer_first_name = $request->customer_first_name;
        $orderDetail->customer_last_name = $request->customer_last_name;
        $orderDetail->city = $request->city;
        $orderDetail->number = $request->number;
        $orderDetail->order_id = $order->id;
        $orderDetail->save();

        return response()->json(['order' => $order])->withHeaders(['Access-Control-Allow-Origin' => '*']);;
    }

    
}
