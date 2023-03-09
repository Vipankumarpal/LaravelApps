<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        return view ('home');
    }

    // Function For About Controller
    public function about()
    {
        return view ('about');
    }
}


