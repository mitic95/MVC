<?php

namespace App\Controllers;

use Core\App;

class SessionsController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store()
    {
        $email = $this->trim($_POST['email']);

        $this->validate($email);

        App::get('database')->login('email', $email);
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        header('Location: /');
    }
}