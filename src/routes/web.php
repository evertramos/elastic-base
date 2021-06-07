<?php

use Evertramos\ElasticBase\App\Controllers\ElasticBaseController;

// use Elasticsearch\ClientBuilder;

Route::get('/foi', [ElasticBaseController::class, 'index']);

Route::get('/vai', function () {

    // $client = ClientBuilder::create()->build();
    // $params = [
    //     'index' => 'my_index',
    //     'body'  => [
    //         'query' => [
    //             'match' => [
    //                 'attachment.content' => 'text'
    //             ]
    //         ]
    //     ]
    // ];
    // $response = $client->search($params);
    // print_r($response);

    return 'vai...!!!!';
});

