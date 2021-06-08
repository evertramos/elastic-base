<?php

use Evertramos\ElasticBase\App\Controllers\ElasticBaseController;

Route::middleware(['api', 'auth:sanctum'])->prefix('api/elastic-base')->group(function() {

    Route::get('/status', [ElasticBaseController::class, 'status']);
    Route::get('/info', [ElasticBaseController::class, 'info']);
    Route::get('/search/{index}/{query_string}/{highlight?}/{query_match?}', [ElasticBaseController::class, 'search']);
    Route::get('/exists/index/{index}', [ElasticBaseController::class, 'indexExists']);
    Route::post('/create/index/{index_name}', [ElasticBaseController::class, 'createIndex']);
    Route::delete('/delete/index/{index_name}', [ElasticBaseController::class, 'deleteIndex']);
});



