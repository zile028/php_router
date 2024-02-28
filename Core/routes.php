<?php
$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/notes", "controllers/notes/index.php");
$router->get("/note", "controllers/notes/show.php");
$router->get("/contact", "controllers/contact.php");
$router->get("/notes/create", "controllers/notes/create.php");

$router->post("/notes/create", "controllers/notes/create.php");

$router->delete("/note", "controllers/notes/delete.php");