import Echo from 'laravel-echo';
import Pusher from 'pusher-js';
window.Pusher = Pusher;


window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    wsHost: import.meta.env.VITE_PUSHER_HOST,
    wsPort: import.meta.env.VITE_PUSHER_PORT,
    forceTLS: false,        // impede wss://
    encrypted: false,       // impõe ws://
    disableStats: true,
    enabledTransports: ['ws'],  // somente ws
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
});

// Debug da conexão
window.Echo.connector.pusher.connection.bind('connected', function() {
    console.log('✅ Conectado ao Soketi!');
    console.log('Socket ID:', window.Echo.socketId());
});

window.Echo.connector.pusher.connection.bind('error', function(err) {
    console.error('❌ Erro de conexão:', err);
});

window.Echo.connector.pusher.connection.bind('disconnected', function() {
    console.log('🔌 Desconectado do Soketi');
});

window.Echo.connector.pusher.connection.bind('state_change', ({ previous, current }) => {
    console.log(`🔄 Estado mudou: ${previous} → ${current}`);
});


// Log do estado atual
setTimeout(() => {
    console.log('Estado da conexão:', window.Echo.connector.pusher.connection.state);
    console.log('Socket ID atual:', window.Echo.socketId());
}, 2000);
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allow your team to quickly build robust real-time web applications.
 */
