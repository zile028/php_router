<?php

use Api\Form\LoginForm;
use Core\Authenticator;
use Core\Session;
use Core\ValidationException;

extract($_POST);
//try {
$form = LoginForm::validate($_POST);
//} catch (ValidationException $exception) {
//    Session::flash("errors", $exception->errors);
//    Session::flash("old", $exception->old);
//    redirect("/login");
//}

$authenticator = new Authenticator();
if ($authenticator->atempt($email, $password)) {
    redirect("/notes");
}
redirect("/login");


//view("auth/login.view.php", ["heading" => "Login", ...$_POST, "errors" => $form->getErrors()]);
