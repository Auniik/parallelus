@extends('layouts.backend.main_layout')
@section('title', 'Messages from users')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Messages</h1>
  </div>
</div>
<table class="table">
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
  	@foreach($data as $v_data)
    <tr>
      <th scope="row">{{$v_data->id}}</th>
      <td>{{$v_data->first_name}}</td>
      <td>{{$v_data->last_name}}</td>
      <td>{{$v_data->email}}</td>
      <td>{{$v_data->zip}}</td>
      <td>{{$v_data->mobile_number}}</td>
      <td>{{$v_data->comments}}</td>
      <td>
       
      	<a class="btn btn-xs btn-danger" id="delete" href="{{url('/delete-messages/'.$v_data->id)}}" onclick="return confirmDelete();">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection