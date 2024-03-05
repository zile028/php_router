<?php

use Core\App;
use Core\Session;

$db = App::resolve(Core\Database::class);

$errors = [];

$note = $db->query("SELECT * FROM notes WHERE id = :id;", ["id" => $_GET["id"]])->findOneOrFail();

authorize(Session::currentUser("id") === $note["user_id"]);

extract($_POST);

if (!Core\Validator::string($body, 1, 1000)) {
    $errors["body"] = "A body of no more than 1,000 characters is required.";
}

if (!empty($errors)) {
    view("notes/edit.view.php", ["heading" => "Edit Note", "errors" => $errors, "note" => $note]);
    return;
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", ["body" => $_POST["body"], "id" => $_GET["id"]]);
header("Location: /notes");
die();



