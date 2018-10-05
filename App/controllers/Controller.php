<?php

namespace App\Controllers;

abstract class Controller
{
    public function validate($email = null,$pass = null,$confirmPass = null)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
            die('Invalid email!');
        }
        if ($pass !== $confirmPass) {
            die('password not equal to confirm password!');
        }
    }

    public function trim($trim)
    {
        return htmlspecialchars(stripslashes(strip_tags(trim($trim))));
    }
}