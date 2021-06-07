<?php

use Evertramos\ElasticBase\App\Controllers\ElasticBaseController;

Route::middleware(['api', 'auth:sanctum'])->group(function() {

    Route::prefix(['api', 'elastic-base'])->group(function () {

        Route::get('/status', [ElasticBaseController::class, 'status']);

        // Route::get('/me', function(Request $request) {
        //     return $request->user();
        // });
        //
        // Route::post('/auth/logout', [AuthController::class, 'logout']);

    });
});


// use Elasticsearch\ClientBuilder;

// Route::get('/foi', [ElasticBaseController::class, 'index']);
//
// Route::get('/vai', function () {
//
//     // $client = ClientBuilder::create()->build();
//     // $params = [
//     //     'index' => 'my_index',
//     //     'body'  => [
//     //         'query' => [
//     //             'match' => [
//     //                 'attachment.content' => 'text'
//     //             ]
//     //         ]
//     //     ]
//     // ];
//     // $response = $client->search($params);
//     // print_r($response);
//
//     return 'vai...!!!!';
// });

