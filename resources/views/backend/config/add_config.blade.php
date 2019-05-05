@extends('layouts.backend.main_layout')
@section('title', 'Basic Site Configuration')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Site Configuration</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Customize Site Configuration
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                                $message=Session::get('message');
                                if ($message) {
                                    echo '<div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
                                      </div>';
                                    Session::put('message',null);
                                }
                            ?>
                            <form role="form" action="{{ url('/settings/save')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group {{$errors->has('profileName') ? 'has-error' : ''}}">
                                    <label>Profile Name</label>
                                    <input class="form-control" name="profileName" value="{{old('profileName')}}" placeholder="Enter your name">
                                    @if($errors->has('profileName'))
                                        <div class="help-block">
                                            {{$errors->first('profileName')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('designation') ? 'has-error' : ''}}">
                                    <label>Designation</label>
                                    <input class="form-control" name="designation" value="{{old('designation')}}"  placeholder="Enter your designation">
                                    @if($errors->has('designation'))
                                        <div class="help-block">
                                            {{$errors->first('designation')}}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('quoteMessage') ? 'has-error' : ''}}">
                                    <label>Quote Message</label>
                                    <textarea class="form-control" rows="5" name="quoteMessage" placeholder="Enter your quote">{{old('quoteMessage')}}</textarea>
                                    @if($errors->has('quoteMessage'))
                                        <div class="help-block">
                                            {{$errors->first('quoteMessage')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                                    <label>Address</label>
                                    <input type="text" class="form-control" value="{{old('address')}}" name="address" placeholder="Enter your address">
                                    @if($errors->has('address'))
                                        <div class="help-block">
                                            {{$errors->first('address')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('bgImage') ? 'has-error' : ''}}">
                                    <label>Backgraound Image</label>
                                    <input type="file" class="form-control"  name="bgImage">
                                    <img src="{{$}}" alt="">
                                    @if($errors->has('bgImage'))
                                        <div class="help-block">
                                            {{$errors->first('bgImage')}}
                                        </div>
                                    @endif
                                    <div class="text-warning">
                                        <p>Note: Aspect ratio of image should be 8:3. example: 2400x900px</p>
                                    </div>
                                </div>
                                <div class="form-group {{$errors->has('favicon') ? 'has-error' : ''}}">
                                    <label>Favicon</label>
                                    <input type="file" class="form-control"  name="favicon">
                                    @if($errors->has('favicon'))
                                        <div class="help-block">
                                            {{$errors->first('favicon')}}
                                        </div>
                                    @endif
                                    <div class="text-warning">
                                        <p>Note: Size of icon should be 1:1. example: 32x32px</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                <button class="btn btn-success col-xs-12" type="submit">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection