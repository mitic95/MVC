<?php

namespace App\Controllers;

use Core\App;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        $email = $this->trim($_POST['email']);
        $pass = $this->trim($_POST['pass']);
        $confirmPass = $this->trim($_POST['confirm_password']);

        $this->validate($email,$pass,$confirmPass);

        App::get('database')->insert('users', [

            'email' => $email,

            'password' => password_hash($pass, PASSWORD_BCRYPT)

        ]);

        return redirect('login');
    }
}