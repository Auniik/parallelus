@extends('layouts.backend.main_layout')
@section('title', 'Newsletters')
@section('admin_content')
<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Newsletter Requests</h1>
  </div>
</div>
<div class="table table-responsive">
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
      <?php $sl=$newsletters->firstItem() ?>
    	@foreach($newsletters as $newsletter)
      <tr>
        <th scope="row">{{$sl++}}</th>
        <td>{{$newsletter->user_email}}</td>
        <td>{{$newsletter->user_zip}}</td>
        <td>
         
        	<a class="btn btn-xs btn-danger" id="delete" href="{{url('/newsletter/'.$newsletter->id.'/delete')}}" onclick="return confirmDelete();">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center">
    {{$newsletters->links()}}
  </div>
</div>
@endsection