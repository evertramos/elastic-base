<?php

namespace Evertramos\ElasticBase;

use Illuminate\Support\ServiceProvider;

class ElasticBaseServiceProvider extends ServiceProvider
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
