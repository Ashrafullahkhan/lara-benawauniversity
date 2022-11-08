<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeachersController extends Controller
{

    public function index()
    {
        $data = Teacher::latest()->paginate(5);
        return view('admin/teachers', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function insert_image(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'lang' => 'required',
            'pic' => 'required|image',
        ]);

        $pic = $request->pic->store('teachers');
        $form_data = array(
            'name' => $request->name,
            'job' => $request->job,
            'lang' => $request->lang,
            'pic' => $pic);

        Teacher::create($form_data);

        return redirect()->back()->with('success', 'Image store in database successfully');
    }

    public function update(Teacher $teacher)
    {
        return view('/admin/teacher-update', ['teacher' => $teacher]);
    }
    public function edit(Request $teacher)
    {
        $data = Teacher::find($teacher->id);
        $image_file = $teacher->pic;

        if ($image_file) {
            File::delete(public_path('storage/' . $data->pic));
            $data->pic = $teacher->pic->store('teachers');
        }

        $data->name = $teacher->name;
        $data->job = $teacher->job;

        $data->update();

        return back()->with('success', "post updated");
    }

    public function destroy(Teacher $teacher)
    {
        File::delete(public_path('storage/' . $teacher->pic));
        $teacher->delete();
        return back()->with('success', "post delete");
    }

}
