<?php

namespace App\Listeners;

use App\Events\CreateDbForSchool;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HandleCreateDbForSchool
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CreateDbForSchool $event): void
    {
        // Create DB for School Using school name
    }
}
