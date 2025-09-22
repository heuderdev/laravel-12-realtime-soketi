{{-- resources\views\livewire\sender-component.blade.php --}}
<div>
    <input type="text" wire:model.defer="message">
    <button wire:click="sendMessage">Enviar</button>
</div>
