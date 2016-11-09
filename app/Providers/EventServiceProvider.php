<?php

namespace App\Providers;

use App\Events\NewGameWasCreated;
use App\Game;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\NewGameWasCreated' => [
            'App\Listeners\SetupGame',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //

        Game::created(function (Game $game) {
           event(new NewGameWasCreated($game));
        });
    }
}
