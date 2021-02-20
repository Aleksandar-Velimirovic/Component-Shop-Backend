<?php

namespace App\Services;

use App\Models\OrderDetail;
use App\Models\OrderedItem;
use App\Models\Product;
use App\Services\Interfaces\GetDataForAfterOrderMailInterface;
use Illuminate\Support\Collection;

class GetDataForAfterOrderMailService implements GetDataForAfterOrderMailInterface
{
    public function getOrderDetailsByOrderId(int $orderId) : Collection {
        return $orderDetailes = OrderDetail::where('order_id', $this->orderId)->first();
    }

    public function getProductsFromOrderedItems(int $orderId) : array {
        $orderedItems = OrderedItem::where('order_id', $this->orderId)->get();
        $products = [];
    
        foreach($orderedItems as $item){
            $product = Product::find($item->product_id);
            array_push($products, $product);
        }

        return $product;
    }
}
