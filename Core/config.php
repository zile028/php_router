<?php

return $_SERVER["SERVER_NAME"] === "localhost" ?
    [
        "database" => [
            "host" => "localhost",
            "port" => 3306,
            "dbname" => "laracast",
            "charset" => "utf8mb4",
            "username" => "root",
            "password" => ""
        ]] : [
        "database" => [
            "host" => "localhost",
            "port" => 3306,
            "dbname" => "dexawebdev_notes",
            "charset" => "utf8mb4",
            "username" => "dexawebdev_admin_notes",
            "password" => "davidavid+2791447"
        ]
    ];
