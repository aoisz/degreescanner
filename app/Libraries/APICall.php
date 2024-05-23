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
            'json' => $body
        ]);
    }

    function postWithBody(string $uri, $body) {
        return $this->client->request('post', $uri, [
            'body' => json_encode($body)
        ]);
    }

    function postWithFile($uri, $data) {
        return $this->client->request('post', $uri, [
            'headers' => [
                'Content-type' => 'multipart/form-data'
            ],
            'multipart' => [
                'file' => new \CURLFile($data["file_path"]),
                'studentId' => $data["studentId"]
            ]
        ]);
    }
}