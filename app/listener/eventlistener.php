<?php

namespace App\listener;

use App\Event\Events;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class eventlistener
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
     * @param  \App\Event\Events  $event
     * @return void
     */
    public function handle(Events $event)
    {
        // dd(gettype($event));
        $arr=[];
        $conver=(Array)$event;
        dd($conver['msg']);
    }
}
