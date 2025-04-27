<?php

namespace App\Providers;

use App\Events\NewsHidden;
use App\Listeners\NewsHiddenListener;
use Illuminate\Support\ServiceProvider;
use App\Models\News;
use App\Observers\NewsObserver;

class AppServiceProvider extends ServiceProvider
{
    protected $listen = [
        NewsHidden::class => [
            NewsHiddenListener::class,
        ],
    ];
    public function boot()
{
    News::observe(NewsObserver::class);
}
}


