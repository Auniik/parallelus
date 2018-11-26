@extends('layouts.backend.main_layout')
@section('title', 'All News')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">News</h1>
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
      <th scope="col">Heading</th>
      <th scope="col">Description</th>
      <th scope="col" class="col-md-2">Actions</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $v_data)
    <tr>
      <th scope="row">{{$v_data->id}}</th>
      <td>{{substr($v_data->news_heading, 0, 40)}}</td>
      <td>{{strip_tags(substr($v_data->description, 0, 200))}}</td>
      <td>
        <a class="btn btn-xs btn-primary" href="{{url('/edit-news/'.$v_data->id)}}">Edit</a>
        <a class="btn btn-xs btn-danger" id="delete" href="{{url('/delete-news/'.$v_data->id)}}" onclick="return confirmDelete();">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection