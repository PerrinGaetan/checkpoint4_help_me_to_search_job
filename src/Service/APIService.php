<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Routing\Annotation\Route;


class APIService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function fetchAllOffer(): array
    {
        $response = $this->client->request(
            'GET',
            'http://127.0.0.1:36261/api/job_offers'
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
        return $content['hydra:member'];
    }

    // public function fetchOffersBy($job): array
    // {
    //     $response = $this->client->request(
    //         'GET',
    //         "http://127.0.0.1:35871/api/job_offers"
    //     );

    //     $statusCode = $response->getStatusCode();
    //     // $statusCode = 200
    //     $contentType = $response->getHeaders()['content-type'][0];
    //     // $contentType = 'application/json'
    //     $content = $response->getContent();
    //     // $content = '{"id":521583, "name":"symfony-docs", ...}'
    //     $content = $response->toArray();
    //     // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
    //     return $content['hydra:member'];
    // }
}
