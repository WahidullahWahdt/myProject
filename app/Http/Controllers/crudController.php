<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
class crudController extends Controller
{
    public function show()
    {
        $data=Enrollment::get();
        return view('showdata',compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'category'=>'required',
            'massage'=>'required'
        ]);
        $data= new Enrollment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->category=$request->category;
        $data->massage=$request->massage;
        $data->save();
        return redirect()->back();
        
    }
    public function delete($id)
    {
        $mydata=Enrollment::where('id',$id)->first();
        $mydata->delete();
        return redirect()->back();
    }
    public function update($id)
    {
        $data=Enrollment::where('id',$id)->first();
        return view('edite',compact('data'));

       
        
    }
    public function edite(Request $request,$id)
    {
        $data=Enrollment::where('id',$id)->first();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->category=$request->category;
        $data->massage=$request->massage;
        $data->update();
        return redirect()->route('show');
        
    }

    
    

    
  
}
