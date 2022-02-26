<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMessageToAdmin implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $message;
    public $userName;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message, $userName)
    {
        $this->message = $message;
        $this->userName = $userName;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return 'chat-admin';
    }

    public function broadcastAs()
    {
        return 'chat-msg';
    }

    public function broadcastWith()
    {
        return ['msg' => $this->message, 'name' => $this->userName];
    }
}