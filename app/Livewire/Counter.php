<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    protected $listeners = ['echo:message,MessageSent' => 'contando'];

    public $contador = 0;

    public function contando()
    {
        $this->contador++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
