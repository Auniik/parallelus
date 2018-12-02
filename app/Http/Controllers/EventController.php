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
            'eventTitle' => 'required|max:190',
            'eventDescription' => 'required',
            'eventDate' => 'required|max:50',
            'startingTime' => 'required|max:50',
            'endingTime' => 'required|max:50',
            'eventLocation' => 'required|max:190',
        ]);
    	Event::create([
    		'event_title' => $request->eventTitle,
    		'description' => $request->eventDescription,
    		'event_date' => $request->eventDate,
    		'starting_time' => $request->startingTime,
    		'ending_time' => $request->endingTime,
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
            'starting_time' => $request->startingTime,
            'ending_time' => $request->endingTime,
            'event_location' => $request->eventLocation,
        ]);
		return redirect('/event/all')->withMessage('Event updated successfully');
	}
    public function events(){
        $events = Event::orderBy('event_date', 'desc')->paginate(5);
        // dd($events->event_date->englishMonth);
        return view('frontend.events.events', compact('events'));
    }
}
