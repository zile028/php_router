<?php

use Core\App;

//use Core\Database;
//use Core\Response;

//$config = require base_path("Core/config.php");
//$db = new Database($config["database"]);
$db = App::resolve(Core\Database::class);

$note = $db->query("SELECT * FROM notes WHERE id = :id;", ["id" => $_GET["id"]])->findOne();
authorize(getUser("id") === $note["user_id"]);

view("notes/show.view.php", ["heading" => "Note", "note" => $note]);
