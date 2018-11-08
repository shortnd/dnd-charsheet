<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function saving_throw()
    {
        return $this->hasOne('saving_throw');
    }
}
