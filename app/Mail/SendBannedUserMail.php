<?php

namespace App\Mail;

use App\Models\Admin\BanHistory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendBannedUserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $banHistory;
    public function __construct(BanHistory $banHistory)
    {
        $this->banHistory = $banHistory;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user.bannedemail')->subject('[PL Tutorials]: Account restricted')
            // ->from('pltutorialsbuet@gmail.com')
            ->replyTo('pltutorialsbuet@gmail.com');
    }
}