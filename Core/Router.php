<?php

namespace Core;
class Router
{
    private array $routes = [];

    public function add($method, $uri, $controller): void
    {
//      $this->routes = compact($method, $uri, $controller); // suprotno od exrtract, extract radi destrukciju
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method
        ];
    }

    public function get($uri, $controller): void
    {
        $this->add("GET", $uri, $controller);
    }

    public function post($uri, $controller): void
    {
        $this->add("POST", $uri, $controller);

    }

    public function delete(string $uri, string $controller): void
    {
        $this->add("DELETE", $uri, $controller);

    }

    public function put(string $uri, string $controller): void
    {
        $this->add("PUT", $uri, $controller);

    }

    public function patch(string $uri, string $controller): void
    {
        $this->add("PATCH", $uri, $controller);
    }


    public function route($uri, $method): void
    {
        $method = strtoupper($method);
        foreach ($this->routes as $route) {
            if ($route["uri"] === $uri["path"] && $route["method"] === $method) {
                require_once BASE_PATH . $route["controller"];
                exit();
            }
        }
        $this->abort();
    }

    public function abort($statusCode = Response::NOT_FOUND): void
    {
        view("$statusCode.view.php");
        die();
    }

}

/*
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
*/

