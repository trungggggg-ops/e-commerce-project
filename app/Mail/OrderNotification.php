<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;

    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    public function build()
    {
        return $this->view('emails.order_notification')
                    ->subject('New Order Notification');
    }
}