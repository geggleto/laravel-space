<?php

namespace App\Listeners;

use App\Events\NewGameWasCreated;
use Illuminate\Support\Facades\Log;

class SetupGame
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewGameWasCreated  $event
     * @return void
     */
    public function handle(NewGameWasCreated $event)
    {
        $game = $event->getGame();
    }
}
