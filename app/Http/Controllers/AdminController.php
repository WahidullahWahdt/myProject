<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class AdminController extends Controller
{
//    public function index() 
//     {
//      $pass=Hash::make('1234');
//     //  dd($pass);
//      return view('Admin',compact('pass'));
//     }

public function profile() 
    {
     return view('profile');
    }


}
