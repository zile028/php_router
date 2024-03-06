<?php

use Core\Router;
use Core\Session;
use Core\ValidationException;

if (session_status()) {
    session_start();
}
const BASE_PATH = __DIR__ . "/";
require(BASE_PATH . "vendor/autoload.php");
require_once(BASE_PATH . "core/functions.php");

//spl_autoload_register(static function ($class) {
//    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
//    require base_path("$class.php");
//});

require_once base_path("bootstrap.php");


$router = new Router();
require_once base_path("Core/routes.php");

$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

try {
    $router->route(parse_url($_SERVER["REQUEST_URI"]), $method);

} catch (ValidationException $exception) {
    Session::flash("errors", $exception->errors);
    Session::flash("old", $exception->old);
    redirect($router->previusUrl());
}
