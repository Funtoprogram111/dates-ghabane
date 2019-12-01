<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Message;


class UserEmailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $send;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $send)
    {
        $this->send = $send;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact_info');
    }
}
