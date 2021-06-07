<?php

use Illuminate\Support\Facades\Route;
use Elasticsearch\ClientBuilder;

Route::get('/vai', function () {

    // $client = ClientBuilder::create()->build();
    // $params = [
    //     'index' => 'my_index',
    //     'body'  => [
    //         'query' => [
    //             'match' => [
    //                 'ttachment.content' => 'text'
    //             ]
    //         ]
    //     ]
    // ];
    // $response = $client->search($params);
    // print_r($response);

    return 'vai...';
});

