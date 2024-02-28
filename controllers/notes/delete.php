<?php

use Core\App;

App::resolve(Core\Response::class);
//use Core\Database;

//$config = require base_path("Core/config.php");
//$db = new Database($config["database"]);

$db = App::resolve(Core\Database::class);
$currentUserId = 1;

$note = $db->query("DELETE FROM notes WHERE id = :id;", ["id" => $_GET["id"]]);
header("Location: /notes");
//view("notes/show.view.php", ["heading" => "Note", "note" => $note]);
