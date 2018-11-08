<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharacterSavingThrow extends Model
{
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
