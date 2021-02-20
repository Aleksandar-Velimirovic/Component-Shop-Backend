<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\OrderConfirmationMail;
use Illuminate\Support\Facades\Mail;

class SendMailToUserAfterOrderListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->user->email)->send(new OrderConfirmationMail($event->user, $event->orderId));
    }
}
