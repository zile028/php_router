<?php

use Core\Database;

$config = require base_path("Core/config.php");
$db = new Database($config["database"]);

$notes = $db->query("SELECT * FROM notes")->find();

view("notes/index.view.php", ["heading" => "Notes", "notes" => $notes]);
