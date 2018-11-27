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

    @foreach($news as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{substr($article->news_heading, 0, 40)}}</td>
      <td>{{strip_tags(substr($article->description, 0, 200))}}</td>
      <td>
        <a class="btn btn-xs btn-primary" href="{{url('/news/'.$article->id.'/edit')}}">Edit</a>
        <a class="btn btn-xs btn-danger" id="delete" href="{{url('/news/'.$article->id.'/delete')}}" onclick="return confirmDelete();">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection