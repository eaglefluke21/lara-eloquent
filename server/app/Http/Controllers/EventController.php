<?php

namespace App\Http\Controllers;

use App\Models\Event;

use Illuminate\Http\Request;


class EventController extends Controller
{
    public function create()
    {
        return view('eventcreate');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
            'image_url' => "required"
        ]);

        Event::create($validatedData);

        return redirect()->route('/welcome')->with('success', 'Event created successfully.');

    }
}