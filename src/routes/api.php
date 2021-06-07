<?php

use Evertramos\ElasticBase\App\Controllers\ElasticBaseController;

Route::middleware(['api', 'auth:sanctum'])->prefix('api/elastic-base')->group(function() {

    Route::get('/status', [ElasticBaseController::class, 'status']);
});



