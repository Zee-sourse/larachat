<?php

namespace App\Livewire\Chat\Room;

use App\Models\Room;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{

    public Room $room;


    #[Layout('layouts.app')]


    public function render()
    {
        return view('livewire.chat.room.index');
    }
}
