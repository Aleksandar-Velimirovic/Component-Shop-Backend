<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Events\UserHasOrderedEvent;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\Interfaces\OrderedItemRepositoryInterface;
use App\Repositories\Interfaces\OrderDetailRepositoryInterface;
// use App\Services\Interfaces\GetDataForAfterOrderMailInterface;

class OrderController extends Controller
{
    private $orderRepository;
    private $orderedItemRepository;
    private $orderDetailRepository;

    public function __construct(OrderRepositoryInterface $orderRepository, OrderedItemRepositoryInterface $orderedItemRepository, OrderDetailRepositoryInterface $orderDetailRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->orderedItemRepository = $orderedItemRepository;
        $this->orderDetailRepository = $orderDetailRepository;
    }

    public function store(Request $request) {
        $order = $this->orderRepository->create($request);

        $this->createOrderedItemsForThisOrder($request->product_id, $order->id);

        $this->orderDetailRepository->create($request, $order->id);

        $this->notifyUserAboutOrder($request->user_id, $order->id);
        
        return response()->json(['order' => $order]);
    }
    
    public function notifyUserAboutOrder(int $userId, int $orderId) {
        $user = User::find($userId);
        event(new UserHasOrderedEvent($user, $orderId));
    }

    public function createOrderedItemsForThisOrder(array $productIds, int $orderId) {
        foreach($productIds as $id) {
            $product = Product::find($id);
            $this->orderedItemRepository->create($product, $orderId);
        }
    }
    
    // $order = new Order();
    // $order->user_id = $request->user_id;
    // $order->product_id = 1;
    // $order->save();

    // foreach($request->product_id as $productId) {
    //     $product = Product::find($productId);

    //     $orderedItem = new OrderedItem();
    //     $orderedItem->price = $product->price;
    //     $orderedItem->product_id = $product->id;
    //     $orderedItem->order_id = $order->id;

    //     $orderedItem->save();
    // }

    // $orderDetail = new OrderDetail();
    //     $orderDetail->address = $request->address;
    //     $orderDetail->apartment_number = $request->apartment_number;
    //     $orderDetail->customer_first_name = $request->customer_first_name;
    //     $orderDetail->customer_last_name = $request->customer_last_name;
    //     $orderDetail->city = $request->city;
    //     $orderDetail->number = $request->number;
    //     $orderDetail->order_id = $order->id;  
    //     $orderDetail->save();
    
}
