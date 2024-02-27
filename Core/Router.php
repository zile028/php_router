<?php

namespace Core;
class Router
{
    private $routes = [];

    public function get($uri, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "GET"
        ];
    }

    public function post($uri, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "POST"
        ];
    }
}


$uri = parse_url($_SERVER["REQUEST_URI"]);

runController($uri, require "routes.php");

function runController($uri, $routes)
{
    if (array_key_exists($uri["path"], $routes)) {
        require_once BASE_PATH . $routes[$uri["path"]];
    } else {
        abort();
    }
}

function abort($statusCode = Response::NOT_FOUND)
{
    require_once "views/$statusCode.view.php";
    die();

}
