<?php

namespace Evertramos\ElasticBase\App\Controllers;

use Elasticsearch\ClientBuilder;
use Illuminate\Support\Facades\Response;

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

    public function indexExists($index_name)
    {
        $params = [
            'index' => $index_name
        ];

        return $this->client->indices()->exists($params);
    }

    public function createIndex($index_name)
    {
        $params = [
            'index' => $index_name
        ];

        if ($this->indexExists($index_name)) {
            return Response::json(['error' => 'Index ' . $index_name . ' already exist in this host.']);
        } else {
            return $this->client->indices()->create($params);
        }
    }

    public function deleteIndex($index_name)
    {
        $params = [
            'index' => $index_name
        ];

        if ($this->indexExists($index_name)) {
            return $this->client->indices()->delete($params);
        } else {
            return Response::json(['error' => 'Index ' . $index_name . ' does not exist in this host.']);
        }
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
