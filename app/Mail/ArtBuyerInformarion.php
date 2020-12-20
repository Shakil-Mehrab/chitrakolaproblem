<?php

namespace App\Mail;

use App\Models\Buyer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArtBuyerInformarion extends Mailable
{
    public $buyer;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Buyer $buyer)
    {
        $this->buyer=$buyer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Chitrakola Admin ")->from('hello@chitrakolagallery.com')->view('layouts.includes.NewBuyerInformation');
    }
}