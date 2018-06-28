<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function indexAction(): View
    {
        return view("welcome");
    }
}
