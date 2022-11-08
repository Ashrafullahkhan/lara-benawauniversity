<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Response;
use Image;


class TeachersController extends Controller

{

function index()
    {
     $data = Teacher::latest()->paginate(5);
     return view('admin/teachers', compact('data'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

 function insert_image(Request $request)
  {

  $request->validate([
      'name'  => 'required',
       'job'  => 'required',
        'lang'  => 'required',
      'pic' => 'required|image'
     ]);


  $pic = $request->pic->store('teachers');
     $form_data = array(
      'name'  => $request->name,
      'job'  => $request->job,
         'lang'  => $request->lang,
      'pic' =>$pic);
      

     Teacher::create($form_data);

      return redirect()->back()->with('success', 'Image store in database successfully');
    }

  


    function update (Teacher $teacher)
    {
        return view ('/admin/teacher-update',['teacher'=>$teacher]);
    }
   public function edit (Request $teacher)
    {
       $data= Teacher::find($teacher->id);
      $image_file = $teacher->pic;

      if ($image_file)
      {

       $image = Image::make($image_file);
    Response::make($image->encode('jpeg'));
      }


     
    
     $data -> name=$teacher->name;
     $data -> job=$teacher->job;
      $image_file ?    $data -> pic= $image: null;
  

     $data->save();

  return back()->with('success',"post updated");
    }

    public function destroy(Teacher $teacher){
      $teacher->delete();
  return back()->with('success',"post delete");
    }


}
