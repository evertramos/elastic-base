<?php

namespace Evertramos\ElasticBase\App\Providers;

use Illuminate\Support\ServiceProvider;

class ElasticBaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
        $this->publishes([
            __DIR__.'/../../config/elasticbase.php' => config_path('elasticbase.php'),
        ]);
    }

    public function register()
    {
        //
    }
}
