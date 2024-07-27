<?php

namespace App\Livewire\Chat\Room;

use App\Models\Message;
use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{

    #[Layout('layouts.app')]
    public Room $room;


    #[Validate('required')]
    public $body;



    public function submit(){

        $this->validate();

        $message = Message::make($this->only('body'));

        $message->room()->associate($this->room);
        $message->user()->associate(auth()->user());

        $message->save();

        $this->reset('body');


        $this->dispatch('messages.created', $message->id);

    }






    public function render()
    {
        return view('livewire.chat.room.index');
    }
}
