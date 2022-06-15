<div>
    
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" wire:model="name">
    </div>

    <div class="form-group">
        <label for="message">Mensaje</label>
        <textarea type="text" name="message" id="message" class="form-control" wire:model="message"></textarea>
    </div>

    <button class="btn btn-primary" wire:click="sendMessage">Send Message</button>

    <div style="position: absolute;" class="alert alert-success collapse mt-3" role="alert" id="avisoSuccess">
        Mensaje Enviado
    </div>

    <script>
        window.livewire.on( 'sender', function(){

            $( "#avisoSuccess" ).fadeIn( "slow" );

            setTimeout( () => {

                $( "#avisoSuccess" ).fadeOut( "slow" );
            }, 3000 );
        });
    </script>
</div>