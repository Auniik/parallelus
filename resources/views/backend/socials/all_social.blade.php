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

    @foreach($socials as $social)
    <tr>
      <th scope="row">{{$social->id}}</th>
      <td><i style="font-size:30px" class="{{$social->social_name}}"></i></td>
      <td>{{$social->social_link}}</td>
      <td>
        <a class="btn btn-xs btn-danger" id="delete" href="{{url('/social/'.$social->id.'/delete')}}" onclick="return confirmDelete();">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection