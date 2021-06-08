<?php

namespace Evertramos\ElasticBase\App\Controllers;

use Elasticsearch\ClientBuilder;

Class ElasticBaseController
{
    protected $client;

    public function __construct()
    {
        $hosts = explode(',', config('elasticbase.elastic_hosts'));

        $this->client = ClientBuilder::create()
            ->setHosts($hosts)
            ->build();
    }

    public function index()
    {
        return 'index from controller....';
    }

    public function status()
    {
        return 'tudo ok!';
    }


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
