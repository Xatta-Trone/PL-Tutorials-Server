<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactResponse extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $response;
    public $contact;
    public function __construct($response, $contact)
    {
        $this->response = $response;
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactresponse')->subject('[PL Tutorials]: ' . $this->response['subject'])
            ->from('pltutorialsbuet@gmail.com')
            ->replyTo('pltutorialsbuet@gmail.com');
    }
}