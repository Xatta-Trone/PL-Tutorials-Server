<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserPasswordResetNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;
    public $resetCode;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $token, $resetCode)
    {
        $this->user = $user;
        $this->token = $token;
        $this->resetCode = $resetCode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user.passwordreset')->subject('[PL Tutorials]: Reset password')
            ->from('pltutorialsbuet@gmail.com')
            ->replyTo('pltutorialsbuet@gmail.com');
    }
}