<?php

namespace App\Controllers;

use App\Core\App;

class Sessionscontroller extends Controller
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
        session_start();
        session_unset();
        session_destroy();

        header('Location: /');
    }
}