<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regester;
class regesterController extends Controller
{
    public function store2(Request $request)
    {
        $data= new Regester;
        $data->price=$request->price;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->category=$request->category;
        $data->massage=$request->massage;
        $data->save();
        return redirect()->back();
        
    }
    public function index()
    {
        dd(Regester::get());

    }
}
