<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventsController extends Controller
{

    public function index()
    {
        $data = Event::latest();

        if (request('search')) {
            $data->where('title', 'like', '%' . request('search') . '%');

        }
        return view('/admin/events/events', ['data' => $data->paginate(5)]);
    }

    public function insert_data(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'lang' => 'required',
            'location' => 'required',
            'main_pic' => 'required|image',
            'pic2' => 'image',
            'pic3' => 'image',
        ]);

        $main_pic = $request->main_pic->store('events');
        $pic2 = $request->pic2 ? $pic2 = $request->pic2->store('events') : null;
        $pic3 = $request->pic3 ? $pic3 = $request->pic3->store('events') : null;

        $form_data = array(
            'title' => $request->title,
            'body' => $request->body,
            'lang' => $request->lang,
            'location' => $request->location,
            'main_pic' => $main_pic,
            'pic2' => $pic2,
            'pic3' => $pic3);

        Event::create($form_data);

        return redirect()->back()->with('success', 'post store in database successfully');
    }

    public function update(Event $event)
    {
        return view('/admin/events/update-event', ['event' => $event]);
    }

    public function edit(Request $event)
    {
        $data = Event::find($event->id);
        $image_file = $event->main_pic;

        if ($image_file) {
            File::delete(public_path('storage/' . $data->main_pic));

            $data->main_pic = $event->main_pic->store('events');

            if ($event->pic2) {

                File::delete(public_path('storage/' . $data->pic2));

                $data->pic2 = $event->pic2->store('events');

            }
            if ($event->pic3) {

                File::delete(public_path('storage/' . $data->pic3));

                $data->pic3 = $event->pic3->store('events');

            }

        }

        $data->title = $event->title;
        $data->body = $event->body;

        $data->update();

        return back()->with('success', "post updated successfully");
    }

    public function destroy(Event $event)
    {
        File::delete(public_path('storage/' . $event->main_pic));
        File::delete(public_path('storage/' . $event->pic2));
        File::delete(public_path('storage/' . $event->pic3));

        $event->delete();
        return back()->with('success', "post delete successfully");
    }

}
