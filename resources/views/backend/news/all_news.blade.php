@extends('layouts.backend.main_layout')
@section('title', 'All News')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">News</h1>
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
      {{-- <th scope="col">Description</th> --}}
      <th scope="col">Publication Status</th>
      <th scope="col" class="col-md-3">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $sl=$news->firstItem() ?>
    @foreach($news as $article)
    <tr>
      <th scope="row">{{$sl++}}</th>
      <th scope="row"><a href="{{url('/news/'.$article->id)}}"></a><img src="{{url($article->article_image)}}" alt="" style="height:70px; width: 110 px"></th>
      <td>{{substr($article->news_heading, 0, 40)}}</td>
      {{-- <td>{{strip_tags(substr($article->description, 0, 200))}}</td> --}}

      @if($article->publication_status==1)
          <td class="center">
              <span class="label label-success">Active</span>
          </td>
      @else
          <td class="center">
              <span class="label label-danger">Inactive</span>
          </td>
      @endif

      <td>
        @if ($article->publication_status==1)
            <a class="btn btn-sm btn-warning" href="{{url('/news/'.$article->id.'/inactive')}}">
                <i class="fa fa-thumbs-o-down fa-fw"></i>
            </a>
        @else
            <a class="btn btn-sm btn-success" href="{{url('/news/'.$article->id.'/active')}}">
                <i class="fa fa-thumbs-o-up fa-fw"></i>
            </a>
        @endif
        <a class="btn btn-sm btn-warning" href="{{url('/news/'.$article->id.'/view')}}"><i class="fa fa-eye fa-fw"></i></a>
        <a class="btn btn-sm btn-primary" href="{{url('/news/'.$article->id.'/edit')}}"><i class="fa fa-edit fa-fw"></i></a>
        <a class="btn btn-sm btn-danger" id="delete" href="{{url('/news/'.$article->id.'/delete')}}" onclick="return confirmDelete();"><i class="fa fa-trash-o fa-fw"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="text-center">
  {{$news->links()}}
</div>

@endsection