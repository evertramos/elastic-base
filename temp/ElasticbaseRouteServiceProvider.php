<?php

namespace Elasticbase\Providers;

use App\Providers\RouteServiceProvider;
// use Illuminate\Cache\RateLimiting\Limit;
// use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class ElasticbaseRouteServiceProvider extends RouteServiceProvider
{
    protected $namespace = 'Elasticbase\Controllers';

    public function boot()
    {
        parent::boot();
        // $this->configureRateLimiting();
        //
        // $this->routes(function () {
        //     Route::prefix('api')
        //         ->middleware('api')
        //         ->namespace($this->namespace)
        //         ->group(base_path('routes/api.php'));
        //
        //     Route::middleware('web')
        //         ->namespace($this->namespace)
        //         ->group(base_path('routes/web.php'));
        // });
    }

    public function map()
    {
        // $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::prefix('Elasticbase')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(__DIR__ . '\..\Routes\web.php');
    }

    // protected function mapApiRoutes()
    // {
    //     Route::prefix('Elasticbase\api')
    //         ->middleware('api')
    //         ->namespace($this->namespace)
    //         ->group(__DIR__ . '\..\Routes\api.php');
    // }
}
