<?php

namespace App\Listeners;

use App\Events\MenuAvailabilityChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdatePackageAvailability
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
    public function handle(MenuAvailabilityChanged $event): void
    {
        //
    }
}
