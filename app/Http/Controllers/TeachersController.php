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
     return view('teachers', compact('data'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function insert_image(Request $request)
    {
  $request->validate([
      'name'  => 'required',
       'job'  => 'required',
      'pic' => 'required|image|max:2048'
     ]);

     $image_file = $request->pic;

     $image = Image::make($image_file);

     Response::make($image->encode('jpeg'));


     $form_data = array(
      'name'  => $request->name,
      'job'  => $request->job,
      'pic' => $image);
      

     Teacher::create($form_data);

     return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function fetch_image($image_id)
    {
     $image = Teacher::findOrFail($image_id);

     $image_file = Image::make($image->pic);

     $response = Response::make($image_file->encode('jpeg'));
   

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
}
