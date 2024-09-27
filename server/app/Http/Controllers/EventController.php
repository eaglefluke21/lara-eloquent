<?php

namespace App\Http\Controllers;

use App\Models\Event;

use Illuminate\Http\Request;


class EventController extends Controller
{
    // Show the form to create an event
    public function create()
    {
        return view('eventcreate');
    }

    // Handle form submission to create an event
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        // Create a new event in the database
        Event::create($validatedData);

        // Redirect back with success message
        return redirect()->route('events.create')->with('success', 'Event created successfully.');
    }
}