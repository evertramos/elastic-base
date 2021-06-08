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
        return $this->client->indices()->exists($this->mountIndexParams($index_name));
    }

    public function createIndex($index_name)
    {
        if ($this->indexExists($index_name)) {
            return Response::json(['error' => 'Index ' . $index_name . ' already exist in this host.']);
        } else {
            return $this->client->indices()->create($this->mountIndexParams($index_name));
        }
    }

    public function deleteIndex($index_name)
    {
        if ($this->indexExists($index_name)) {
            return $this->client->indices()->delete($this->mountIndexParams($index_name));
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

    private function mountIndexParams($data)
    {
        $data = rtrim($data,',');

        $response = [
            'index' => strpos($data, ',') ? explode(',', $data) : $data
        ];

        return $response;
    }
}
