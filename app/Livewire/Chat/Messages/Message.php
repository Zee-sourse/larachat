<?php

namespace App\Livewire\Chat\Messages;

use Livewire\Component;
use App\Models\Message as ModelMessage;

class Message extends Component
{

    public ModelMessage $message;

    public function render()
    {
        return view('livewire.chat.messages.message');
    }
}
