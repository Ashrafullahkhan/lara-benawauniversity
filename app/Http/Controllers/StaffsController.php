<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StaffsController extends Controller
{

    public function index()
    {
        $data = Staff::latest();

        if (request('search')) {
            $data->where('name', 'like', '%' . request('search') . '%');

        }
        return view('admin/staffs/staffs', ['data' => $data->paginate(5)]);
    }

    public function insert_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'lang' => 'required',
            'pic' => 'required|image',
        ]);

        $pic = $request->pic->store('staffs');
        $form_data = array(
            'name' => $request->name,
            'job' => $request->job,
            'lang' => $request->lang,
            'pic' => $pic);

        Staff::create($form_data);

        return redirect()->back()->with('success', 'post store in database successfully');
    }

    public function update(Staff $staff)
    {
        return view('/admin/staffs/staff-update', ['staff' => $staff]);
    }

    public function edit(Request $staff)
    {
        $data = Staff::find($staff->id);
        $image_file = $staff->pic;

        if ($image_file) {
            File::delete(public_path('storage/' . $data->pic));
            $data->pic = $staff->pic->store('staffs');
        }

        $data->name = $staff->name;
        $data->job = $staff->job;

        $data->update();

        return back()->with('success', "post updated successfully");
    }

    public function destroy(Staff $staff)
    {
        File::delete(public_path('storage/' . $staff->pic));
        $staff->delete();
        return back()->with('success', "post delete successfully");
    }

}
