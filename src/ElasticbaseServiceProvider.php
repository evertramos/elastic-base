<?php

namespace Elasticbase\Providers;

use Illuminate\Support\ServiceProvider;

class ElasticbaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // parent::boot();
    }

    public function register()
    {
        // parent::boot();
    }
}
