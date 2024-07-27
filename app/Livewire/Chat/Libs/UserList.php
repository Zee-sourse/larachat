<?php

namespace App\Livewire\Chat\Libs;

use App\Models\Room;
use Illuminate\Support\Collection;
use Livewire\Component;

class UserList extends Component
{

    public Room $room;


    public Collection $rooms;


    public function mount(){

        $this->fill([
            'rooms' => Room::all()
        ]);

    }

    public function render()
    {
        return view('livewire.chat.libs.user-list');
    }
}
