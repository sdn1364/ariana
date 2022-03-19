<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Session;
use Spatie\MediaLibrary\MediaCollections\Events\MediaHasBeenAdded;

class MediaLogger
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
     * @param  object  $event
     * @return void
     */
    public function handle(MediaHasBeenAdded $event)
    {
        Session::flash('message', 'فایل‌های مورد نظر آپلود شدند');
    }
}
