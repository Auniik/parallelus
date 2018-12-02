@extends('layouts.backend.main_layout')
@section('title', 'All Event')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Events</h1>
  </div>
<!-- /.col-lg-12 -->
</div>
<table class="table">
  <?php
    $message=Session::get('message');
    if ($message) { 
        echo '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
          </div>'; 
        Session::put('message',null);
    }
 ?>
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Event Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Starting Time</th>
      <th scope="col">Ending Time</th>
      <th scope="col">Location</th>
      <th scope="col" class="col-md-2">Actions</th>
    </tr>
  </thead>
  <tbody>

    @foreach($events as $event)
    <tr>
      <th scope="row">{{$event->id}}</th>
      <td>{{substr($event->event_title, 0, 40)}}</td>
      <td>{{strip_tags(substr($event->description, 0, 200))}}</td>
      <td>{{$event->event_date}}</td>
      <td>{{$event->starting_time}}</td>
      <td>{{$event->ending_time}}</td>
      <td>{{$event->event_location}}</td>
      <td>
        <a class="btn btn-xs btn-primary" href="{{url('/event/'.$event->id.'/edit')}}">Edit</a>
        <a class="btn btn-xs btn-danger" id="delete" href="{{url('/event/'.$event->id.'/delete')}}" onclick="return confirmDelete();">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection