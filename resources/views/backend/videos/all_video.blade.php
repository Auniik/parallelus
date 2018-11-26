@extends('layouts.backend')

@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Video Links</h1>
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
      <th scope="col">Title</th>
      <th scope="col">Short Description</th>
      <th scope="col">Youtube Link</th>
      <th scope="col" class="col-md-2">Actions</th>
    </tr>
  </thead>
  <tbody>
    
    <?php $sl = $data->firstItem() ?>
    @foreach($data as $v_data)
    <tr>
      <th scope="row">{{$sl}}</th>
      <td>{{$v_data->video_title}}"></td>
      <td>{{$v_data->short_description}}"></td>
      <td><a href="http://youtu.be/{{$v_data->video_url}}">http://youtu.be/{{$v_data->video_url}}</a></td>
      <td>
        <a class="btn btn-xs btn-danger" id="delete" href="{{url('/delete-video/'.$v_data->id)}}" onclick="return confirmDelete();">Delete</a>
      </td>
    </tr>
    <?php $sl++ ?>
    @endforeach
    {{ $data->links() }}
  </tbody>
</table>
@endsection