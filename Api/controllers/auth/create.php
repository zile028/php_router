<?php

use Core\App;
use Core\Validator;

$db = App::resolve(Core\Database::class);
extract($_POST);
$errors = [];

if (!Validator::string($fullName, 5)) {
    $errors["fullName"] = "Invalid full name, must have at least 5 letter!";
}

if (!Validator::email($email)) {
    $errors["email"] = "Invalid email!";
}
if (!Validator::string($password, 5, 12)) {
    $errors["password"] = "Invalid password, must have between 5 and 12 letter!";
}

if (count($errors) === 0) {
    $db->query("INSERT INTO users (fullName, email, password) VALUES (:fullName, :email, :password)", [
        ...$_POST, "password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
    ]);
    header("Location: /login");
} else {
    view("auth/register.view.php", ["heading" => "Register", ...$_POST, "errors" => $errors]);
}

