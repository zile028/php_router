<?php

namespace Core;

class Authenticator extends Session
{
    public $errors = [];

    public function __construct()
    {
        $this->db = App::resolve(Database::class);
    }

    public function atempt($email, $password)
    {
        $user = $this->db->query("SELECT * FROM users WHERE email = :email", ["email" => $email])->findOne();
        if (!$user) {
            $this->errors["login"] = "User with this email not exist!";
        } elseif (password_verify($password, $user["password"])) {
            static::put("user", ["fullName" => $user["fullName"], "id" => $user["id"]]);
            return true;
        } else {
            $this->errors["login"] = "Invalid credentials";
        }
        Session::flash("errors", $this->errors);
        return false;
    }


}
