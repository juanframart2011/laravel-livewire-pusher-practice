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

    public function sendMessage(){

        $this->emit( "sender" );
    }
}
