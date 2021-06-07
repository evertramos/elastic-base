<?php

namespace Evertramos\ElasticBase\App\Providers;

use Illuminate\Support\ServiceProvider;

class ElasticBaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }

    public function register()
    {
        //
    }
}
