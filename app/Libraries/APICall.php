<?php 
namespace App\Libraries;

class APICall {
    private $client = null;
    function __construct() {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost:8081',
        ]);
    }

    function get($uri) {
        return $this->client->get($uri);
    }

    function post($uri, $body) {
        return $this->client->request('post' ,$uri, [
            'body' => $body
        ]);
    }
}