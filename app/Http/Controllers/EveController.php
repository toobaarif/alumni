<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Log;

class EveController extends Controller
{
    // 
    public function index(){
        $event = Event::all();
        return view('admin.events.events', compact('event'));
    }

    public function showForm()
    { 
        return view('admin.events.eventform');
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





 
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
    }




    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'event_date' => 'required|date',
            'event_location' => 'required|string|max:255',
            'event_type' => 'required|in:Conference,Workshop,Meetup,Other',
            'event_status' => 'required|in:planned,ongoing,completed',
        ]);
    
        // Handle file upload
        if ($request->hasFile('picture')) {
            $fileName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('uploads'), $fileName);
        }  
    
        // Create a new event
        Event::create([
            'name' => $request->event_name,
            'description' => $request->event_description,
            'picture' => $fileName ?? null,
            'event_date' => $request->event_date,
            'event_location' => $request->event_location,
            'event_type' => $request->event_type,
            'event_status' => $request->event_status,
        ]);
    
        // Redirect or return response
        return redirect('events')->with('success', 'Event created successfully.');
    }
    


public function update(Request $request, $id)
{
    $event = Event::find($id);

    if (!$event) {
        return response()->json(['error' => 'Event not found.'], 404);
    }

    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'event_date' => 'required|date',
        'event_location' => 'required|string|max:255',
        'event_type' => 'required|in:Conference,Workshop,Meetup,Other',
        'event_status' => 'required|in:planned,ongoing,completed',
    ]);

    $event->name = $request->name;
    $event->event_type = $request->event_type;
    $event->event_status = $request->event_status;
    $event->event_location = $request->event_location;
    $event->event_date = $request->event_date;
    $event->description = $request->description;

    if ($request->hasFile('picture')) {
        $fileName = time().'.'.$request->picture->extension();  
        $request->picture->move(public_path('uploads'), $fileName);
        $event->picture = $fileName;
    }

    $event->save();

    return response()->json(['success' => 'Event updated successfully.']);
}

}



