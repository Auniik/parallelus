@extends('layouts.backend.main_layout')
@section('title', 'Messages from users')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Messages</h1>
  </div>
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
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Zip</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Comments</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($messages as $message)
    <tr>
      <th scope="row">{{$message->id}}</th>
      <td>{{$message->first_name}}</td>
      <td>{{$message->last_name}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->zip}}</td>
      <td>{{$message->mobile_number}}</td>
      <td>{{$message->comments}}</td>
      <td>
       
      	<a class="btn btn-xs btn-danger" id="delete" href="{{url('/message/'.$message->id.'/delete')}}" onclick="return confirmDelete();">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection