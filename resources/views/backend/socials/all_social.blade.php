@extends('layouts.backend.main_layout')
@section('title', 'List of Social Links You added')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Social Links</h1>
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
        <th scope="col">Icons</th>
        <th scope="col">Social Link</th>
        <th scope="col">Publication Status</th>
        <th scope="col" class="col-md-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $sl=$socials->firstItem() ?>
      @foreach($socials as $social)
      <tr>
        <th scope="row">{{$sl++}}</th>
        <td><i style="font-size:30px" class="{{$social->social_name}}"></i></td>
        <td>{{$social->social_link}}</td>

        @if($social->publication_status==1)
            <td class="center">
                <span class="label label-success">Active</span>
            </td>
        @else
            <td class="center">
                <span class="label label-danger">Inactive</span>
            </td>
        @endif

        <td>
          @if ($social->publication_status==1)
              <a class="btn btn-sm btn-warning" href="{{url('/social/'.$social->id.'/inactive')}}">
                  <i class="fa fa-thumbs-o-down fa-fw"></i>
              </a>
          @else
              <a class="btn btn-sm btn-success" href="{{url('/social/'.$social->id.'/active')}}">
                  <i class="fa fa-thumbs-o-up fa-fw"></i>
              </a>
          @endif
          <a class="btn btn-sm btn-danger" id="delete" href="{{url('/social/'.$social->id.'/delete')}}" onclick="return confirmDelete();"><i class="fa fa-trash-o fa-fw"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center">
    {{$socials->links()}}
  </div>
</div>

@endsection