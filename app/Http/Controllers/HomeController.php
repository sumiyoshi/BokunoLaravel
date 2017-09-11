<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function indexAction()
    {
        return view('welcome');
    }
}