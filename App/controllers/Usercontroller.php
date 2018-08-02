<?php

namespace App\Controllers;

use App\Core\App;

class Usercontroller
{
    public function store()
    {
            $email = $this->trim($_POST['email']);
            $pass = $this->trim($_POST['pass']);
            $confirmPass = $this->trim($_POST['confirm_password']);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
                return redirect('register');
            }

            if ($pass !== $confirmPass) {
                return redirect('register');
            }

        App::get('database')->insert('users', [

            'email' => $email,

            'password' => password_hash($pass, PASSWORD_BCRYPT)

        ]);

        return redirect('login');
    }

    public function trim($trim)
    {

        return htmlspecialchars(stripslashes(strip_tags(trim($trim))));

    }
}