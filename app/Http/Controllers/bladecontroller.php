<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladecontroller extends Controller
{
  
    
    public function home()
    {
        return view('Home');
    }
    public function generic()
    {
        return view('Generic');
    }
    public function index()
    {
        return view('layout.index');
    }
    public function element()
    {
        return view('Element');
    }
}
