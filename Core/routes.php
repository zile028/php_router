<?php

use Core\Router;

$router = new Router();
$route = [
//    HOME
    "/" => "controllers/index.php",
//    ABOUT
    "/about" => "controllers/about.php",
//    NOTES
    "/notes" => "controllers/notes/index.php",
    "/note" => "controllers/notes/show.php",
    "/notes/create" => "controllers/notes/create.php",
//    CONTACT
    "/contact" => "controllers/contact.php",
];

$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->post("/notes/create", "controllers/notes/create.php");


dd($router);