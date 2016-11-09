<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameSystem extends Model
{
    //
    public $timestamps = false;

    public $fillable = ['game_id', 'user_id'];
}
