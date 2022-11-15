<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{

    public function index()
    {
        $data = News::latest();

        if (request('search')) {
            $data->where('name', 'like', '%' . request('search') . '%');

        }
        return view('/admin/news/news', ['data' => $data->paginate(5)]);
    }

    public function insert_data(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'lang' => 'required',
            'main_pic' => 'required|image',
            'pic2' => 'image',
            'pic3' => 'image',
        ]);

        $main_pic = $request->main_pic->store('news');
        $pic2 = $request->pic2 ? $pic2 = $request->pic2->store('news') : null;
        $pic3 = $request->pic3 ? $pic3 = $request->pic3->store('news') : null;

        $form_data = array(
            'title' => $request->title,
            'body' => $request->body,
            'lang' => $request->lang,
            'main_pic' => $main_pic,
            'pic2' => $pic2,
            'pic3' => $pic3);

        News::create($form_data);

        return redirect()->back()->with('success', 'post store in database successfully');
    }

    public function update(News $news)
    {
        return view('/admin/news/update-news', ['news' => $news]);
    }

    public function edit(Request $news)
    {
        $data = News::find($news->id);
        $image_file = $news->main_pic;

        if ($image_file) {
            File::delete(public_path('storage/' . $data->main_pic));
            // File::delete(public_path('storage/' . $data->pic2));
            // File::delete(public_path('storage/' . $data->pic3));

            $data->main_pic = $news->main_pic->store('news');
            // $data->pic2 = $news->2->store('news');
            // $data->pic3= $news->pic2->store('news');

            // $main_pic = $request->main_pic->store('news');
            // $pic2 = $request->pic2 ? $pic2 = $request->pic2->store('news') : null;
            // $pic3 = $request->pic3 ? $pic3 = $request->pic3->store('news') : null;

            if ($news->pic2) {

                File::delete(public_path('storage/' . $data->pic2));
                // File::delete(public_path('storage/' . $data->pic3));

                $data->pic2 = $news->pic2->store('news');
                // $data->pic3= $news->pic2->store('news');

                // $main_pic = $request->main_pic->store('news');
                // $pic2 = $request->pic2 ? $pic2 = $request->pic2->store('news') : null;
                // $pic3 = $request->pic3 ? $pic3 = $request->pic3->store('news') : null;

            }
            if ($news->pic3) {

                File::delete(public_path('storage/' . $data->pic3));

                $data->pic3 = $news->pic3->store('news');

                // $main_pic = $request->main_pic->store('news');
                // $pic2 = $request->pic2 ? $pic2 = $request->pic2->store('news') : null;
                // $pic3 = $request->pic3 ? $pic3 = $request->pic3->store('news') : null;

            }

        }

        $data->title = $news->title;
        $data->body = $news->body;

        $data->update();

        return back()->with('success', "post updated successfully");
    }

    public function destroy(News $news)
    {
        File::delete(public_path('storage/' . $news->main_pic));
        File::delete(public_path('storage/' . $news->pic2));
        File::delete(public_path('storage/' . $news->pic3));

        $news->delete();
        return back()->with('success', "post delete successfully");
    }

}
