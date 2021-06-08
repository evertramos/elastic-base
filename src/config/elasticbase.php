<?php

return [

    'elasticbase' => [
        'elastic_token' => env('ELASTIC_TOKEN'),

        'elastic_url' => env('ELASTIC_URL', 'localhost'),

        'elastic_port' => env('ELASTIC_PORT', '9200')
    ]
];
