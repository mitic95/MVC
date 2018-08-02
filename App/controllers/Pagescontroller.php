<?php

namespace App\Controllers;

use App\Core\App;

class Pagescontroller
{
    public function home()
    {

        return view('index');

    }

    public function register()
    {

        return view('register');

    }

    public function login()
    {

        return view('login');

    }

    public function listAllUser()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }
}