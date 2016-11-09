<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamePlayer extends Model
{
    //
    public $timestamps = false;

    public $fillable = ['game_id', 'user_id'];
}
