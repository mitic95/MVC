<?php

namespace App\Controllers;

class PageController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view('index');
    }
}