<?php

use Core\App;

//App::resolve(Core\Response::class);
//use Core\Database;

//$config = require base_path("Core/config.php");
//$db = new Database($config["database"]);

$db = App::resolve(Core\Database::class);

$note = $db->query("DELETE FROM notes WHERE id = :id AND user_id = :userId;", ["id" =>
    $_GET["id"], "userId" => getUser("id")])->deleteOrFail();
redirect("./notes");
//view("notes/show.view.php", ["heading" => "Note", "note" => $note]);
