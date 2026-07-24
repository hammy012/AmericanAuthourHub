<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $orderDetails;

    /**
     * Create a new message instance.
     *
     * @param array $orderDetails
     */
    public function __construct(array $orderDetails)
    {
        $this->orderDetails = $orderDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Package Order: ' . ($this->orderDetails['package_name'] ?? 'Plan') . ' - ' . ($this->orderDetails['client_name'] ?? 'Client'))
                    ->view('emails.order_notification')
                    ->with(['details' => $this->orderDetails]);
    }
}
