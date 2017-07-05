<?php

namespace PHPJasperCommand;

use GuzzleHttp\Client as GuzzleClient;

class Branches
{
    protected $guzzle;

    public function __construct()
    {
        $this->guzzle = new GuzzleClient();
    }

    public function listBranchesAvailable()
    {
        $res = $this->guzzle->request('GET', 'https://api.github.com/repos/phpjasper/phpjasper/branches', [
            'headers' => [
                'Accept' => 'application/vnd.github.v3+json'
            ]
        ]);

        $jsonResponse = json_decode($res->getBody());

        $result = '';
        foreach ($jsonResponse as $j) {
            $result .= $j->name . ' ';
        }
        return $result;
    }

}