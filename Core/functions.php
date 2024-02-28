<?php

use Core\Response;

function dd($arg): void
{
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
    die();
}

function authorize($condition, $status = Response::FORBIDDEN): void
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($view, $params = []): void
{
    extract($params);
    require base_path("views/$view");
}

function abort($statusCode = Response::NOT_FOUND): void
{
    view("$statusCode.view.php", ["heading" => "Error"]);
    die();
}