<?php

namespace Prvekariya\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$user,$email)
    {
        $this->message = $message;
        $this->user = $user;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->markdown('contact::contact.email')->with([
          'message'=>$this->message,
          'user'=>$this->user
        ]);
    }
}
