<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    private array $routes = [];

    public function add($method, $uri, $controller)
    {
//      $this->routes = compact($method, $uri, $controller); // suprotno od exrtract, extract radi destrukciju
        $this->routes[] = [
            "uri" => "/php_router" . $uri,
            "controller" => $controller,
            "method" => $method,
            "middleware" => null
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add("GET", $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add("POST", $uri, $controller);

    }

    public function delete(string $uri, string $controller)
    {
        return $this->add("DELETE", $uri, $controller);

    }

    public function put(string $uri, string $controller)
    {
        return $this->add("PUT", $uri, $controller);

    }

    public function patch(string $uri, string $controller)
    {
        return $this->add("PATCH", $uri, $controller);
    }

    public function previusUrl()
    {
        return $_SERVER["HTTP_REFERER"];
    }

    public function route($uri, $method)
    {
        $method = strtoupper($method);
        foreach ($this->routes as $route) {
            if ($route["uri"] === $uri["path"] && $route["method"] === $method) {
                Middleware::resolve($route["middleware"]);
                require_once BASE_PATH . "Api/" . $route["controller"];
                exit();
            }
        }
        $this->abort();
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]["middleware"] = $key;
        return $this;
    }


    public function abort($statusCode = Response::NOT_FOUND)
    {
        view("$statusCode.view.php", ["heading" => "Error"]);
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

