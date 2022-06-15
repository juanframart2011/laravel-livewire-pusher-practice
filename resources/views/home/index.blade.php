@extends( "layout.general" )

@section( "content" )
    
    <h5 class="pb-0 mt-5"><strong>Live Chat With</strong></h5>
    <h2 class="pt-0 mt-0"><strong>Laravel 7 + LiveWire + Pusher</strong></h2>
    @livewire( "chat-form" )
    @livewire( "chat-list" )
@endsection