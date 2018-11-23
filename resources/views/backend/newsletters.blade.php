@extends('layouts.backend')
@section('admin_content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">User Email</th>
      <th scope="col">User Zip</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $v_data)
    <tr>
      <th scope="row">{{$v_data->id}}</th>
      <td>{{$v_data->user_email}}</td>
      <td>{{$v_data->user_zip}}</td>
      <td>
       
      	<a class="btn btn-danger" id="delete" href="{{url('/delet
      	e-newsletter/'.$v_data->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection