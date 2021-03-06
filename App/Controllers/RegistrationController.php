<?php

namespace App\Controllers;

use Core\App;

/**
 * Class RegistrationController
 * @package App\Controllers
 */
class RegistrationController extends PublicController
{
    /**
     * @return mixed
     */
    public function create()
    {
        return view('register');
    }

    /**
     * @throws \Exception
     */
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