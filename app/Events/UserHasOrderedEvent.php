<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
// use App\Services\Interfaces\GetDataForAfterOrderMailInterface;

class UserHasOrderedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $orderId;
    // public $getDataForAfterOrderMailService;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $orderId)
    {
        $this->user = $user;
        $this->orderId = $orderId;
        // $this->getDataForAfterOrderMailService = $getDataForAfterOrderMailService;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
