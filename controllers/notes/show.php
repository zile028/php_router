<?php

use Core\Database;
use Core\Response;

$config = require base_path("Core/config.php");
$db = new Database($config["database"]);

$currentUserId = 1;

$note = $db->query("SELECT * FROM notes WHERE id = :id;", ["id" => $_GET["id"]])->findOne();
authorize($currentUserId === $note["user_id"], Response::FORBIDDEN);

view("notes/show.view.php", ["heading" => "Note", "note" => $note]);
