<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\Guest as Guest;

class confirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $guest_data;

    public function __construct(Guest $guest_data)
    {
        $this->guest_data = $guest_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this
        //->to(config('mail.support.address'))
        ->subject('Confirmation')
        ->view('emails.confirmation');

    }
}
