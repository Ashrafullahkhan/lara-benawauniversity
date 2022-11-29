<?php

namespace App\Http\Controllers;

use App\Models\Alumuni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AlumuniController extends Controller
{

    public function index()
    {
        $data = Alumuni::latest();

        if (request('search')) {
            $data->where('name', 'like', '%' . request('search') . '%');

        }
        return view('/admin/alumuni/alumuni', ['data' => $data->paginate(5)]);
    }

    public function insert_data(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'body' => 'required',
            'lang' => 'required',
            'main_pic' => 'required|image',

        ]);

        $main_pic = $request->main_pic->store('alumuni');

        $form_data = array(
            'name' => $request->name,
            'body' => $request->body,
            'lang' => $request->lang,
            'main_pic' => $main_pic);

        Alumuni::create($form_data);

        return redirect()->back()->with('success', 'post store in database successfully');
    }

    public function update(Alumuni $alumuni)
    {
        return view('/admin/alumuni/update-alumuni', ['alumuni' => $alumuni]);
    }

    public function edit(Request $alumuni)
    {
        $data = Alumuni::find($alumuni->id);
        $image_file = $alumuni->main_pic;

        if ($image_file) {
            File::delete(public_path('storage/' . $data->main_pic));

            $data->main_pic = $alumuni->main_pic->store('alumuni');

        }

        $data->name = $alumuni->name;
        $data->body = $alumuni->body;

        $data->update();

        return back()->with('success', "post updated successfully");
    }

    public function destroy(Alumuni $alumuni)
    {
        File::delete(public_path('storage/' . $alumuni->main_pic));

        $alumuni->delete();
        return back()->with('success', "post delete successfully");
    }

}
