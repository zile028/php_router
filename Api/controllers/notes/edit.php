<?php

use Core\App;

$db = App::resolve(Core\Database::class);

$note = $db->query("SELECT * FROM notes WHERE id = :id;", ["id" => $_GET["id"]])->findOne();
authorize(getUser("id") === $note["user_id"]);
view("notes/edit.view.php", ["heading" => "Edit note", "note" => $note]);