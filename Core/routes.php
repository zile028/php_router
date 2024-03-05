<?php
$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/notes", "controllers/notes/index.php")->only("auth");
$router->get("/note", "controllers/notes/show.php");
$router->get("/contact", "controllers/contact.php");
$router->get("/notes/create", "controllers/notes/create.php");
$router->get("/note/edit", "controllers/notes/edit.php");
$router->get("/register", "controllers/auth/register.php")->only("guest");
$router->get("/login", "controllers/auth/login.php")->only("guest");
$router->get("/logout", "controllers/auth/logout.php")->only("auth");

$router->post("/notes/create", "controllers/notes/create.php");
$router->post("/register", "controllers/auth/create.php")->only("guest");
$router->post("/login", "controllers/auth/signin.php")->only("guest");

$router->patch("/note", "controllers/notes/update.php");

$router->delete("/note", "controllers/notes/delete.php");
