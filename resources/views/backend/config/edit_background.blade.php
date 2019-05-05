@extends('layouts.backend.main_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Add Background Header Image</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<?php
    $message=Session::get('message');
    if ($message) { 
        echo '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
              </div>'; 
        Session::put('message',null);
    }
?>
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Background Header Image
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        
                        <form role="form" action="{{ url('background/update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{$errors->has('bgImage') ? 'has-error' : ''}}">
                                <label>Choose A Background Image for Pages</label>
                                <input type="file" class="form-control"  name="bgImage">
                                <img src="{{$backgroundConfig ? $backgroundConfig->bg_image : ''}}" class="img img-responsive img-thumbnail" alt="">
                                @if($errors->has('bgImage'))
                                    <div class="help-block">
                                        {{$errors->first('bgImage')}}
                                    </div>
                                @endif
                                <div class="text-warning">
                                    <p>Note: Size of Background Image should be 2000x335 px</p>
                                </div>
                            </div>
                            <div class="form-group">
                                {{-- <input type="hidden" name="config_id" value="{{$about->config_id}}"> --}}
                                <button class="btn btn-success col-xs-12" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection