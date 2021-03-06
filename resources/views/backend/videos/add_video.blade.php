@extends('layouts.backend.main_layout')
@section('title', 'Add Youtube Video Link')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Add Video</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Add video link from youtube
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
                    $failed=Session::get('failed');
                    if ($failed) { 
                        echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$failed.'
                              </div>'; 
                        Session::put('failed',null);
                    }
                ?>
                <form role="form" action="{{ url('/video/save')}}" method="post">
                    @csrf
                    <div class="form-group {{$errors->has('videoTitle') ? 'has-error' : ''}}">
                        <label>Video Title</label>
                        <input type="text" name="videoTitle" class="form-control" value="{{old('videoTitle')}}" placeholder="example: Human Experience Sustainable Future">
                        @if($errors->has('videoTitle'))
                            <div class="help-block">
                                {{$errors->first('videoTitle')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('shortDescription') ? 'has-error' : ''}}">
                        <label>Short Description</label>
                        <textarea name="shortDescription" rows="3" class="form-control" placeholder="example: Human Experience Sustainable Future">{{old('shortDescription')}}</textarea>
                        @if($errors->has('shortDescription'))
                            <div class="help-block">
                                {{$errors->first('shortDescription')}}
                            </div>
                        @endif
                    </div>
                    <label >Youtube Link</label>
                    <div class="form-group input-group {{$errors->has('videoLink') ? 'has-error' : ''}}">

                        <span class="input-group-addon">http://</span>
                        <input type="text" name="videoLink" class="form-control" value="{{old('videoLink')}}" placeholder="example: https://www.youtube.com/watch?v=Bey4XXJAqS8">
                        
                    </div>
                    @if($errors->has('videoLink'))
                        <div class="help-block">
                            <p class="text-danger">{{$errors->first('videoLink')}}</p>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Publication Status</label>
                        <select class="form-control" name="publicationStatus">
                            <option value="1"> Active</option>
                            <option value="0"> Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success col-xs-12" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.col-lg-6 (nested) -->
        </div>
        </div>
    </div>
</div>
@endsection