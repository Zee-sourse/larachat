<?php

namespace App\Livewire\Chat\Libs;

use App\Models\Room;
use Livewire\Component;

class SingleUser extends Component
{

    public Room $item;


    public function render()
    {
        return view('livewire.chat.libs.single-user');
    }
}
