<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;


    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function avatar()
    {
        return 'https://ui-avatars.com/api/' . $this->name;
    }


}
