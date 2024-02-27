<?php

function dd($arg)
{
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
    die();
}

function authorize($condition, $status)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($view, $params = [])
{
    extract($params);
    require BASE_PATH . "views/$view";
}