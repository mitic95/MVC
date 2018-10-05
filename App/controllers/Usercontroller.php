<?php

namespace App\Controllers;

use App\Core\App;

class Usercontroller
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }
}