<?php
namespace App\Livewire;
// C:\laragon\www\payments\app\Livewire\SenderComponent.php
use Livewire\Component;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Log;

class SenderComponent extends Component
{
    public $message;

    public function sendMessage()
    {
       
        $this->validate(['message' => 'required|string']);

        Log::info('Evento enviado: ' . json_encode($this->message));
        
        event(new MessageSent($this->message));

        $this->message = ''; 
    }

    public function render()
    {
        return view('livewire.sender-component');
    }
}

