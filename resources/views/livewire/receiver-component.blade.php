{{-- C:\laragon\www\payments\resources\views\livewire\receiver-component.blade.php --}}
<div>
    <h4>Mensagens recebidas:</h4>
    <ul>
        @foreach($messages as $msg)
        <li>{{ $msg }}</li>
        @endforeach
    </ul>
</div>

@push('scripts')

<script>
    document.addEventListener('livewire:navigated', function() {        
        Livewire.on('messageReceived', message => {
            console.log('Mensagem recebida via Livewire:', message[0]);
        });
    });
</script>

@endpush
