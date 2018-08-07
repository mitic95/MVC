<?php

namespace App\Controllers;

use Core\App;

class UserController extends Controller
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        $test = $this->data;

        return view('users', compact('users', $test));
    }
}