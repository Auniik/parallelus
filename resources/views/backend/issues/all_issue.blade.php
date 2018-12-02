@extends('layouts.backend.main_layout')
@section('title', 'All Issue')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Issues</h1>
  </div>
<!-- /.col-lg-12 -->
</div>
<div class="table table-responsive">
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
      <th scope="col">Feature Image</th>
      <th scope="col">Heading</th>
      <th scope="col">Description</th>
      <th scope="col" class="col-md-2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $sl=$issues->firstItem() ?>
    @foreach($issues as $issue)
    <tr>
      <th scope="row">{{$sl++}}</th>
      <th scope="row"><img src="{{url($issue->issue_image)}}" alt="" style="height:70px; width: 110 px"></th>
      <td>{{substr($issue->issue_heading, 0, 40)}}</td>
      <td>{!! str_limit(optional($issue)->issue_description, 250) !!}</td>
      <td>
        <a class="btn btn-xs btn-primary" href="{{url('/issue/'.$issue->id.'/edit')}}">Edit</a>
        <a class="btn btn-xs btn-danger" id="delete" href="{{url('/issue/'.$issue->id.'/delete')}}" onclick="return confirmDelete();">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>

<div class="text-center">
  {{$issues->links()}}
</div>
@endsection