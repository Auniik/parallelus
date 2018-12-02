@extends('layouts.backend.main_layout')
@section('title', 'Edit Event')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Edit Event</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Edit Event
    		</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-8">
                
                <form role="form" action="{{ url('/event/'.$event->id.'/update')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Event Title</label>
                        <input class="form-control" value="{{$event->event_title}}" name="eventTitle"  placeholder="Enter a Event Title">
                    </div>
                    <div class="form-group">
                        <label>Event Description</label>
                        <textarea class="form-control"  rows="4" name="eventDescription">{{$event->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Event Date</label>
                        <input type="date" class="form-control"  value="{{$event->event_date}}" name="eventDate"  placeholder="Enter event date">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Starting Time</label>
                                <input type="text" class="form-control"  value="{{$event->starting_time}}" placeholder="example: 11:15 AM"  name="startingTime">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ending Time</label>
                                <input type="text" class="form-control"  value="{{$event->ending_time}}" placeholder="example: 2:20 PM" name="endingTime">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label>Event Location</label>
                        <input class="form-control" name="eventLocation"  value="{{$event->event_location}}" placeholder="Enter event location">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success col-xs-12" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.col-lg-6 (nested) -->
        </div>
        </div>
    </div>
</div>
@endsection