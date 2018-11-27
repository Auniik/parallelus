<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addEvent(){
    	return view('backend.events.add_event');
    }
    public function saveEvent(Request $request){
        $validatedData = $request->validate([
            'eventTitle' => 'required|max:30',
            'eventDescription' => 'required|max:100',
            'eventDate' => 'required|max:50',
            'eventTime' => 'required|max:30',
            'eventLocation' => 'required|max:70',
        ]);
    	Event::create([
    		'event_title' => $request->eventTitle,
    		'description' => $request->eventDescription,
    		'event_date' => $request->eventDate,
    		'event_time' => $request->eventTime,
    		'event_location' => $request->eventLocation,
    	]);
   		return redirect('/event/add')->withMessage('Event Added Successfully');
    }

    public function allEvent(){
    	$events=Event::get();
    	return view('backend.events.all_event', compact('events'));
    }

    public function deleteEvent($id)
	{
		$data=Event::findOrFail($id);
		$data->delete();
		return redirect('/event/all')->withMessage('Event Deleted');
	}
	public function editEvent($id){
		$event=Event::findOrFail($id);
		return view('/backend.events.edit_event', compact('event'));
	}
	public function updateEvent(Request $request, $id){
		$info=Event::findOrFail($id);
        $info->update([
        	'event_title' => $request->eventTitle,
    		'description' => $request->eventDescription,
    		'event_date' => $request->eventDate,
    		'event_time' => $request->eventTime,
    		'event_location' => $request->eventLocation,
        ]);
		return redirect('/event/all')->withMessage('Event updated successfully');
	}
}
