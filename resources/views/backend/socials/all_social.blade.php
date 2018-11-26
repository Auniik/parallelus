@extends('layouts.backend.main_layout')
@section('title', 'List of Social Links You added')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Social Links</h1>
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
      <th scope="col">Icons</th>
      <th scope="col">Social Link</th>
      <th scope="col" class="col-md-2">Actions</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $v_data)
    <tr>
      <th scope="row">{{$v_data->id}}</th>
      <td><i style="font-size:30px" class="{{$v_data->social_name}}"></i></td>
      <td>{{$v_data->social_link}}</td>
      <td>
        <a class="btn btn-xs btn-danger" id="delete" href="{{url('/delete-social/'.$v_data->id)}}" onclick="return confirmDelete();">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection