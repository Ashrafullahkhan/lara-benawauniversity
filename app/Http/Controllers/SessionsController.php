<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if (Auth::attempt($attributes)) {
            return redirect('/admin/teachers')->with('success', 'welcome back');
        }
        return back()->withErrors(['EMAIL' => 'YOUR PROVIDED EMAIL IS INCORECT']);
    }
}
