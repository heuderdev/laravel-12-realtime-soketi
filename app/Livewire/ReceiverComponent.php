<?php

namespace App\Livewire;
// C:\laragon\www\payments\app\Livewire\ReceiverComponent.php

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ReceiverComponent extends Component
{
    public $messages = [];

    protected $listeners = ['echo:message,MessageSent' => 'addMessage'];

    public function addMessage($payload)
    {
        $nowInSaoPaulo = Carbon::now('America/Sao_Paulo');
        $this->dispatch('messageReceived', $payload['message']);
        $this->messages[] = $nowInSaoPaulo->format('d/m H:i:s') . ' - ' . $payload['message'];
    }

    public function render()
    {
        return view('livewire.receiver-component');
    }
}
