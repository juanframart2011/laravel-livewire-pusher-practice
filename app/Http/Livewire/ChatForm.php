<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $message;
    public $name;

    public function mount(){

        $this->message = "";
        $this->name = "Lionel Messi";
    }

    public function render()
    {
        return view('livewire.chat-form');
    }

    public function updated( $field ){

        $this->validateOnly( $field,[
            "name" => "required:min:3",
            "message" => "required"
        ]);
    }

    public function sendMessage(){

        $this->validate([
            "name" => "required:min:3",
            "message" => "required"
        ]);

        $datos = [
            "user" => $this->name,
            "message"   => $this->message
        ];

        $this->emit( "sender" );
        //$this->emit( "mensajeRecibido", $datos );

        event( new \App\Events\SendMessage( $this->name, $this->message ) );
    }
}
