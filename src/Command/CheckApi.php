<?php

namespace PHPJasperCommand;

use GuzzleHttp\Client as GuzzleClient;

class CheckApi
{
    protected $guzzle;

    public function __construct()
    {
        $this->guzzle = new GuzzleClient();
    }

    public function showLatestRelease()
    {
        $res = $this->guzzle->request('GET', 'https://api.github.com/repos/phpjasper/phpjasper/releases/latest', [
            'headers' => [
                'Accept' => 'application/vnd.github.v3+json'
            ]
        ]);

        $jsonResponse = json_decode($res->getBody());

        return $jsonResponse->name;
    }

}