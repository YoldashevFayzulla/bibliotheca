<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;

class ElasticSearch extends Controller
{
    public function elasticsearch(){


        $client = ClientBuilder::create()
            ->setHosts(config('database.connections.elasticsearch.hosts'))
            ->build();

// Example search query
        $params = [
            'index' => 'my_index',
            'body' => [
                'query' => [
                    'match' => [
                        'field' => 'search_keyword',
                    ],
                ],
            ],
        ];

        $response = $client->search($params);
    }


}
