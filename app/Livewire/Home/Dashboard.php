<?php

namespace App\Livewire\Home;

use App\Models\Room;
use Livewire\Component;

class Dashboard extends Component
{


    public $rooms;



    public function mount()
    {
        $this->fill([
            'rooms' => Room::all()
        ]);
    }




    public function render()
    {
        return view('livewire.home.dashboard');
    }
}
