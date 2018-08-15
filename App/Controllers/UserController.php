<?php

namespace App\Controllers;

use Core\App;

class UserController extends ProtectedController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    public function search()
    {
        $search = $this->trim($_POST['search']);

        $users = App::get('database')->searchField('users' ,'email', $search);

        return view('search', compact('users'));
    }

    public function getSearch()
    {
        return view('search');
    }
}