<?php

namespace PHPJasperCommand;

use GuzzleHttp\Client;

class CheckApi
{

    public function __construct()
    {
        $this->api = new Client();
    }

    public function showLatestRelease()
    {
        $res = $this->api->request(
            'GET',
            'https://api.github.com/repos/geekcom/phpjasper/releases/latest'
        );

        $jsonResponse = json_decode($res->getBody());

        return $jsonResponse->name;
    }

}