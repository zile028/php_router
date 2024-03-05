<?php

use Core\App;

$db = App::resolve(Core\Database::class);

$errors = [];
$currentUserId = 1;

$note = $db->query("SELECT * FROM notes WHERE id = :id;", ["id" => $_GET["id"]])->findOneOrFail();
authorize($currentUserId === $note["user_id"]);

extract($_POST);


if (!Core\Validator::string($body, 1, 100)) {
    $errors["body"] = "A body of no more than 1,000 characters is required.";
}

if (!empty($errors)) {
    view("notes/edit.view.php", ["heading" => "Edit Note", "errors" => $errors, "note" => $note]);
    return;
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", ["body" => $_POST["body"], "id" => $_GET["id"]]);
header("Location: /notes");
die();



