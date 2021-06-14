<?php

namespace Core\Router;

class Request
{
    private $method;

    private $uri;

    private $body = [];

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = '/' . trim($_SERVER['REQUEST_URI'], '/');
        $this->body = $_POST;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getBody()
    {
        return $this->body;
    }
}
