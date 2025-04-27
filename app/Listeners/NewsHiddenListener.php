<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\NewsHidden;
use Illuminate\Support\Facades\Log;

class NewsHiddenListener
{
    public function handle(NewsHidden $event)
    {
        Log::info('News ' . $event->news->id . ' hidden');
    }
}
