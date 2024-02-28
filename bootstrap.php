<?php

use Core\App;
use Core\Container;
use Core\Database;
use Core\Response;

$container = new Container();

$container->bind("Core\Database", function () {
    $config = require base_path("Core/config.php");
    return new Database($config["database"]);
});

App::setContainer($container);