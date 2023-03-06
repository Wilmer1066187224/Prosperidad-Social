<?php

namespace App\Listeners;

use App\Events\ProjectSaved;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;

class optimizeProjecImage implements ShouldQueue       // delegamos tareas de optimizacion de imagen    
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
    public function handle(ProjectSaved $event)
    {
        $image=Image::make(storage::get($event->$project->image))
        ->widen(600)
        ->LimitColors(255)
        ->encode();
             
         Storage::put($event->$project->image, (string) $image);    
    }
}
