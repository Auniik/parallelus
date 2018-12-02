@extends('layouts.backend.main_layout')
@section('title', 'Update Feature Page')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Update Feature</h1>
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
		        Update Feature
    		</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        
                        <form role="form" action="{{ url('/feature/save')}}" method="post">
                            @csrf
                            <div class="form-group  {{$errors->has('featureHeader') ? 'has-error' : ''}}">
                                <label>Feature Heading</label>
                                <input class="form-control" name="featureHeader" value="{{$data==null ? '' : $data->feature_header}}"  placeholder="example: Feature">
                                @if($errors->has('featureHeader'))
                                    <div class="help-block">
                                        {{$errors->first('featureHeader')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group  {{$errors->has('featureText') ? 'has-error' : ''}}">
                                <label>Description</label>
                                <textarea class="form-control" id="summernote" name="featureText">{{$data==null ? '' : $data->feature_text}}</textarea>
                                @if($errors->has('featureText'))
                                    <div class="help-block">
                                        {{$errors->first('featureText')}}
                                    </div>
                                @endif
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
</div>
@endsection