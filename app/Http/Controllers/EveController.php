<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EveController extends Controller
{
    //
    public function index(){
        return view('admin.events.events');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'eventDate' => 'required|date',
            'eventLocation' => 'required|string|max:255',
            'eventType' => 'required|in:1,2,3,4',
            'eventStatus' => 'required|in:planned,ongoing,completed',
        ]);

        // Handle file upload
        if ($request->hasFile('picture')) {
            $fileName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads'), $fileName);
        }

        // Create a new event
        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'picture' => $fileName ?? null,
            'event_date' => $request->eventDate,
            'event_location' => $request->eventLocation,
            'event_type' => $request->eventType,
            'event_status' => $request->eventStatus,
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'Event created successfully.');
    }
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }


    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        
        // Delete the associated picture if it exists
        if ($event->picture && file_exists(public_path('uploads/' . $event->picture))) {
            unlink(public_path('uploads/' . $event->picture));
        }

        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
