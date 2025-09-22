<?php

namespace App\Events;
// C:\laragon\www\payments\app\Events\MessageSent.php
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Support\Facades\Log;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    public function __construct($message)
    {
        Log::info('MessageSent: ' . json_encode($message));
        $this->message = $message;
    }

    public function broadcastOn()
    {
        Log::info('broadcastOn:chat-channel');
        return new Channel('message');
    }
   
}
