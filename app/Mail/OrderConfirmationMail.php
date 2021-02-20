<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\OrderDetail;
use App\Models\OrderedItem;
use App\Models\Product;
// use App\Services\Interfaces\GetDataForAfterOrderMailInterface;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $orderId;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, int $orderId)
    {
        $this->user = $user;
        $this->orderId = $orderId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $orderDetailes = OrderDetail::where('order_id', $this->orderId)->first();
        $orderedItems = OrderedItem::where('order_id', $this->orderId)->get();
        $products = [];

        foreach($orderedItems as $item){

            $product = Product::find($item->product_id);

            array_push($products, $product);
        }

        return $this->subject('Mail from Online Component Shop')->view('mailAfterOrder', compact('orderDetailes','products'));
    }
}
