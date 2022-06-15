<div>
    
    <h5 class="mt-3">Lista de mensajes</h5>
    @foreach( $messages as $message )

        <li>{{ $message["user"] }}: {{ $message["message"] }}</li>
    @endforeach

    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('{{ env( "PUSHER_APP_KEY" ) }}', {
            cluster: 'us2'
        });

        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {
            
            window.livewire.emit( 'mensajeRecibido', data );
        });
    </script>
</div>