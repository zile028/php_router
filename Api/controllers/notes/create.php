<?php

use Core\Database;
use Core\Validator;

$config = require base_path("Core/config.php");
$db = new Database($config["database"]);
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    extract($_POST);
    if (!Validator::string($body, 1, 100)) {
        $errors["body"] = "A body of no more than 1,000 characters is required.";
    }

    if (!empty($errors)) {
        view("notes/create.view.php", ["heading" => "Create Note", "errors" => $errors]);
        return;
    }

    $db->query("INSERT INTO notes (body,user_id) VALUES (:body, :user_id)", ["body" => $body, "user_id" => getUser("id")]);
    header("Location: /notes");
    die();
}
view("notes/create.view.php", ["heading" => "Create Note"]);



