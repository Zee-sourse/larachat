<?php

namespace App\Livewire\Chat\Messages;

use App\Models\Room;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Message;

class Index extends Component
{

    public  Room $room;

    public Collection $messages;

    public function mount(){

        $this->fill([

            'messages' => $this->room->messages()->oldest()->take(100)->get()

        ]);
    }

    #[On('messages.created')]

    public function prependMessage($id)
    {
        $this->messages->push(Message::find($id));

    }




    public function render()
    {
        return view('livewire.chat.messages.index');
    }
}
