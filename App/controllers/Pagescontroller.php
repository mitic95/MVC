<?php

namespace App\Controllers;

class Pagescontroller
{
    public function index()
    {
        return view('index', compact('user'));
    }
}