@extends('layouts.backend.main_layout')
@section('title', 'Add user')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add User</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            Add User
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    $message=Session::get('message');
                    if ($message) {
                        echo '<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
                        </div>';
                        Session::put('message',null);
                    }
                    ?>
                    <form role="form" action="{{ url('/user/save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                            <label>User Name</label>
                            <input class="form-control" name="name" value="{{old('name')}}" placeholder="example: John Doe">
                            @if($errors->has('name'))
                                <div class="help-block">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label>User Email</label>
                            <input class="form-control" name="email" value="{{old('email')}}" placeholder="example: john@gmail.com">
                            @if($errors->has('email'))
                                <div class="help-block">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                            <label>User Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter a new password of user">
                            @if($errors->has('password'))
                                <div class="help-block">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('password_confirmation') ? 'has-error' : ''}}">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter password again.">
                            @if($errors->has('password_confirmation'))
                                <div class="help-block">
                                    {{$errors->first('password_confirmation')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success col-xs-12" type="submit">Save</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection