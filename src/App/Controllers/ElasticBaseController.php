<?php

namespace Evertramos\ElasticBase\App\Controllers;

Class ElasticBaseController
{
    public function index()
    {
        return 'index from controller....';
    }

    public function status()
    {
        return 'tudo ok!';
    }

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

}
