<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeachersController extends Controller
{
   
    public function index()
    {
        $data = Teachers::all();
        return view('admin.teachers.index',compact('data'));
    }

   
    public function create()
    {
        ////////////////
    }

   
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'name'=>'required',
        
            'job'=>'required',
            
          ])->validate();


        $file =$request->file('pic');
        $image ="";
        if(!empty($file)){
            $image = time().".".$file->getClientOriginalExtension();
        $file->move('admin/images/teacher_pic',$image);
        }
        Teachers::create([
            'pic'=>$image,
            'name'=>$request->name,
            'job'=>$request->job
        ]);
        return redirect()->route('teachers.index')->with('success', 'tacher aded to database   successfully');
    }

   
    public function show($id)
    {
        ////////////////////
    }

    
    public function edit($id)
    {  
      


        $data=Teachers::findOrFail($id);
        return view('admin.teachers.edit',compact('data'));
    }

   
    public function update(Request $request, $id)
    {
        Validator::make($request->all(),[
            'name'=>'required',
        
            'job'=>'required',
            
          ])->validate();

       $data=Teachers::findOrFail($id);
       $file=$request->file('pic');
       $image="";
       if(!empty($file)){
        if(file_exists('admin/images/teacher_pic/'.$data->pic)){
           unlink('admin/images/teacher_pic/'.$data->pic);
        }
        $image = time().".".$file->getClientOriginalExtension();
        $file->move('admin/images/teacher_pic',$image);
       }else{
        $image=$data->pic;
       }
       $data->update([
        'pic'=>$image,
        'name'=>$request->name,
        'job'=>$request->job,
       ]);
       return redirect()->route('teachers.index')->with('success', 'the changes was saved successfully');
    }

    
    public function destroy($id)
    {
        $data=Teachers::findOrFail($id);
            if(file_exists('admin/images/teacher_pic/')){
                unlink('admin/images/teacher_pic/'.$data->pic);
            }
        $data->destroy($id);
        return redirect()->route('teachers.index')->with('success', 'file  deleted  successfully');
    }
}
