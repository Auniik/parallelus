@extends('layouts.backend.main_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">All Users</h1>
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
        <th scope="col">User Name</th>
        <th scope="col">User Email</th>
        <th scope="col" class="col-md-2">Actions</th>
    </tr>
    </thead>
    <tbody>
<?php $sl=$users->firstItem() ?>
    @foreach($users as $key => $user)
        
        <tr>
            <th scope="row">{{$sl++}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{url('/user/'.$user->id.'/edit')}}"><i class="fa fa-edit fa-fw"></i></a>
                @if($key==0)
                    <button class="btn btn-sm btn-danger" disabled=""><i class="fa fa-trash-o fa-fw"></i></button>
                @else
                    <a class="btn btn-sm btn-danger"  id="delete" href="{{url('/user/'.$user->id.'/delete')}}" onclick="return confirmDelete();"><i class="fa fa-trash-o fa-fw"></i></a>
                @endif
                
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="text-center">
    {{$users->links()}}
</div>
</div>

@endsection