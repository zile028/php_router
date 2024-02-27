<?php
const BASE_PATH = __DIR__ . "/../";
require_once(__DIR__ . "/../core/functions.php");

spl_autoload_register(static function ($class) {

    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path("$class.php");
});

require base_path("core/router.php");
