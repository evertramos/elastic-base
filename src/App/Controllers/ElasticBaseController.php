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

    public function createIndex($index_name)
    {
        $params = [
            'index' => $index_name
        ];

        return $this->client->indices()->create($params);
    }

    public function index()
    {
        return 'index from controller....';
    }

    public function info()
    {
        return $this->client->info();
    }

    public function status()
    {
        return $this->client->ping();
    }

    public function search($index, $query_string, $highlight = false, $query_match = 'content')
    {
        $params = [
            'index' => $index,
            'body'  => [
                'query' => [
                    'match' => [
                        $query_match => $query_string
                    ]
                ]
            ]
        ];

        if ($highlight) {
            $params['body']['highlight'] = [
                'fields' => [
                    $query_match => new \stdClass()
                ]
            ];
        }

        return $this->client->search($params);
    }
}
