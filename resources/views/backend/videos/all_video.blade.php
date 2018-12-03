@extends('layouts.backend.main_layout')
@section('title', 'View videos you added')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Video Links</h1>
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
        <th scope="col">Title</th>
        <th scope="col">Short Description</th>
        <th scope="col">Youtube Link</th>
        <th scope="col" class="col-md-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      
      <?php $sl = $videos->firstItem() ?>
      @foreach($videos as $video)
      <tr>
        <th scope="row">{{$sl++}}</th>
        <td>{{$video->video_title}}</td>
        <td>{{$video->short_description}}"></td>
        <td><a href="http://youtu.be/{{$video->video_url}}">http://youtu.be/{{$video->video_url}}</a></td>
        <td>
          <a class="btn btn-sm btn-danger" id="delete" href="{{url('/video/'.$video->id.'/delete')}}" onclick="return confirmDelete();"><i class="fa fa-trash-o fa-fw"></i></a>
        </td>
      </tr>
      @endforeach
      {{ $videos->links() }}
    </tbody>
  </table>
</div>
@endsection