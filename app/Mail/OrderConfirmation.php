<?php

namespace App\Mail;

use App\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($booking)
    {
        $this->booking = Booking::where('uuid',$booking)->firstOrFail();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@prasindo.co.id')
                   ->view('Mail.order')
                   ->with(
                    [
                        'link' => env('APP_URL', 'Laravel').'/booking/invoice/',
                        'booking' => $this->booking,
                    ]);
    }
}
