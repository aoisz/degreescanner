<?php 
namespace App\Libraries;

class APICall {
    private $client = null;
    private $session = null;
    function __construct() {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost:8081',
        ]);
        $this->session = \Config\Services::session();
    }

    function get($uri) {
        return $this->client->get($uri);
    }

    function post($uri, $body) {
        return $this->client->request('post' ,$uri, [
            'json' => $body
        ]);
    }
}