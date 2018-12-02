@extends('layouts.backend.main_layout')
@section('title', 'Update About Page')

@section('admin_content')

<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Update About</h1>
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
                Background Image
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        
                        <form role="form" action="{{ url('about/background/update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{$errors->has('bgImage') ? 'has-error' : ''}}">
                                <label>Choose A Background Image for About Page</label>
                                <input type="file" class="form-control"  name="bgImage">
                                @if($errors->has('bgImage'))
                                    <div class="help-block">
                                        {{$errors->first('bgImage')}}
                                    </div>
                                @endif
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
<div class="row">
	<div class="col-lg-12">
        <div class="panel panel-default">
		    <div class="panel-heading">
		        Basic Site Configuration
    		</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        
                        <form role="form" action="{{ url('/about/save')}}" method="post">
                            @csrf
                            <div class="form-group {{$errors->has('aboutHeading') ? 'has-error' : ''}}">
                                <label>About Heading</label>
                                <input class="form-control " name="aboutHeading" value="{{$data==null ? 'About ' : $data->about_heading}}"  placeholder="example: About John Doe">

                                @if($errors->has('aboutHeading'))
                                    <div class="help-block">
                                        {{$errors->first('aboutHeading')}}
                                    </div>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="summernote" name="aboutText">{{$data==null ? '':$data->about_text}}</textarea>
                            </div>
                            <div class="form-group">
                                {{-- <input type="hidden" name="config_id" value="{{$data->config_id}}"> --}}
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